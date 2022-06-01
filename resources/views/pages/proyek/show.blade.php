@extends('Layout.secondary')
@section('title', '- Proyek')
@section('content')
    <div class="container">
        <div class="row justify-content-between my-5">
            <div class="col-4">
                <h1><b>{{ $item->nama_proyek }}</b></h1>
            </div>
            {{-- Rating --}}
            {{-- <div class="col-4 d-grid gap-2 d-md-flex justify-content-md-end align-items-center">
                <p class="align-items-center text-center align-middle my-auto fs-5"><b>5.0</b></p>
                <div>
                    <span class="material-icons md-36">
                        star_rate
                    </span>
                    <span class="material-icons md-36">
                        star_rate
                    </span>
                    <span class="material-icons md-36">
                        star_rate
                    </span>
                    <span class="material-icons md-36">
                        star_rate
                    </span>
                    <span class="material-icons md-36">
                        star_rate
                    </span>
                </div>
            </div> --}}
            {{-- End Rating --}}
        </div>
        <div id="carouselExampleControls" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ $item->gambar() }}" class="d-block w-100" alt="Foto Proyek">
                </div>
                @foreach ($galleries as $gallery)
                <div class="carousel-item">
                    <img src="{{ $gallery->foto() }}" class="d-block w-100" alt="Foto Proyek">
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

        {{-- Waktu --}}
        <div class="row mb-5">
            <div class="col">
                <p class="text-center fs-4 fw-bold">
                    Tanggal Mulai Proyek
                </p>
                <p class="text-center fs-5">
                    {{ $item->tanggal_mulai->translatedFormat('d/m/Y') }}
                </p>
            </div>
            <div class="col">
                <p class="text-center fs-4 fw-bold">
                    Update Terakhir Proyek
                </p>
                <p class="text-center fs-5">
                    @if ($item->fases->count() > 0)
                    {{ $item->firstFase()->tanggal_mulai->translatedFormat('d/m/Y') }}
                    @else
                    -
                    @endif
                </p>
            </div>
            <div class="col">
                <p class="text-center fs-4 fw-bold">
                    Estimasi Selesai Tahap saat ini
                </p>
                <p class="text-center fs-5">
                    @if ($item->fases->count() > 0)
                    {{ $item->firstFase()->tanggal_akhir->translatedFormat('d/m/Y') }}
                    @else
                    -
                    @endif
                </p>
            </div>
            <div class="col">
                <p class="text-center fs-4 fw-bold">
                    Estimasi Selesai Proyek
                </p>
                <p class="text-center fs-5">
                    {{ $item->tanggal_akhir->translatedFormat('d/m/Y') }}
                </p>
            </div>

        </div>
        {{-- End Waktu --}}
        {{-- Button Input --}}
        {{-- Btn Admin --}}
        @role('admin|super admin')
            <div class="row mb-5">
                <div class="col">
                    <div class="d-grid">
                        <a href="{{ route('fase.create', $item->id) }}" class="btn btn-utama">Input Fase Baru</a>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid">
                        <a href="{{ route('fase-progress.create', $item->id) }}" class="btn btn-utama">Input Progress
                            Baru</a>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid">
                        <a href="{{ route('laporan.search') }}?q={{ $item->nama_proyek }}" class="btn btn-utama">Lihat Dokumen Laporan</a>
                    </div>
                </div>
            </div>
        @endrole
        {{-- End Btn Admin --}}
        {{-- Btn User --}}
        @role('user')
            <div class="row mb-5">
                @can('aduan-create')
                <div class="col">
                    <div class="d-grid">
                        <a href="{{ route('aduan.create') }}?proyek_id={{ $item->id }}" class="btn btn-utama">Input Aduan</a>
                    </div>
                </div>
                @endcan
                @can('document-view')
                <div class="col">
                    <div class="d-grid">
                        <a href="{{ route('laporan.search') }}?q={{ $item->nama_proyek }}" class="btn btn-utama">Lihat Dokumen Laporan</a>
                    </div>
                </div>
                @endcan
            </div>
        @endrole
        {{-- End Button Input --}}
        {{-- tb Fase --}}
        <div class="mb-5">
            <h3 class="fw-bold mb-3">Fase</h3>
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">Nama Fase</th>
                        <th scope="col">Status</th>
                        <th scope="col-2">Tanggal Mulai</th>
                        <th scope="col-2">Tanggal Selesai</th>
                        <th scope="col-2">Update Terakhir</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($item->fases as $fase)
                        <tr>
                            <td>{{ $fase->nama_fase }}</td>
                            <td>{!! $fase->status() !!}</td>
                            <td>{{ $fase->tanggal_mulai->translatedFormat('d/m/Y') }}</td>
                            <td>{{ $fase->tanggal_akhir->translatedFormat('d/m/Y') }}</td>
                            <td>{{ $fase->updated_at->translatedFormat('d/m/Y') }}</td>
                            <td>
                                <button class="btn btn-sm btn-primary" data-fase="{{ $fase->id }}"
                                    id="lihatProgress">Lihat Progress</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Fase Tidak Ada</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{-- End tb Fase --}}
        {{-- progress --}}
        <div class="mb-5">
            {{-- Progress Bar --}}
            <h3 class="fw-bold mb-3">Progress</h3>
            <div class="progress mb-3">
                <div class="progress-bar bg-utama" style="width: 25%" role="progressbar" aria-valuemin="0"
                    aria-valuemax="100">
                </div>
            </div>
            <p class="fw-bold text-center">75%</p>
            {{-- End Progress Bar --}}
            {{-- Tb Progress --}}
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">Judul Progress</th>
                        <th scope="col">Deskripsi Singkat</th>
                        <th scope="col-2">Update Terakhir</th>
                    </tr>
                </thead>
                <tbody class="progressTable">

                </tbody>
            </table>
            {{-- End tb Progress --}}
        </div>
        {{-- End Progress --}}
        {{-- Feedback --}}
        <div class="mb-5">
            <h3 class="fw-bold mb-3">Aduan</h3>
            {{-- Isi Feedback --}}
            <div class="border border-3 rounded">
                @foreach ($item->aduans as $aduan)
                    <div class=" m-3">
                        {{-- Rating --}}
                        <h5 class="fw-bold">{{ $aduan->user->name }}</h5>
                        <p>{{ $aduan->aduan }}</p>
                        <div class="row">
                            @foreach ($aduan->foto as $foto)
                                <div class="col-md-2">
                                    <img src="{{ $foto->foto() }}" alt="" class="img-fluid imgAduan img-thumbnail"
                                        data-img="{{ $foto->foto() }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <hr style="width:80%;text-align:center">
                @endforeach
                {{-- End Rating --}}
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="modalShowImage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Foto</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="" alt="" class="img-fluid modalImage">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        $(function() {
            var fase_id = '{{ $fase_id }}';
            console.log(fase_id);
            $.ajax({
                url: '{{ route('fase-progress.getByFaseId') }}',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    fase_id
                },
                success: function(response) {
                    var xhtml = "";
                    if (response.length > 0) {
                        // $('.progressTable').html('');
                        response.forEach(el => {
                            xhtml += '<tr>';
                            xhtml += '<td>' + el.judul_progress + '</td>';
                            xhtml += '<td>' + el.deskripsi_singkat + '</td>';
                            xhtml += '<td>' + el.updated_at + '</td>';
                            xhtml += '</tr>';
                        });
                    } else {
                        // $('.progressTable').html('');
                        xhtml += '<tr>';
                        xhtml +=
                            '<td colspan="3" class="text-center">Tidak Ada Progress</td>';
                        xhtml += '</tr>';
                    }
                    $('.progressTable').html(xhtml);
                }
            })

            $('body').on('click', '#lihatProgress', function() {
                var fase_id = $(this).data('fase');

                $.ajax({
                    url: '{{ route('fase-progress.getByFaseId') }}',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        fase_id
                    },
                    success: function(response) {
                        var xhtml = "";
                        if (response.length > 0) {
                            // $('.progressTable').html('');
                            response.forEach(el => {
                                xhtml += '<tr>';
                                xhtml += '<td>' + el.judul_progress + '</td>';
                                xhtml += '<td>' + el.deskripsi_singkat + '</td>';
                                xhtml += '<td>' + el.updated_at + '</td>';
                                xhtml += '</tr>';
                            });
                        } else {
                            // $('.progressTable').html('');
                            xhtml += '<tr>';
                            xhtml +=
                                '<td colspan="3" class="text-center">Tidak Ada Progress</td>';
                            xhtml += '</tr>';
                        }
                        $('.progressTable').html(xhtml);
                    }
                })
            })
            $('body').on('click', '.imgAduan', function(){
                var url = $(this).data('img');
                $('.modalImage').attr('src',url);
                $('#modalShowImage').modal('show');
            })

        })
    </script>
@endpush
