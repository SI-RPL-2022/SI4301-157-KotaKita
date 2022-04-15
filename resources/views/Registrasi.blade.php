<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .btn-login {
            background-color: #273793;
            color: white;
        }

        .bg-utama {
            background-color: #273793;
        }

        .utama {
            color: #273793;
            text-decoration: none;
        }
    </style>


    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">Proyek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">Pengaduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-login fw-bold px-4" href="#">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="Daftar">
        <div class="container py-5">
            <div class="text-center py-3">
                <h2 class="fw-bold">BUAT AKUN BARU</h2>
            </div>

            <!-- Form Regis -->
            <div class="row mb-2">
                <div class="col">
                    <label for="nama_awal" class="form-label fw-bold">Nama awal</label>
                    <input type="text" name="nama_awal" id="nama_awal" class="form-control">
                </div>
                <div class="col">
                    <label for="nama_akhir" class="form-label fw-bold">Nama akhir</label>
                    <input type="text" name="nama_akhir" id="nama_akhir" class="form-control">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <label for="domisili" class="form-label fw-bold">Domisili</label>
                    <select name="domisili" id="domisili" class="form-select"></select>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <label for="password" class="form-label fw-bold">Kata sandi</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>
            <div class="row mx-0 mb-4">
                <button type="submit" class="btn btn-login">Masuk</button>
            </div>
            <div class="text-center">
                <p class="fw-bold">Sudah Punya Akun? <a href="#" class="utama">Masuk</a></p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-utama text-muted">
        <div class="text-center py-3">
            <i class="text-white">@KotaKita.com</i>
        </div>
    </footer>
    <!-- Footer -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>