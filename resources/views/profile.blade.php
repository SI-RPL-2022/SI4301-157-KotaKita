@extends('Layout.secondary')
@section('title', '- Profile')
@section('content')
    <section id="Profile" class="bg-light">
        <div class="container py-5">
            <h3 class="fw-bold">Profil</h3>
            <div class="bg-white rounded p-4">
                <div class="row">
                    <div class="col text-center">
                        <div class="foto">
                            <img src="user.png" alt="">
                        </div>
                        <a href="#" class="btn btn-utama">Edit Profile</a>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <h4 class="fw-bold">Nama</h4>
                            <h4 class="fw-lighter">Naura Imanda Syaffa</h4>
                        </div>
                        <div class="mb-3">
                            <h4 class="fw-bold">Email</h4>
                            <h4 class="fw-lighter">nauraimanda09@gmail.com</h4>
                        </div>
                        <div class="mb-3">
                            <h4 class="fw-bold">Domisili</h4>
                            <h4 class="fw-lighter">Makassar</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
