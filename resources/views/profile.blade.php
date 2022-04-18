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


    <title>Halaman Profile</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="logo.png"></a>
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
                        <a class="btn btn-login fw-bold px-4" href="#">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="Profile" class="bg-light">
        <div class="container py-5">
            <h3 class="fw-bold">Profil</h3>
            <div class="bg-white rounded p-4">
                <div class="row">
                    <div class="col text-center">
                        <div class="foto">
                            <img src="user.png" alt="">
                        </div>
                        <a href="#" class="btn btn-login">Edit Profile</a>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <h4 class="fw-bold">Nama</h4>
                            <h4 class="fw-lighter">Naura Imanda Syaffa</h4>
                        </div>
                        <div class="mb-3">
                            <h4 class="fw-bold">Email</h4>
                            <h4 class="fw-lighter">nauraimanda09@gmail.com</h4>
                        </div>
                        <div class="mb-3">
                            <h4 class="fw-bold">Domisili</h4>
                            <h4 class="fw-lighter">Makassar</h4>
                        </div>
                    </div>
                </div>
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