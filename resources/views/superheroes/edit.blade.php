@extends('superheroes.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Create a new Superheroe</h2>
    <div class="card-body">
        <form action="{{ route('superheroes.update', $superhero->id) }}"
              method="POST" class="grid grid-cols-2 p-4 min-w-full gap-x-4 gap-y-4">
        @csrf
        @method('PUT')
          <div>
            <div>
              <div clas="d-flex flex-column flex-grow-1">
                <label for="inputName" class="form-label">
                <strong>id</strong></label>
                  <input
                    type="text"
                    name="id"
                    value="{{ $superhero->id }}"
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
                  value="{{ $superhero->real_firstname }}"
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
                  value="{{ $superhero->superpower }}"
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
                  value="{{ $superhero->alter_ego }}"
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
                value="{{ $superhero->universe_id }}"
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
                  value="{{ $superhero->real_lastname }}"
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
                  value="{{ $superhero->age }}"
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
