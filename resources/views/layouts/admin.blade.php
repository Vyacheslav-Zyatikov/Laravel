<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title> @yield('title') </title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/docs.css') }}">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
</head>
<body>

<x-admin.header></x-admin.header>

<div class="container-fluid">
    <div class="row">
        <x-admin.sidebar></x-admin.sidebar>

        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                @yield('header')
            </div>

            @yield('content')

        </main>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script src="{{asset('js/dashboard.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
