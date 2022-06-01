@extends('Layout.secondary')
@section('title', '- Buat Fase Baru')
@section('content')

    <div class="container">
        <h1 class="fw-bold my-5">BUAT FASE BARU</h1>
        {{-- form buat fase --}}
        <form action="{{ route('fase.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- Get dari Proyek --}}
            <div class="form-outline mb-2" hidden>
                <label class="form-label fw-bold" for="proyek_id">Proyek</label>
                <input type="number" id="proyek_id" class="form-control" required name="proyek_id" value="{{ $proyek_id }}"/>
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="nama_fase">Nama Fase</label>
                <input type="text" id="nama_fase" class="form-control" name="nama_fase" value="{{ old('nama_fase') }}"/>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="tanggal_mulai">Tanggal Mulai</label>
                        <input type="date" id="tanggal_mulai" class="form-control" name="tanggal_mulai" value="{{ old('tanggal_mulai') }}"/>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="tanggal_akhir">Tanggal Akhir</label>
                        <input type="date" id="tanggal_akhir" class="form-control" name="tanggal_akhir" value="{{ old('tanggal_akhir') }}"/>
                    </div>
                </div>
            </div>

            <div class="form-outline mb-2">
                <label class="form-label" for="estimasi_pendanaan">Estimasi Pendanaan</label>
                <input type="number" id="estimasi_pendanaan" class="form-control" name="estimasi_pendanaan" value="{{ old('estimasi_pendanaan') }}"/>
            </div>
            {{-- ini untuk input awal --}}
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="file[]" id="file" multiple>
                <label class="input-group-text" for="file">Upload</label>
            </div>
            {{-- <div class="input-group">
                <input type="file" name="filenames[]" class="myfrm form-control">
                <div class="input-group-btn">
                    <button class="btn btn-utama-inverted" type="button"><i
                            class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                </div>
            </div> --}}
            {{-- ini untuk input yg udah ada, jadi buat edit atau delete --}}
            {{-- <div class="clone hide">
                <div class="input-group" style="margin-top:10px">
                    <input type="file" name="filenames[]" class="myfrm form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i>
                            Remove</button>
                    </div>
                </div>
            </div> --}}
            <div class="d-grid gap-2 mt-4 text-center">
                <button class="btn btn-utama" type="submit">Kirim</button>
            </div>
        </form>
        {{-- end form --}}
    </div>
@endsection
