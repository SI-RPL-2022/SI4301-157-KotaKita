@extends('Layout.secondary')
@section('title', '- Dokumen Proyek')
@section('content')
{{-- show dokumen ini dari page proyek, bukan dari navbar kalo yg dari navbar itu pake yg index--}}
    <div class="container">
        <h1 class="fw-bold my-5">DOKUMEN PROYEK (Nama Proyek)</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" style="width: 50%">Nama</th>
                    <th scope="col">Domisili</th>
                    <th scope="col" class="text-end" style="max-width: 25%"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Bambang Bambang</td>
                    <td>Jakarta </td>
                    <td class="text-end">
                        <a href="" class="btn btn-utama">Download</a>
                        <a href="" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>Bambang Bambang</td>
                    <td>surabaya </td>
                    <td class="text-end">
                        <a href="" class="btn btn-utama">Download</a>
                        <a href="" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
