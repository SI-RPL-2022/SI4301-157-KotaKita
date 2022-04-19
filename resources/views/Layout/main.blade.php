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

    </style>
    {{-- end CSS Custom --}}
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
                        <a class="nav-link fw-bold active utama" href="/">Home</a>
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
                    <li class="nav-item">
                        <a class="btn btn-utama fw-bold px-4" href="/login">Masuk</a>
                    </li>
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
                            <div class="row ">
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
</body>

</html>
