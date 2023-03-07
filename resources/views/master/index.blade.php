<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('asset/css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ url('asset/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('asset/css/select2.min.css') }}">

    <title>@yield('title', "Judul")</title>
  </head>
  <body>
    
    <div class="container">
    @include('alert')
    @section('content')
    Bagian ini bisa di overwrite ya!
    @show
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ url('asset/js/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ url('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('asset/js/datatables.min.js') }}"></script>
    <script src="{{ url('asset/js/select2.full.min.js') }}"></script>

    {{-- @see https://laravel.com/docs/7.x/blade#stacks --}}
    @stack('js')
  </body>
</html>
