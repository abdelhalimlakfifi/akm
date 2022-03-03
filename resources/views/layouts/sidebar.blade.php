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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/4.0.2/js/dataTables.fixedColumns.min.js"></script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard-rtl/">
    <link rel="icon" href="{{ asset('images/logo-whitout-background.png') }}" type="image/x-icon">
    
    <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.0.2/css/fixedColumns.dataTables.min.css">
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
                            <a class="nav-link" aria-current="page" href="{{ route('get.add.categories') }}"><h5 id="categorie">إضافة شعبة</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('get.subscriber.update') }}"><h5 id="updateAbonnement"> تجديد الإشتراك </h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('get.subscriber.add') }}"> <h3 id="addAbonnement"> إضافة مشترك </h3> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('get.event.create') }}"><h5 id="event">إنشاء حدث</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('get.article.create') }}"><h5 id="article">كتابة مقال</h5></a>
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
