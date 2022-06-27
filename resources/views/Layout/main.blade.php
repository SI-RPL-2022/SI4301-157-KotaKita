<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KotaKita @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ URL::to('/assets/img/logo.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('assets/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

    {{-- CSS Custom --}}
    <style>
        html {
            scroll-padding-top: 100px;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .btn-utama {
            background-color: #273793;
            color: white;
        }

        .btn-utama:hover {
            background-color: white;
            color: #273793;
            border-style: solid;
            border-color: #273793;
        }

        .btn-utama-inverted {
            background-color: white;
            color: #273793;
            border-style: solid;
            border-color: #273793;
        }

        .btn-utama-inverted:hover {
            background-color: #273793;
            color: white;
        }

        .bg-utama {
            background-color: #273793;
        }

        .utama {
            color: #273793;
        }

        .image-container {
            position: relative;
        }

        .mask {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-attachment: fixed;
        }

        .jumbotron-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .material-icons.md-18 {
            font-size: 18px;
        }

        .material-icons.md-24 {
            font-size: 24px;
        }

        /* Default */
        .material-icons.md-36 {
            font-size: 36px;
        }

        .material-icons.md-48 {
            font-size: 48px;
        }

        .table tr th {
            border-bottom: 2px solid #273793;
            border-radius: 10px;
            /* Change the color you want to set */
        }

        .table tr td {
            border-bottom: 1px solid #273793;
            border-radius: 10px;
            /* Change the color you want to set */
        }

        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center
        }

        .rating>input {
            display: none
        }

        .rating>label {
            position: relative;
            width: 1em;
            font-size: 30px;
            font-weight: 300;
            color: #FFD600;
            cursor: pointer
        }

        .rating>label::before {
            content: "\F586";
            position: absolute;
            opacity: 0
        }

        .rating>label:hover:before,
        .rating>label:hover~label:before {
            opacity: 1 !important
        }

        .rating>input:checked~label:before {
            opacity: 1
        }

        .rating:hover>input:checked~label:before {
            opacity: 0.4
        }

    </style>
    {{-- end CSS Custom --}}
    @stack('styles')
</head>

<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ URL::to('/assets/img/logo.png') }}" alt="Logo KotaKita"
                    height="50"></a>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-middle">
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('/proyek')) fw-bold active @endif utama"
                            href="/">Home</a>
                    </li>
                    @role('user|admin|super admin')
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('/dashboard')) fw-bold active @endif utama"
                            href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    @endrole
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('/layanan')) fw-bold active @endif"
                            href="{{ route('layanan.index') }}">Proyek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('/laporan')) fw-bold active @endif" href="{{ route('laporan.index') }}">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('/aduan')) fw-bold active @endif"
                            href="{{ route('aduan.create',0) }}">Pengaduan</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn btn-light nav-link dropdown-toggle" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="bi bi-person-circle"></i>
                                    {{ auth()->user()->name }}
                                </button>
                                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a></li>
                                    <li><a class="dropdown-item bg-danger text-light" href="#"
                                            onclick="event.preventDefault();document.getElementById('formLogout').submit()">Logout</a>
                                    </li>
                                    <form action="{{ route('logout') }}" method="post" id="formLogout">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link @if (Route::is('/aduan')) fw-bold active @endif"
                                href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Route::is('/aduan')) fw-bold active @endif"
                                href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    {{-- end Navbar --}}

    @yield('content')

    {{-- Footer --}}
    <footer class="mt-auto">
        <div class="p-3 text-white bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="#"><img src="{{ URL::to('/assets/img/logo.png') }}" alt="Logo KotaKita"
                                height='100'></a>
                        <p class="text-start">
                            <b>Developer KotaKita</b><br>
                            081234567<br>
                            kotakita@gmail.com
                        </p>
                    </div>
                    <div class="text-end col d-flex align-items-center">
                        <form action="" method="post">
                            @csrf
                            <div class="row">
                                <p class="text-center fw-bold">Berlangganan untuk mendapatkan berita</p>
                                <div class="col">
                                    <div class="form mb-3">
                                        <input type="text" class="form-control" id="Emailnewsletter"
                                            placeholder="Email" name="EmailNewsletter" required>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-utama">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- end Footer --}}
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    @include('layouts.sweetalert')
    @stack('scripts')
</body>

</html>
