@extends('Layout.main')
@section('title', '- Contact Us')
@section('content')
    <div class="container my-3">
        <h1><b>
                <center class="my-3">Kontak Kami</center>
            </b></h1>
        <div class="shadow p-3 mb-5 bg-body rounded">
            <form>
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

                <div class="form-outline mb-2">
                    <label class="form-label" for="form6Example7">Pesan</label>
                    <textarea class="form-control" id="form6Example7" rows="4" placeholder="Pesan yang ingin disampaikan"></textarea>
                </div>
                <div class="d-grid gap-2 mt-4 text-center"><button class="btn btn-utama" type="button">Kirim</button></div>
            </form>
        </div>
    </div>
    <h2><b>
            <center>Kontak Terkait</center>
        </b></h2>
    <br></br>
    <div class="container">
        <div class="row row-cols-2">
            <div class="col mb-3">
                <p><b class="fs-5 text-capitalize">Dinas Tata Kota Jakarta</b> <br>
                    Jl. Telekomunikasi No 1, Bandung, Jawa Barat Indonesia <br>
                    Contact center: 021-98761234 <br>
                    Office: (6221) 12345678 <br>
                    Fax: (6221)231 456 <br>
                    Email: kotakita@gmail.com <br>
                </p>
            </div>
            <div class="col mb-3">
                <p><b class="fs-5 text-capitalize">Dinas Tata Kota Bandung</b> <br>
                    Jl. Telekomunikasi No 1, Bandung, Jawa Barat Indonesia <br>
                    Contact center: 021-98761234 <br>
                    Office: (6221) 12345678 <br>
                    Fax: (6221)231 456 <br>
                    Email: kotakita@gmail.com <br>
                </p>
            </div>
        </div>
    </div>
@endsection
