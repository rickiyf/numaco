<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Transporte Puerto Nuevo</title>
    <link rel="icon" type="image/png" href=" " sizes="64x64">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    
    <style>
  
    </style>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @yield('style')
</head>
<body style="font-family: 'Montserrat'; color: #595959;">
<div id="app">
    @include('inicio.header')
    <main class=" ">
        @yield('content')
    </main>
</div>

<!-- Optional JavaScript -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>

<script src="{{ asset('js/app.js') }}"></script>
<script>
    new WOW().init();
</script>
@yield('script')
</body>
</html>