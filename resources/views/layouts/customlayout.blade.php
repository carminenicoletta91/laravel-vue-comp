<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        {{-- CSRF TOKEN for VUE --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!--JS-->
        <script type="text/javascript" src="{{asset('js/app.js')}}"charset="utf"></script>
        <!--CSS-->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
      <header>

      </header>
      <div class="container">
        @yield('section')
      </div>

      <footer>
      </footer>
    </body>
</html>
