@extends('universes.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Create a new universee</h2>
    <div class="card-body">
        <form action="{{ route('universes.store') }}" method="POST" class="grid grid-cols-2 p-4 min-w-full gap-x-4 gap-y-4">
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
                    placeholder="UniverseId">
              </div>
              <div clas="d-flex flex-column flex-grow-1">
                <label for="inputName" class="form-label">
                <strong>Description</strong></label>
                <input
                  type="text"
                  name="description"
                  class="form-control"
                  id="InputDescription"
                  placeholder="Description">
              </div>
           </div>
          </div>
          <div>
            <div clas="d-flex flex-column flex-grow-1">
              <div clas="d-flex flex-column flex-grow-1">
                <label for="inputName" class="form-label">
                <strong>Name:</strong></label>
                <input
                  type="text"
                  name="name"
                  class="form-control"
                  id="InputUniverseName"
                  placeholder="Universe name">
              </div>
              <div clas="d-flex flex-column flex-grow-1">
                <label for="inputName" class="form-label">
                <strong>Type:</strong></label>
                <input
                  type="text"
                  name="type"
                  class="form-control"
                  id="InputUniverseName"
                  placeholder="Type">
              </div>
              <div class="flex justify-end items-end gap-2" style="padding-top: 35px;">
                <button type="button" class="btn btn-success bg-primary px-4 text-white"
                    onclick="window.location='{{ route('universes.index') }}'">
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
