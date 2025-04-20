<!DOCTYPE html>
<html>
  <head>
    <title>This is Laravel!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    @vite('resources/css/app.css')
  </head>
  <body>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
