@extends('Layout.secondary')
@section('title', '- Pilih Proyek')
@section('content')
    <div class="container">
        <div class="row justify-content-between my-5">
            <div class="col-4">
                <h1><b>PROYEK</b></h1>
            </div>
            {{-- Button Buat Proyek --}}
            <div class="col-2 d-grid gap-2 d-md-flex justify-content-md-end align-items-center">
              <a href="" class="btn btn-utama">Buat Proyek Baru</a>
            </div>
          </div>

        {{-- Card Grid --}}
        <div class="row row-cols-1 row-cols-md-4 g-4">
            {{-- card --}}
            <div class="col">
                <div class="card h-100 border-white">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <div class="row gx-3">
                            <div class="col">
                                <div class="d-grid">
                                    <a href="" class="btn btn-utama">Cek</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- End Card --}}
            <div class="col">
                <div class="card h-100 border-white">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <div class="row gx-3">
                            <div class="col">
                                <div class="d-grid">
                                    <a href="" class="btn btn-utama">Cek</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-white">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <div class="row gx-3">
                            <div class="col">
                                <div class="d-grid">
                                    <a href="" class="btn btn-utama">Cek</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-white">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <div class="row gx-3">
                            <div class="col">
                                <div class="d-grid">
                                    <a href="" class="btn btn-utama">Cek</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
