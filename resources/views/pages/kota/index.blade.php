@extends('Layout.secondary')
@section('title', '- Pilih Kota')
@section('content')
    <div class="container">
        <div class="row justify-content-between my-5">
            <div class="col-4">
                <h1><b>KOTA</b></h1>
            </div>
            {{-- Button Buat Proyek --}}
            <div class="col-2 d-grid gap-2 d-md-flex justify-content-md-end align-items-center">
              <a href="{{ route('kota.create') }}" class="btn btn-utama">Buat Kota Baru</a>
            </div>
          </div>

        {{-- Card Grid --}}
        <div class="row row-cols-1 row-cols-md-4 g-4">
            {{-- card --}}
            @foreach ($data_kota as $kota)
            <div class="col">
                <div class="card h-100 border-white">
                    {{-- imagenya diisi sama foto paling awal --}}
                    <img src="{{ $kota->gambar() }}" class="card-img-top" alt="Foto Kota">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $kota->nama }}</h5>
                        <div class="row gx-3">
                            <div class="col">
                                <div class="d-grid">
                                    <a href="" class="btn btn-utama">Cek</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-grid">
                                    <a href="{{ route('kota.edit',$kota->id) }}" class="btn btn-utama">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
