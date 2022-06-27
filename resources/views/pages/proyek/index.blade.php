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
              @can('proyek-create')
              <a href="{{ route('proyek.create') }}" class="btn btn-utama">Buat Proyek Baru</a>
              @endcan
            </div>
          </div>

        {{-- Card Grid --}}
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($items as $item)
            <div class="col">
                <div class="card h-100 border-white">
                    <img src="{{ $item->gambar() }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $item->nama_proyek }}</h5>
                        <div class="row gx-3">
                            <div class="col">
                                <div class="d-grid">
                                    <a href="{{ route('proyek.show',$item->id) }}" class="btn btn-utama">Cek</a>
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
