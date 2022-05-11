@extends('Layout.secondary')
@section('title', '- Proyek')
@section('content')
    <div class="container">
        <div class="row justify-content-between my-5">
            <div class="col-4">
                <h1><b>NAMA PROYEK</b></h1>
            </div>
            {{-- Rating --}}
            <div class="col-4 d-grid gap-2 d-md-flex justify-content-md-end align-items-center">
                <p class="align-items-center text-center align-middle my-auto fs-5"><b>5.0</b></p>
                <div>
                    <span class="material-icons md-36">
                        star_rate
                    </span>
                    <span class="material-icons md-36">
                        star_rate
                    </span>
                    <span class="material-icons md-36">
                        star_rate
                    </span>
                    <span class="material-icons md-36">
                        star_rate
                    </span>
                    <span class="material-icons md-36">
                        star_rate
                    </span>
                </div>
            </div>
            {{-- End Rating --}}
        </div>
        <div id="carouselExampleControls" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ URL::to('/assets/img/Jumbotron.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::to('/assets/img/Jumbotron.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::to('/assets/img/Jumbotron.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        {{-- Waktu --}}
        <div class="row mb-5">
            <div class="col">
                <p class="text-center fs-4 fw-bold">
                    Tanggal Mulai Proyek
                </p>
                <p class="text-center fs-5">
                    01/01/2022
                </p>
            </div>
            <div class="col">
                <p class="text-center fs-4 fw-bold">
                    Update Terakhir Proyek
                </p>
                <p class="text-center fs-5">
                    01/01/2022
                </p>
            </div>
            <div class="col">
                <p class="text-center fs-4 fw-bold">
                    Estimasi Selesai Tahap saat ini
                </p>
                <p class="text-center fs-5">
                    01/01/2022
                </p>
            </div>
            <div class="col">
                <p class="text-center fs-4 fw-bold">
                    Estimasi Selesai Proyek
                </p>
                <p class="text-center fs-5">
                    01/01/2022
                </p>
            </div>

        </div>
        {{-- End Waktu --}}
        {{-- Button Input --}}
        {{-- Btn Admin --}}
        {{-- <div class="row mb-5">
            <div class="col">
                <div class="d-grid">
                    <a href="" class="btn btn-utama">Input Fase Baru</a>
                </div>
            </div>
            <div class="col">
                <div class="d-grid">
                    <a href="" class="btn btn-utama">Input Progress Baru</a>
                </div>
            </div>
            <div class="col">
                <div class="d-grid">
                    <a href="" class="btn btn-utama">Lihat Dokumen Laporan</a>
                </div>
            </div>
        </div> --}}
        {{-- End Btn Admin --}}
        {{-- Btn User --}}
        <div class="row mb-5">
            <div class="col">
                <div class="d-grid">
                    <a href="" class="btn btn-utama">Input Aduan</a>
                </div>
            </div>
            <div class="col">
                <div class="d-grid">
                    <a href="" class="btn btn-utama">Lihat Dokumen Laporan</a>
                </div>
            </div>
        </div>
        {{-- End Button Input --}}
        {{-- tb Fase --}}
        <div class="mb-5">
            <h3 class="fw-bold mb-3">Fase</h3>
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">Nama Fase</th>
                        <th scope="col">Status</th>
                        <th scope="col-2">Tanggal Mulai</th>
                        <th scope="col-2">Tanggal Selesai</th>
                        <th scope="col-2">Update Terakhir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                </tbody>
            </table>
        </div>
        {{-- End tb Fase --}}
        {{-- progress --}}
        <div class="mb-5">
            {{-- Progress Bar --}}
            <h3 class="fw-bold mb-3">Progress</h3>
            <div class="progress mb-3">
                <div class="progress-bar bg-utama" style="width: 25%" role="progressbar" aria-valuemin="0"
                    aria-valuemax="100">
                </div>
            </div>
            <p class="fw-bold text-center">75%</p>
            {{-- End Progress Bar --}}
            {{-- Tb Progress --}}
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">Judul Progress</th>
                        <th scope="col">Deskripsi Singkat</th>
                        <th scope="col-2">Update Terakhir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
            {{-- End tb Progress --}}
        </div>
        {{-- End Progress --}}
        {{-- Feedback --}}
        <div class="mb-5">
            <h3 class="fw-bold mb-3">Feedback</h3>
            {{-- Isi Feedback --}}
            <div class="border border-3 rounded">
                <div class=" m-3">
                    {{-- Rating --}}
                    <div class="mb-3">
                        <span class="material-icons md-36">
                            star_rate
                        </span>
                        <span class="material-icons md-36">
                            star_rate
                        </span>
                        <span class="material-icons md-36">
                            star_rate
                        </span>
                        <span class="material-icons md-36">
                            star_rate
                        </span>
                        <span class="material-icons md-36">
                            star_rate
                        </span>
                    </div>
                    <h5 class="fw-bold">Bambang</h5>
                    <p>Hasilnya Sangat Memuaskan</p>
                </div>
                {{-- End Rating --}}
            </div>
        </div>
    </div>
    </div>
@endsection
