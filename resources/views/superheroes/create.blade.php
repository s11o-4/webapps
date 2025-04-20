@extends('superheroes.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Create a new Superheroe</h2>
    <div class="card-body">

        <form action="{{ route('superheroes.store') }}" method="POST" class="grid grid-cols-2 p-4 min-w-full gap-x-4 gap-y-4">
        @csrf
          <div>
            <div>
              <div clas="d-flex flex-column flex-grow-1">
                <label for="inputName" class="form-label">
                <strong>id</strong></label>
                  <input
                    type="text"
                    name="id"
                    class="form-control"
                    id="inputId"
                    placeholder="SuperId">
              </div>
              <div clas="d-flex flex-column flex-grow-1">
                <label for="inputName" class="form-label">
                <strong>Firstname:</strong></label>
                <input
                  type="text"
                  name="real_firstname"
                  class="form-control"
                  id="InputFirstname"
                  placeholder="Firstname">
              </div>
              <div clas="d-flex flex-column flex-grow-1">
                <label for="inputName" class="form-label">
                <strong>Superpower</strong></label>
                <input
                  type="text"
                  name="superpower"
                  class="form-control"
                  id="InputLastname"
                  placeholder="Superpower">
              </div>
              <div clas="d-flex flex-column flex-grow-1">
                <label for="inputName" class="form-label">
                <strong>Superhero</strong></label>
                <input
                  type="text"
                  name="alter_ego"
                  class="form-control"
                  id="InputSuperhero"
                  placeholder="Superhero name">
              </div>
            </div>
          </div>
          <div>
            <div clas="d-flex flex-column flex-grow-1">
              <label for="inputName" class="form-label">
              <strong>UniverseId:</strong></label>
              <input
                type="text"
                name="universe_id"
                class="form-control"
                id="InputUniverseId"
                placeholder="UniverseId">
            </div>
            <div clas="d-flex flex-column flex-grow-1">
              <div>
                <label for="inputName" class="form-label">
                <strong>Lastname</strong></label>
                <input
                  type="text"
                  name="real_lastname"
                  class="form-control"
                  id="InputLastname"
                  placeholder="Lastname">
              </div>
              <div clas="d-flex flex-column flex-grow-1">
                <label for="inputName" class="form-label">
                <strong>Age</strong></label>
                <input
                  type="number"
                  name="age"
                  class="form-control"
                  id="InputAge"
                  placeholder="Age">
              </div>
              <div class="flex justify-end items-end gap-2" style="padding-top: 35px;">
                <button type="button" class="btn btn-success bg-primary px-4 text-white"
                    onclick="window.location='{{ route('superheroes.index') }}'">
                    Back
                </button>
                <button type="submit" class="btn btn-success">
                  <i class="fa-solid fa-floppy-disk"></i>
                    Submit
                </button>
              </div>
            </div>
          </div>
        </form>
    </div>
</div>
@endsection
