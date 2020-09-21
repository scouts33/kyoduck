<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin-lte.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="/admin/home" class="brand-link logo-switch">
            <span>관리자 페이지</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="/admin/list" class="nav-link">
                            <p>
                                관리자 관리
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="content-wrapper px-4 py-2" style="min-height: 688px;">
        @yield('content')
    </div>
</div>
</body>
</html>
