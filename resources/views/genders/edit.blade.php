@extends('genders.layout')
@section('content')

<div class="card mt-5">
    <h2 class="card-header">Edit the gender</h2>
    <div class="card-body">

        <form action="{{ route('genders.update', $gender->id) }}"
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
                    name="id" class="form-control"
                    value="{{ $gender->id }}"
                    id="inputId"
                    placeholder="id">
              </div>
              <div clas="d-flex flex-column flex-grow-1">
                <label for="inputName" class="form-label">
                <strong>Gender:</strong></label>
                <input
                  type="text"
                  name="gender"
                  class="form-control"
                  value="{{ $gender -> gender }}"
                  id="inputGender"
                  placeholder="Gender">
              </div>
            </div>
          </div>
          <div>
            <div clas="d-flex flex-column flex-grow-1">
              <div class="flex justify-end items-end gap-2" style="padding-top: 35px;">
                <button type="button" class="btn btn-success bg-primary px-4 text-white"
                    onclick="window.location='{{ route('genders.index') }}'">
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
