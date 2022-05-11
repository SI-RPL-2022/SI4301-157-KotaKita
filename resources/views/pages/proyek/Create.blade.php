@extends('Layout.secondary')
@section('title', '- Buat Proyek')
@section('content')
    <div class="container">
        <h1 class="my-5 fw-bold">BUAT PROYEK BARU</h1>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-outline mb-2">
                <input class="form-control form-control-lg" type="text" placeholder="Nama Proyek"
                    aria-label=".form-control-lg example" required autofocus>
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="filenames[]">Tambah foto</label>
                <div class="input-group">
                    <input type="file" name="filenames[]" class="myfrm form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-utama-inverted" type="button">Add</button>
                    </div>
                </div>
                <p>*Maks 10mb</p>
                {{-- Input File setelah Upload Berhasil --}}
                <div>
                    <div class=" input-group mt-3">
                        <input type="file" name="filenames[]" class="myfrm form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-danger" type="button">
                                Remove</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Input File Baru --}}
            <div class="row mb-2">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example1">Tanggal Mulai</label>
                        <input type="date" id="form6Example1" class="form-control" required />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example2">Tanggal Akhir</label>
                        <input type="date" id="form6Example2" class="form-control" required />
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 mt-4 text-center"><button class="btn btn-utama" type="button">Kirim</button></div>
        </form>
    </div>
@endsection
