@extends('Layout.main')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <h4>Dashboard</h4>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card" style="background: #273793;color:white">
                    <div class="card-body">
                        <p>Total Admin</p>
                        <p style="font-size:30px">{{ $data['total_user'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="background: #273793;color:white">
                    <div class="card-body">
                        <p>Total Aduan</p>
                        <p style="font-size:30px">{{ $data['total_aduan'] }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body ">
                        <h6 class="text-dark">Admin</h6>
                        <table class="table table-bordered">
                            <tr class="table-primary text-center">
                                <th>Nama User</th>
                                <th>Domisili</th>
                            </tr>
                            @foreach ($data['users'] as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->kota->nama ?? '-' }}</td>
                            </tr>
                            @endforeach
                        </table>
                        <a href="{{ route('manajemen-users.index') }}" class="w-100 btn btn-utama">Manajemen User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
