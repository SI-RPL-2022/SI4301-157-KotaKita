@extends('Layout.main')
@section('title', '- Login')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form mt-4 p-4">
                    <form action="{{ route('login') }}" method="POST" class="row g-3">
                        @csrf
                        <h1><center><b>LOGIN</b></center></h1>
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password" name="password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-utama">Masuk</button>
                        <div class="text-center">
                            <p>Belum punya akun? <a href="{{ route('register') }}">Buat Akun</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
