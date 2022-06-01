@extends('Layout.secondary')
@section('title', '- Tambah Progress')
@section('content')
    <div class="container">
        <h1 class="my-5 fw-bold">TAMBAH PROGRESS PROYEK</h1>
        <form action="{{ route('fase-progress.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- Get dari Fase Terakhir --}}
            <div class="form-outline mb-2">
                <label class="form-label fw-bold" for="fase_id">Fase</label>
                <input type="text" id="fase_id" name="fase_id" class="form-control" hidden value="{{ $fase->id }}" />
            </div>
            <div class="form-outline mb-2">
                <label class="form-label fw-bold" for="judul_progress">Judul Progress</label>
                <input type="text" id="judul_progress" name="judul_progress" class="form-control" required />
            </div>
            <div class="form-outline mb-2">
                <label class="form-label fw-bold" for="deskripsi_singkat">Deskripsi Singkat Progress</label>
                <textarea name="deskripsi_singkat" id="deskripsi_singkat" cols="30" rows="3" class="form-control"></textarea>
            </div>
            <div class="form-outline mb-2">
                <label class="form-label fw-bold" for="pengeluaran">Pengeluaran</label>
                <input type="text" id="pengeluaran" name="pengeluaran" class="form-control" required />
            </div>
            {{-- Input File Baru, untuk input laporan ini cuma bisa ekstensi pdf aja --}}
            <label class="form-label fw-bold" for="document">Input Laporan</label>
            <div class="input-group">
                <input type="file" name="document[]" class="myfrm form-control" multiple>
                <div class="input-group-btn">
                    <button class="btn btn-utama-inverted" type="button"><i
                            class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                </div>
            </div>
            <p>*Maks 10mb</p>
            {{-- Input File setelah Upload Berhasil --}}
            {{-- <div>
                <div class=" input-group mt-3">
                    <input type="file" name="filenames[]" class="myfrm form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i>
                            Remove</button>
                    </div>
                </div>
            </div> --}}
            {{-- Input File Baru, untuk bagian foto cuma bisa foto aja --}}
            <label class="form-label mt-3 fw-bold" for="foto">Input Foto</label>
            <div class="input-group">
                <input type="file" name="foto[]" id="foto" class="myfrm form-control" multiple>
                <div class="input-group-btn">
                    <button class="btn btn-utama-inverted" type="button"><i
                            class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                </div>
            </div>
            <p>*Maks 10mb</p>
            {{-- Input File setelah Upload Berhasil --}}
            {{-- <div>
                <div class=" input-group mt-3">
                    <input type="file" name="filenames[]" class="myfrm form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i>
                            Remove</button>
                    </div>
                </div>
            </div> --}}

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="status" id="status">
                <label class="form-check-label" for="status">
                    Selesaikan Fase saat ini?
                </label>
            </div>

            <div class="d-grid gap-2 mt-4 text-center"><button class="btn btn-utama" type="submit">Kirim</button></div>
        </form>
        </form>
    </div>
@endsection
