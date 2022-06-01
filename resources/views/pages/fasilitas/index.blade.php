@extends('Layout.secondary')
@section('title', '- Pilih Fasilitas')
@section('content')
    <div class="container">
        <div class="row justify-content-between my-5">
            <div class="col-4">
                <h1><b>FASILITAS</b></h1>
            </div>
        </div>
        {{-- Card Grid --}}
        <div class="row row-cols-1 row-cols-md-4 g-4">
            {{-- card --}}
            @foreach ($items as $item)
            <div class="col">
                <div class="card h-100 border-white">
                    {{-- imagenya isi dgn foto awal aja --}}
                    <img src="{{ $item->gambar() }}" class="card-img-top" alt="Foto Fasilitas">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $item->nama_proyek }}</h5>
                        <div class="row gx-3">
                            <div class="col">
                                <div class="d-grid">
                                    <a href="{{ route('fasilitas.show',$item->id) }}" class="btn btn-utama">Cek</a>
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
