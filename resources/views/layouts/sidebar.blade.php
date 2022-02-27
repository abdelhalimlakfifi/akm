<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AKM') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard-rtl/">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}">

    <style>
        nav .navbar-nav li a{
  color: white !important;
  }
    </style>
</head>

<body>
    <div id="app">

        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" dir="rtl">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">اسم الشركة</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="عرض/إخفاء لوحة التنقل">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-dark w-100" type="text" placeholder="بحث" aria-label="بحث">
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    <a class="nav-link px-3" href="#">تسجيل الخروج</a>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block navbar navbar-dark bg-dark sidebar text-white collapse">
                    <div class="position-sticky pt-3 ">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">
                                    <span data-feather="home"></span>
                                    لوحة القيادة
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file"></span>
                                    الطلبات
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="shopping-cart"></span>
                                    المنتجات
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="users"></span>
                                    الزبائن
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="bar-chart-2"></span>
                                    التقارير
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="layers"></span>
                                    التكاملات
                                </a>
                            </li>
                        </ul>

                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>التقارير المحفوظة</span>
                            <a class="link-secondary" href="#" aria-label="إضافة تقرير جديد">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    الشهر الحالي
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    الربع الأخير
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    التفاعل الإجتماعي
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    مبيعات نهاية العام
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">لوحة القيادة</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group me-2">
                                <button type="button" class="btn btn-sm btn-outline-secondary">مشاركة</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">تصدير</button>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                <span data-feather="calendar"></span>
                                هذا الأسبوع
                            </button>
                        </div>
                    </div>

                    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

                    <h2>عنوان القسم</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">عنوان</th>
                                    <th scope="col">عنوان</th>
                                    <th scope="col">عنوان</th>
                                    <th scope="col">عنوان</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1,001</td>
                                    <td>بيانات</td>
                                    <td>عشوائية</td>
                                    <td>تثري</td>
                                    <td>الجدول</td>
                                </tr>
                                <tr>
                                    <td>1,002</td>
                                    <td>تثري</td>
                                    <td>مبهة</td>
                                    <td>تصميم</td>
                                    <td>تنسيق</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>عشوائية</td>
                                    <td>غنية</td>
                                    <td>قيمة</td>
                                    <td>مفيدة</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>معلومات</td>
                                    <td>تثري</td>
                                    <td>توضيحية</td>
                                    <td>عشوائية</td>
                                </tr>
                                <tr>
                                    <td>1,004</td>
                                    <td>الجدول</td>
                                    <td>بيانات</td>
                                    <td>تنسيق</td>
                                    <td>قيمة</td>
                                </tr>
                                <tr>
                                    <td>1,005</td>
                                    <td>قيمة</td>
                                    <td>مبهة</td>
                                    <td>الجدول</td>
                                    <td>تثري</td>
                                </tr>
                                <tr>
                                    <td>1,006</td>
                                    <td>قيمة</td>
                                    <td>توضيحية</td>
                                    <td>غنية</td>
                                    <td>عشوائية</td>
                                </tr>
                                <tr>
                                    <td>1,007</td>
                                    <td>تثري</td>
                                    <td>مفيدة</td>
                                    <td>معلومات</td>
                                    <td>مبهة</td>
                                </tr>
                                <tr>
                                    <td>1,008</td>
                                    <td>بيانات</td>
                                    <td>عشوائية</td>
                                    <td>تثري</td>
                                    <td>الجدول</td>
                                </tr>
                                <tr>
                                    <td>1,009</td>
                                    <td>تثري</td>
                                    <td>مبهة</td>
                                    <td>تصميم</td>
                                    <td>تنسيق</td>
                                </tr>
                                <tr>
                                    <td>1,010</td>
                                    <td>عشوائية</td>
                                    <td>غنية</td>
                                    <td>قيمة</td>
                                    <td>مفيدة</td>
                                </tr>
                                <tr>
                                    <td>1,011</td>
                                    <td>معلومات</td>
                                    <td>تثري</td>
                                    <td>توضيحية</td>
                                    <td>عشوائية</td>
                                </tr>
                                <tr>
                                    <td>1,012</td>
                                    <td>الجدول</td>
                                    <td>تثري</td>
                                    <td>تنسيق</td>
                                    <td>قيمة</td>
                                </tr>
                                <tr>
                                    <td>1,013</td>
                                    <td>قيمة</td>
                                    <td>مبهة</td>
                                    <td>الجدول</td>
                                    <td>تصميم</td>
                                </tr>
                                <tr>
                                    <td>1,014</td>
                                    <td>قيمة</td>
                                    <td>توضيحية</td>
                                    <td>غنية</td>
                                    <td>عشوائية</td>
                                </tr>
                                <tr>
                                    <td>1,015</td>
                                    <td>بيانات</td>
                                    <td>مفيدة</td>
                                    <td>معلومات</td>
                                    <td>الجدول</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>


        <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
            integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
            integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
        </script>
        <script src="dashboard.js"></script>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>