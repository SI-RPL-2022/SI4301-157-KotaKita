@extends('Layout.secondary')
@section('title', '- Tambah Progress')
@section('content')
    <div class="container">
        <h1 class="my-5 fw-bold">TAMBAH PROGRESS PROYEK</h1>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-outline mb-2">
                <label class="form-label fw-bold" for="form6Example5">Judul Progress</label>
                <input type="email" id="form6Example5" class="form-control" required />
            </div>
            <div class="form-outline mb-2">
                <label class="form-label fw-bold" for="form6Example5">Deskripsi Singkat Progress</label>
                <input type="email" id="form6Example5" class="form-control" required />
            </div>
            {{-- Input File Baru --}}
            <label class="form-label fw-bold" for="form6Example5">Input Laporan</label>
            <div class="input-group">
                <input type="file" name="filenames[]" class="myfrm form-control">
                <div class="input-group-btn">
                    <button class="btn btn-utama-inverted" type="button"><i
                            class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                </div>
            </div>
            <p>*Maks 10mb</p>
            {{-- Input File setelah Upload Berhasil --}}
            <div>
                <div class=" input-group mt-3">
                    <input type="file" name="filenames[]" class="myfrm form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i>
                            Remove</button>
                    </div>
                </div>
            </div>
            {{-- Input File Baru --}}
            <label class="form-label mt-3 fw-bold" for="form6Example5">Input Foto</label>
            <div class="input-group">
                <input type="file" name="filenames[]" class="myfrm form-control">
                <div class="input-group-btn">
                    <button class="btn btn-utama-inverted" type="button"><i
                            class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                </div>
            </div>
            <p>*Maks 10mb</p>
            {{-- Input File setelah Upload Berhasil --}}
            <div>
                <div class=" input-group mt-3">
                    <input type="file" name="filenames[]" class="myfrm form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i>
                            Remove</button>
                    </div>
                </div>
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Selesaikan Fase saat ini?
                </label>
              </div>

            <div class="d-grid gap-2 mt-4 text-center"><button class="btn btn-utama" type="button">Kirim</button></div>
        </form>
        </form>
    </div>
@endsection
