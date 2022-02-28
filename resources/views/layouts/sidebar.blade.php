<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AKM | جمعية الكشف المنير</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard-rtl/">
    <link rel="icon" href="{{ asset('images/logo-whitout-background.png') }}" type="image/x-icon">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}"> -->

    <style>
        nav .navbar-nav li a {
            color: white !important;
        }

    </style>
</head>

<body>
    <div id="app">
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
                <div href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <a href="{{ route('logout') }}" class="btn btn-outline-primary me-2" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        تسجيل الخروج</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>

                <div class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <img src="{{ asset('images/Screenshot_2022-02-26_002843-removebg-preview.png') }}" alt=""
                        height="70">
                </div>
                <div class="col-md-3 text-end">

                </div>
            </header>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link h5" aria-current="page" href="#">إضافة شعبة</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h5" href="#">تجديد الإشتراك</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h3" href="#"> إضافة مشترك </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h5" href="#">إنشاء حدث</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h5" href="#">كتابة مقال</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="mr-5 py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
