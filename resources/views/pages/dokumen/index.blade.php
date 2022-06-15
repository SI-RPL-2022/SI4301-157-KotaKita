@extends('Layout.secondary')
@section('title', '- Dokumen Proyek')
@section('content')
    {{-- page ini muncul kalo user klik laporan dari navbar --}}
    <div class="container">
        <h1 class="my-5 fw-bold">LIST DOKUMEN PROYEK</h1>
        {{-- Search --}}
        <form class="d-flex mb-3" action="{{ route('laporan.search') }}">
            <input class="form-control me-2" type="search" placeholder="Cari Proyek" aria-label="Search" name="q" value="{{ $q ?? '' }}">
            <button class="btn btn-utama-inverted" type="submit">Cari</button>
        </form>
        {{-- End Search --}}
        @forelse ($items as $item)
            <div class="accordion mb-4" id="accordionExample">
                {{-- Accordion per Proyek --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne{{ $item->id }}">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne{{ $item->id }}" aria-expanded="true"
                            aria-controls="collapseOne{{ $item->id }}">
                            <div class="row align-items-center">
                                {{-- Logo Proyek --}}
                                <div class="col">
                                    <img src="{{ $item->logo() }}" alt="Logo Proyek" class="img-fluid">
                                </div>
                                {{-- Nama & Proyek --}}
                                <div class="col">
                                    <div class="row">
                                        <h4 class="fw-bold my-3">{{ $item->nama_proyek }}</h4>
                                    </div>
                                    <div class="row">
                                        <h5>Status Proyek: {{ $item->firstFase()->nama_fase ?? 'Tidak ada Fase' }}</h5>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseOne{{ $item->id }}" class="accordion-collapse collapse"
                        aria-labelledby="headingOne{{ $item->id }}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @foreach ($item->fases as $fase)
                                {{-- Judul Fase --}}
                                <h5 class="fw-bold">{{ $fase->nama_fase }}</h5>
                                {{-- List Dokumen --}}
                                <div class="row row-cols-4">
                                    {{-- 1 Dokumen --}}
                                    @forelse ($fase->documents as $doc)
                                        <div class="col mb-3">
                                            <a href="{{ route('laporan.download',[$item->id,$fase->id,$doc->id]) }}" class="utama text-break">Dokumen {{ $loop->iteration }}</a>
                                        </div>
                                        @empty
                                        <small>Tidak Ada</small>
                                    @endforelse
                                </div>
                                {{-- End Fase --}}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @empty
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <p class="text-center">
                        @if ($q)
                        Proyek "{{ $q }}" tidak ditemukan.
                        @else
                        Laporan Proyek tidak ada.
                        @endif
                    </p>
                </div>
            </div>
        </div>
        @endforelse
    </div>
@endsection
