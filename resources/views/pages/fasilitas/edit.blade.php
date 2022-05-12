@extends('Layout.secondary')
@section('title', '- Edit Fasilitas')
@section('content')
<div class="container">
    <div class="my-5">
        <h3 class="fw-bold">Nama Fasilitas</h3>
    </div>

    <div class="row g-4">
        <div class="col-md-5 p-3">
            <div class="foto-fasilitas">
                <i class="text-white">ini masih div, nanti di ganti img trus pake kelas ini</i>
            </div>
        </div>
        <div class="col-md-7 p-3">
            <h4 class="fw-bold mb-3">Keterangan</h4>
            <textarea class="form-control mb-2" rows="10"></textarea>

            <h4 class="fw-bold mb-3">Foto</h4>

            <div class="row">
                <div class="col">
                    <button class="btn btn-outline-success w-100">Tambah Foto</button>
                </div>
                <div class="col">
                    <button class="btn btn-outline-danger w-100">Edit Foto</button>
                </div>
            </div>
        </div>
        <button class="btn btn-login w-100">Submit</button>
    </div>
@endsection
