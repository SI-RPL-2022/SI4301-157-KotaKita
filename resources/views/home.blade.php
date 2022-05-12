@extends('Layout.main')
@section('content')
    <style>
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
    <div id="jumbotron">
        <div class="image-container">
            <img class="img-fluid" src="{{ URL::to('/assets/img/Jumbotron.png') }}" alt="">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);"></div>
        </div>
        <div class='text-light jumbotron-text'>
            <p class="display-4">Welcome to KotaKita</p>
            <br>
            <center class="fs-4">Transparansi adalah jalan terbaik</center>
        </div>
        <div class="position-relative">
            <a href="#detail"><img src="{{ URL::to('/assets/img/arrow_down.svg') }}"
                    class="position-absolute bottom-0 start-50 translate-middle-x" alt=""></a>
        </div>
    </div>
    <div id="detail" class="container min-vh-100 mt-5 " data-offset="50">
        <div class="row text-center">
            <div class="col">
                <div class="card h-100 text-center border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-1 my-3 utama">8</h5>
                        <p class="card-text my-3 fs-3">Kota</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-1 my-3 utama">8</h5>
                        <p class="card-text my-3 fs-3">Proyek</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-1 my-3 utama">100</h5>
                        <p class="card-text my-3 fs-3">User</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <center class='utama my-5'>
                <h1>About Us</h1>
            </center>
            <center class="mt-3 mb-5 fs-3">sistem informasi pelaporan pengembangan kota yang digunakan untuk mengukur dan
                melaporkan pengembangan pada
                masing masing daerah. selain itu, website ini dapat memberikan transparansi atas keuangan dan progress
                dengan
                adanya fitur Tracking Progress Pengembangan.
            </center>
        </div>
        <div>
            <center class="utama my-5">
                <h1>Fasilitas KotaKita</h1>
            </center>
            <div class="my-5">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-image-top logo"></div>
                            <img src="{{ URL::to('/assets/img/fitur_progress.svg') }}" class="card-img-top mt-4 mb-3"
                                alt="..." height="60">
                            <div class="card-body">
                                <h5 class="card-title ">Cek Progress Proyek Pengembangan Kota</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <img src="{{ URL::to('/assets/img/fitur_laporan.svg') }}" class="card-img-top mt-4 mb-3"
                                alt="..." height="60">
                            <div class="card-body">
                                <h5 class="card-title ">Cek Laporan Proyek Pengembangan Kota</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <img src="{{ URL::to('/assets/img/fitur_aduan.svg') }}" class="card-img-top mt-4 mb-3"
                                alt="..." height="60">
                            <div class="card-body">
                                <h5 class="card-title ">Laporkan Aduan Masalah Proyek Pengembangan Kota</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <img src="{{ URL::to('/assets/img/fitur_feedback.svg') }}" class="card-img-top mt-4 mb-3"
                                alt="..." height="60">
                            <div class="card-body">
                                <h5 class="card-title ">Beri Masukan dan Saran pada Proyek Pengembangan Kota</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col d-grid">
                    <a href="/faq" class="btn btn-lg btn-utama">Cari Tau Lebih tentang kami</a>
                </div>
                <div class="col d-grid">
                    <a href="/contact" class="btn btn-lg btn-utama">Hubungi Kami Jika Mengalami Kendala</a>
                </div>
            </div>
        </div>
    </div>
@endsection
