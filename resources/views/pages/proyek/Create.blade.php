@extends('Layout.secondary')
@section('title', '- Buat Proyek')
@section('content')
    <div class="container">
        <h1 class="my-5 fw-bold">BUAT PROYEK BARU</h1>
        <form action="{{ route('proyek.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-outline mb-2">
                <label class="form-label" for="nama_proyek">Nama Proyek</label>
                <input class="form-control form-control-lg" type="text" placeholder="Nama Proyek"
                    aria-label=".form-control-lg example" required autofocus name="nama_proyek">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="kota_id">Kota</label>
                <select name="kota_id" id="kota_id" class="form-control">
                    <option value="" selected disabled>-- Pilih Kota --</option>
                    @foreach ($data_kota as $kota)
                        <option value="{{ $kota->id }}">{{ $kota->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="gambar">Tambah Gambar</label>
                <div class="input-group">
                    <input type="file" name="gambar" class="myfrm form-control" id="gambar">
                </div>
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="logo">Tambah Logo</label>
                <div class="input-group">
                    <input type="file" id="logo" name="logo" class="myfrm form-control">
                </div>
            </div>
            {{-- Input File Baru --}}
            <div class="row mb-2">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="tanggal_mulai">Tanggal Mulai</label>
                        <input type="date" id="tanggal_mulai" class="form-control" required  name="tanggal_mulai"/>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="tanggal_akhir">Tanggal Akhir</label>
                        <input type="date" id="tanggal_akhir" class="form-control" name="tanggal_akhir" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-outline">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" cols="30" rows="4" class="form-control" placeholder="Keterangan"></textarea>
                </div>
            </div>
            <div class="d-grid gap-2 mt-4 text-center"><button class="btn btn-utama" type="submit">Kirim</button></div>
        </form>
    </div>
@endsection
