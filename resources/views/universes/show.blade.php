@extends('universes.layout')
@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body class="font-sans antialiased">
    <p class="flex items-center justify-center text-5xl font-extrabold mt-4">
        universes
        <span class="bg-blue-100 text-blue-800 text-2xl font-semibold
            me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-2">
        Recorded
        </span>
    </p>
    <div class="container flex flex-col mx-12 items-center justify-center">
        <div class="flex items-end justify-end min-w-full pr-6">
            <a class="btn btn-primary btn-sm"
            href="{{ route('universes.index') }}">
                <i class="fa fa-arrow-left"></i>
                Back
            </a>
        </div>
        <table class="table table-bordered table-striped mt-4">
            <tbody>
              <thead>
                <tr>
                  <th width="80px">Id</th>
                  <th class="font-extrabold">Name</th>
                  <th class="font-extrabold">Description</th>
                  <th class="font-extrabold">Type</th>
                </tr>
              </thead>
                <tr>
                    <td class="font-bold">
                        <span class="font-extrabold">
                            {{ $universe->id }}
                        </span>
                    </td>
                    <td>{{ $universe->name }}</td>
                    <td>{{ $universe->description }}</td>
                    <td>{{ $universe->type }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
