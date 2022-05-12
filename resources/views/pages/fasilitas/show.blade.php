@extends('Layout.secondary')
@section('title', '- Dokumen Proyek')
@section('content')
    <div class="container py-5 mb-5">
        <div class="my-3">
            <h3 class="fw-bold">Nama Fasilitas</h3>
        </div>

        <div class="row g-4">
            <div class="col-md-5 p-3">
                <div class="foto-fasilitas">
                    <i class="text-white">ini masih div, nanti di ganti img trus pake kelas ini</i>
                </div>
            </div>
            <div class="col-md-7 p-3">
                <div class="row mb-3">
                    <div class="col">
                        <h4 class="fw-bold">Keterangan</h4>
                    </div>
                    <!-- Yang ini nyalain nya kalau dalam posisi login admin aja tombol editnya -->
                    <div class="col text-end">
                        <a href="#" class="btn btn-login px-4">Edit</a>
                    </div>
                </div>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, </p>

                <!-- Kalau lg admin matiin aja ini tombol -->
                <a href="#" class="btn btn-login w-100">Input Feedback</a>
            </div>
        </div>


        <div class=" my-3">
            <h3 class="fw-bold">Keterangan</h3>
        </div>
        <div class="card border-2 rounded w-100 p-3">
            <div class="bintang">
                <!-- Ini nnt fornya diatur sesuai rating biar bintangnya sesuai rating -->
                <?php for ($i=0;$i<5; $i++): ?>
                <i class="bi bi-star-fill"></i>
                <?php endfor ?>

                <h5 class="fw-bold my-2">Bambang</h5>

                <p>Pengerjaan bagus</p>
            </div>
        </div>
    </div>
@endsection
