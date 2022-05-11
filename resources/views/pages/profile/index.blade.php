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
                            <img src="{{ auth()->user()->foto() }}" alt="Foto Profil">
                        </div>
                        <a href="{{ route('profile.edit') }}" class="btn btn-utama">Edit Profile</a>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <h4 class="fw-bold">Nama</h4>
                            <h4>{{ auth()->user()->name }}</h4>
                        </div>
                        <div class="mb-3">
                            <h4 class="fw-bold">Email</h4>
                            <h4>{{ auth()->user()->email }}</h4>
                        </div>
                        <div class="mb-3">
                            <h4 class="fw-bold">Domisili</h4>
                            <h4>{{ auth()->user()->kota->nama ?? '-' }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
