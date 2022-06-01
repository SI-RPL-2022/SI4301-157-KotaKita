@extends('Layout.secondary')
@section('title', '- Edit Fasilitas')
@section('content')
    <div class="container">
        <div class="my-5">
            <h3 class="fw-bold">{{ $item->nama_proyek }}</h3>
        </div>
        <div class="row g-4">
            <div class="col-md-5 p-3">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ $item->gambar() }}" class="d-block w-100" alt="foto fasilitas">
                        </div>
                        @foreach ($item->galleries as $gallery)
                            <div class="carousel-item">
                                <img src="{{ $gallery->foto() }}" class="d-block w-100" alt="foto fasilitas">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-7 p-3">
                <form action="{{ route('fasilitas.update',$item->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <label for="">Keterangan</label>
                    <textarea class="form-control mb-2" rows="10" name="keterangan">{{ $item->keterangan }}</textarea>
                    <input type="file" name="foto[]" id="imgUpload" class="d-none" multiple>
                    <button class="btn btn-outline-success w-100 btnUpload" type="button">Tambah Foto</button>
            </div>
            <button class="btn btn-utama w-100" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(function() {
            $('.btnUpload').on('click', function() {
                $('#imgUpload').trigger('click');
            })
        })
    </script>
@endpush
