<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->

    @livewireStyles

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/content.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jadwal.css')}}">
    <link rel="stylesheet" href="{{ asset('css/tentangsekolah.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">


    <!-- orang tua -->
    <link rel="stylesheet" href="{{ asset('css/orangtua/homepageOrtu.css')}}">
    <link rel="stylesheet" href="{{ asset('css/orangtua/detailBerita.css')}}">

    <!-- guru -->
    <link rel="stylesheet" href="{{ asset('css/guru/homepageGuru.css')}}">
    <link rel="stylesheet" href="{{asset('css/sarandanmasukan.css')}}">
    <link rel="stylesheet" href="{{asset('css/guru/informasi.css')}}">

    <!-- admin -->
    <link rel="stylesheet" href="{{ asset('css/admin/homepageAdmin.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/finansial.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/tabVertical.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/homepageAdmin.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/finansial.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/saranDanBantuan.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/form.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/saranDanBantuan.css')}}">

    <!-- untuk owl carousel -->
    <link rel="stylesheet" href="{{ asset('assetsowlcarousel/owlcarousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assetsowlcarousel/owlcarousel/assets/owl.carousel.min.css')}}">

    <!-- table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <!--  -->

</head>

<body style="background-color: #F0F0F0;">
    <style>
        [data-href] {
            cursor: pointer;
        }
    </style>

    @yield('content')

    <!-- Scripts JS -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="{{ asset('js/tabVertical.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/listTable.js') }}"></script>

    <!-- untuk owl carousel script -->
    <script src="{{ asset('assetsowlcarousel/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{ asset('js/carouselOwl.js') }}"></script>
   

    <!-- grapik -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    

    @livewireScripts



</body>

</html>