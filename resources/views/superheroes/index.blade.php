@extends('superheroes.layout')
@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body class="font-sans antialiased">
    <p class="flex items-center justify-center text-5xl font-extrabold mt-4">
        Superheroes
        <span class="bg-blue-100 text-blue-800 text-2xl font-semibold
            me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-2">
        Recorded
        </span>
    </p>
    <div class="container flex-col mx-12 items-center justify-center">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end min-w-full pr-6">
            <a class="btn btn-success btn-sm bg-primary" href="{{ route('superheroes.create') }}">
            <i class="fa fa-plus"></i>Add New order</a>
        </div>
        <table class="table table-bordered table-striped mt-4">
            <tbody>
              <thead>
                <tr>
                  <th width="80px">Id</th>
                  <th class="font-extrabold">Universe</th>
                  <th class="font-extrabold">Superheroe</th>
                </tr>
              </thead>
              @forelse ($superheroes as $superhero)
                <tr>
                    <td class="font-bold">
                        <span class="font-extrabold">
                            {{ $superhero->id }}
                        </span>
                    </td>
                    <td>{{ $superhero->universe->name }}</td>
                    <td>{{ $superhero->alter_ego }}</td>
                    <td class="w-60">
                      <form action="{{ route('superheroes.destroy',$superhero->id) }}" method="POST">
                          <div class="flex justify-center items-center min-w-full gap-2 pr-2">
                               <div class="inline">
                                  <a class="btn btn-info btn-sm"
                                    href="{{ route('superheroes.show', $superhero->id) }}">
                                  <i class="fa-solid fa-list">
                                  </i>Show</a>
                              </div>
                              <div class="inline">
                                  <a class="btn btn-primary btn-sm"
                                    href="{{ route('superheroes.edit', $superhero->id) }}">
                                  <i class="fa-solid fa-pen-to-square">
                                  </i>Edit</a>
                              </div>
                              <div class="inline">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-sm">
                                  <i class="fa-solid fa-trash"></i>
                                      Delete
                                  </button>
                              <div>
                          </div>
                      </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">There are no data.</td>
                </tr>
              @endforelse
            </tbody>
        </table>
    </div>
</body>
