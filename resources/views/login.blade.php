@extends('Layout.secondary')
@section('title', '- Login')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form mt-4 p-4">
                    <form action="" method="" class="row g-3">
                        <h1><center><b>LOGIN</b></center></h1>
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-utama">Masuk</button>
                        <div class="text-center">
                            <p>Belum punya akun? <a href="/registrasi">Buat Akun</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
