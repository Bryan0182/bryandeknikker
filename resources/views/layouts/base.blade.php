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
    <link rel="icon" type="image/x-icon" href="{{URL('/output/images/BK-favicon.svg')}}">
    <!-- Einde favicon -->

    <!-- Begin Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          crossorigin="anonymous">
    <!-- Einde Bootstrap CSS -->

    <!-- Begin Slick Slider CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>
    <!-- Einde Slick Slider CSS -->

    <!-- Begin eigen CSS -->
    <link rel="stylesheet" href="{{ asset('/output/css/app.min.css') }}">
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

<!-- Begin jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Einde jQuery -->

<!-- Begin Slick Slider JS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
<!-- Einde Slick Slider JS -->

<!-- Begin eigen JS -->
<script src="{{ asset('/output/js/app.min.js') }}"></script>
@stack('scripts')
<!-- Einde eigen JS -->
</body>
</html>
