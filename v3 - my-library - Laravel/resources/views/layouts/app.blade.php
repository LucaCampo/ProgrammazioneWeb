<!DOCTYPE html>
<html lang="it"> 
 <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>My Library</title> 

      <link rel="stylesheet" href="{{ asset('css/bootstrap_v2.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

      <script src="{{ asset('js/jquery.js') }}"></script>
      <script src="{{ asset('js/jquery-3.6.0.slim.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.js') }}"></script>
   </head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>
</body>
</html>