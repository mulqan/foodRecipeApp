<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Exchange Food Recipe App</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
      @include('partials.navbar')
      @yield('content')
      @include('partials.footer')
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
