@extends('Layout.secondary')
@section('title', '- Pilih Layanan')
@section('content')
    <div class="container">
        <h1 class="fw-bold my-5">PILIH LAYANAN</h1>
        <div class="row text-center mx-auto justify-content-evenly ">
            <div class="col mb-3">
                <div class="card border-0">
                    <img src="https://images.pexels.com/photos/821679/pexels-photo-821679.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        class="card-img-top img-fluid mx-auto" alt="image" style="max-width: 35rem; max-height: 35rem;"/>
                    <div class="card-body text-center d-grid">
                        <a href="#" class="btn btn-utama">Proyek</a>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card border-0">
                    <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/w_360,h_240,c_fill,dpr_2.0,f_auto/v1635908386/hospital_image/b55804b13745_rumah%20sakit%20ukrida.jpg.jpg"
                        class="card-img-top img-fluid mx-auto" alt="image" style="max-width: 35rem; max-height: 35rem;"/>
                    <div class="card-body text-center d-grid">
                        <a href="#" class="btn btn-utama">Fasilitas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
