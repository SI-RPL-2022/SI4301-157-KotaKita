@extends('Layout.secondary')
@section('title', '- Edit Kota')
@section('content')
<div class="container">
    <h2 class="my-5">EDIT KOTA BARU</h2>
    <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" name="namakota" class="form-control" />
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Foto Cover</label>
        <input type="file" class="form-control" />
      </div>
      <div class="row">
        <button type="submit" class="col ms-2 button">Simpan Perubahan</button>
        <button type="submit" class="col outline-button" width="90%">Cancel</button>
      </div>
    </form>
  </div>
@endsection
