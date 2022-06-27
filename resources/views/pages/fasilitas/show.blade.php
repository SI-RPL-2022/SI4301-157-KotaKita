@extends('Layout.secondary')
@section('title', '- Dokumen Proyek')
@section('content')
    <div class="container py-5 mb-5">
        <div class="my-3">
            <h3 class="fw-bold">Nama Fasilitas</h3>
        </div>

        <div class="row g-4">
            <div class="col-md-5 p-3">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ $item->gambar() }}" class="d-block w-100" alt="foto fasilitas">
                        </div>
                        @foreach ($item->galleries as $gallery)
                            <div class="carousel-item">
                                <img src="{{ $gallery->foto() }}" class="d-block w-100" alt="foto fasilitas">
                            </div>
                        @endforeach
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
            </div>
            <div class="col-md-7 p-3">
                <div class="row mb-3">
                    <div class="col">
                        <h4 class="fw-bold">Keterangan</h4>
                    </div>
                    <!-- Yang ini nyalain nya kalau dalam posisi login admin aja tombol editnya -->
                    <div class="col text-end">
                        @role('admin|super admin')
                        <a href="{{ route('fasilitas.edit', $item->id) }}" class="btn btn-utama px-4">Edit</a>
                        @endrole
                    </div>
                </div>
                <p class="text-justify">
                    {{ $item->keterangan }}
                </p>

                <!-- Kalau lg admin matiin aja ini tombol -->
                <a href="{{ route('feedback.create') }}?proyek={{ $item->id }}" class="btn btn-utama w-100">Input Feedback</a>
            </div>
        </div>


        <div class=" my-3">
            <h3 class="fw-bold">Feedback</h3>
        </div>
        <div class="card border-2 rounded w-100 p-3">
            @foreach ($item->feedbacks as $feedback)
            <div class="bintang">
                <!-- Ini nnt fornya diatur sesuai rating biar bintangnya sesuai rating -->
                <?php for ($i=0;$i<$feedback->rating; $i++): ?>
                <i class="bi bi-star-fill"></i>
                <?php endfor ?>

                <h5 class="fw-bold my-2">{{ $feedback->user->name ?? '-' }}</h5>

                <p>{{ $feedback->feedback }}</p>
            </div>
            <hr>
            @endforeach
        </div>
    </div>
@endsection
