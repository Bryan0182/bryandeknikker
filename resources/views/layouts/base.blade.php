<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Begin pagina titel -->
    <title>@yield('pageTitle', 'Bryan de Knikker') - Bryan de Knikker</title>
    <!-- Einde pagina titel -->

    <!-- Begin favicon -->
    <link rel="icon" type="image/x-icon" href="{{URL('/images/BK-favicon.svg')}}">
    <!-- Einde favicon -->

    <!-- Begin Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          crossorigin="anonymous">
    <!-- Einde Bootstrap CSS -->

    <!-- Begin eigen CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
    <!-- Einde eigen CSS -->
</head>
<body>
<!-- Begin algemene header -->
@include('partials.header')
<!-- Einde algemene header -->

<!-- Begin pagina-specifieke content -->
<div class="content">
    @yield('content')
</div>
<!-- Einde pagina-specifieke content -->

<!-- Begin algemene footer -->
@include('partials.footer')
<!-- Einde algemene footer -->

<!-- Begin Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<!-- Einde Bootstrap JS -->
</body>
</html>
