@extends('Layout.secondary')
@section('title', '- Buat Fase Baru')
@section('content')

<div class="container">
    <h1 class="fw-bold my-5">BUAT FASE BARU</h1>
    {{-- form buat fase --}}
    <form action="" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-outline mb-2">
            <label class="form-label" for="form6Example2">Pilih Fase</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
        </div>
        <div class="row mb-2">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Nama Awal</label>
                    <input type="text" id="form6Example1" class="form-control" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example2">Nama Akhir</label>
                    <input type="text" id="form6Example2" class="form-control" />
                </div>
            </div>
        </div>
        <div class="form-outline mb-2">
            <label class="form-label" for="form6Example5">Email</label>
            <input type="email" id="form6Example5" class="form-control" />
        </div>
        <div class="form-outline mb-2">
            <label class="form-label" for="form6Example4">Domisili</label>
            <input type="text" id="form6Example4" class="form-control" />
        </div>

        <div class="form-outline mb-2">
            <label class="form-label" for="form6Example6">Telepon</label>
            <input type="number" id="form6Example6" class="form-control" />
        </div>

        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
          </div>

          <div class="input-group hdtuto control-group lst increment" >
            <input type="file" name="filenames[]" class="myfrm form-control">
            <div class="input-group-btn">
              <button class="btn btn-utama-inverted" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
            </div>
          </div>
          <div class="clone hide">
            <div class="hdtuto control-group lst input-group" style="margin-top:10px">
              <input type="file" name="filenames[]" class="myfrm form-control">
              <div class="input-group-btn">
                <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
              </div>
            </div>
          </div>
        <div class="d-grid gap-2 mt-4 text-center"><button class="btn btn-utama" type="button">Kirim</button></div>
    </form>
    {{-- end form --}}
</div>
@endsection
