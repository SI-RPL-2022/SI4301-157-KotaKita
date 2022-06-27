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
                        <p>Total Aduan Anda</p>
                        <p style="font-size:30px">{{ $data['total_aduan'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="background: #273793;color:white">
                    <div class="card-body">
                        <p>Progress Keseluruhan Domisili Anda Tahun Ini</p>
                        <p style="font-size:30px">{{ $data['total_progress'] }}%</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card" style="background: rgba(39, 55, 147, 0.5);">
                    <div class="card-body">
                        <h6 class="text-white">Aduan Terbaru</h6>
                        <table class="table table-bordered">
                            <tr class="table-primary text-center">
                                <th>Nama User</th>
                                <th>Domisili</th>
                                <th>Status</th>
                            </tr>
                            @foreach ($aduans as $aduan)
                                <tr class="table-light">
                                    <td>{{ $aduan->user->name }}</td>
                                    <td>{{ $aduan->user->kota->nama ?? '-' }}</td>
                                    <td>Status</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="background: rgba(39, 55, 147, 0.5);">
                    <div class="card-body">
                        <h6 class="text-white">Proyek Saat Ini</h6>
                        <table class="table table-bordered">
                            <tr class="table-primary text-center">
                                <th>Nama Proyek</th>
                                <th>Fase</th>
                            </tr>
                            @foreach ($proyeks as $proyek)
                            <tr class="table-light">
                                <td>{{ $proyek->nama_proyek }}</td>
                                <td>
                                    <ul>
                                        @foreach ($proyek->fases as $fase)
                                            <li>{{ $fase->nama_fase }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
