@extends('Layout.secondary')
@section('title', '- FAQ')
@section('content')
    <div class="container">
        <h1 class="fw-bold my-5">PROFIL</h1>
        <div class="row">
            <div class="col-4">
                <img class="img-account-profile rounded-circle mb-2" src="{{ auth()->user()->foto() }}" alt="Foto Profil">
                <div class="row" style="margin-left: 100px; margin-top: 40px;">
                    <div class="col-2">
                        <a href="" class="bi bi-pencil-fill"></a>
                    </div>
                    <div class="col">
                        <a href="" class="bi bi-trash-fill"></a>
                    </div>
                </div>
            </div>


            <div class="col-8">
                <div class="row gx-3 mb-3">
                    <!-- Form Group (first name)-->
                    <div class="col-md-6">
                        <label class="small mb-1" for="inputFirstName"><b>First name</b></label>
                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
                    </div>
                    <!-- Form Group (last name)-->
                    <div class="col-md-6">
                        <label class="small mb-1" for="inputLastName"><b>Last name</b></label>
                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                    </div>
                    <!-- Form (email)-->
                    <div class="mb-3">
                        <label class="small mb-1" for="inputEmailAddress"><b>Email address</b></label>
                        <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                    </div>
                    <!-- Form (password)-->
                    <div class="mb-3">
						<label for="password" class="form-label"><b>Password</b></label>
						<input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" >
					</div>
                    <!-- Form (konfrm password)-->
					<div class="mb-3">
						<label for="konfirmasi_password" class="form-label "><b>Konfirmasi Password</b></label>
						<input type="password" class="form-control " id="konfirmasi_password" placeholder="Konfirmasi Password" name="konfirmasi_password" >
					</div>
                    <div class="row mx-auto">
                        <div class="col">
                            <div class="d-grid">
                                <a href="" class="btn btn-utama">Simpan Perubahan</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-grid">
                                <a href="" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
