@extends('genders.layout')
@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body class="font-sans antialiased">
    <h2 class="text-center text-gray-400 text-3xl mt-4">
        <span class="text-3xl">
            Genders recorded
        </span>
    </h2>
    <div class="container flex mx-12 items-center justify-center">
        <table class="table table-bordered table-striped mt-4">
            <tbody>
              <thead>
                <tr>
                  <th width="80px">Gender Id</th>
                  <th>Gender</th>
                </tr>
              </thead>
              @forelse ($genders as $gender)
                <tr>
                    <td>{{ $gender->id }}</td>
                    <td>{{ $gender->gender }}</td>
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
