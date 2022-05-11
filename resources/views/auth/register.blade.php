@extends('Layout.secondary')
@section('title', '- Registrasi')
@section('content')
    <section id="Daftar">
        <div class="container py-5">
            <div class="text-center py-3">
                <h1 class="fw-bold">BUAT AKUN BARU</h1>
            </div>

            <form action="{{ route('register') }}" method="post">
                @csrf
                <!-- Form Regis -->
                <div class="row mb-2">
                    <div class="col">
                        <label for="nama_awal" class="form-label ">Nama awal</label>
                        <input type="text" name="nama_awal" id="nama_awal"
                            class="form-control @error('nama_awal') is-invalid @enderror" value="{{ old('nama_awal') }}">
                        @error('nama_awal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="nama_akhir" class="form-label ">Nama akhir</label>
                        <input type="text" name="nama_akhir" id="nama_akhir"
                            class="form-control @error('nama_akhir') is-invalid @enderror"
                            value="{{ old('nama_akhir') }}">
                        @error('nama_akhir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="domisili" class="form-label">Domisili</label>
                        <select name="domisili" id="domisili" class="form-select @error('domisili') is-invalid @enderror">
                            <option value="" selected disabled>-- Pilih Domisili --</option>
                            @foreach ($data_kota as $kota)
                                <option @if ($kota->id == old('domisili')) selected @endif value="{{ $kota->id }}">
                                    {{ $kota->nama }}</option>
                            @endforeach
                        </select>
                        @error('domisili')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="email" class="form-label ">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="password" class="form-label ">Kata sandi</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mx-0 mb-4">
                    <button type="submit" class="btn btn-utama">Daftar</button>
                </div>
            </form>
            <div class="text-center">
                <p class="">Sudah Punya Akun? <a href="/login" class="utama">Masuk</a></p>
            </div>
        </div>
    </section>
@endsection
