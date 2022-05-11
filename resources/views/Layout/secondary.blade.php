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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

    </style>
    {{-- End Custom CSS --}}
</head>

<body class="d-flex flex-column min-vh-100">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ URL::to('/assets/img/logo.png') }}" alt="Logo KotaKita"
                    height="50"></a>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('/')) fw-bold active @endif" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('/proyek')) fw-bold active @endif" href="#">Proyek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('/laporan')) fw-bold active @endif" href="#">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('/aduan')) fw-bold active @endif"
                            href="#">Pengaduan</a>
                    </li>
                    {{-- Guest --}}
                    {{-- <li class="nav-item">
                        <a class="btn btn-utama fw-bold px-4" href="/login">Masuk</a>
                    </li> --}}
                    
                    {{-- Registered --}}
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-light nav-link dropdown-toggle p-1" type="button"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><span
                                    class="material-icons md-36 align-middle">account_circle</span>
                                Nama
                            </button>
                            <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item bg-danger text-light" href="#">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end Navbar --}}

    @yield('content')

    {{-- Footer --}}

    <footer class="mt-auto">
        <div class="text-center p-3 text-white" style="background-color: #273793;">
            <center>@KotaKita 2022</center>
        </div>
    </footer>
    {{-- end Footer --}}
</body>

</html>
