@extends('Layout.secondary')
@section('title', '- Dokumen Proyek')
@section('content')
    <div class="container">
        <form action="{{ route('feedback.store') }}" method="post">
            @csrf
            <h1 class="fw-bold my-5">FEEDBACK</h1>
            {{-- Dropdown Pilih Kota, bisa get dari halaman Proyek --}}
            <label for="kota_id" class="form-label fw-bold mb-3">Pilih Kota</label>
            <select class="form-select mb-3" id="kota_id" aria-label="Default select example" required autofocus name="kota_id">
                <option selected disabled>Open this select menu</option>
                @foreach ($data_kota as $kota)
                   @if ($fasilitas)
                   <option @if($kota->id == $fasilitas->kota_id ?? 0) selected @endif value="{{ $kota->id }}">{{ $kota->nama }}</option>
                   @else
                   <option value="{{ $kota->id }}">{{ $kota->nama }}</option>
                   @endif
                @endforeach
            </select>
            {{-- Dropdown Pilih Proyek, bisa get dari halaman proyek --}}
            <label for="proyek_id" class="form-label fw-bold mb-3">Pilih Fasilitas</label>
            <select class="form-select mb-3" id="proyek_id" name="proyek_id" aria-label="Default select example" required>
                <option value="" selected disabled>-- Pilih Fasilitas</option>
                @foreach ($data_fasilitas as $fasilitas2)
                    @if ($fasilitas)
                    <option @if($fasilitas->id == $fasilitas->id) selected @endif value="{{ $fasilitas->id }}">{{ $fasilitas->nama_proyek }}</option>
                    @else
                    <option value="{{ $fasilitas->id }}">{{ $fasilitas->nama_proyek }}</option>
                    @endif
                @endforeach
            </select>
            <label class="fw-bold fs-4" for="rating">Berikan Penilaianmu</label>
            <div class="rating">
                <input type="radio" name="rating" value="5" id="5"><label class="rating5" name="rating"
                    value="5" for="5">☆</label>
                <input type="radio" name="rating" value="4" id="4"><label class="rating4" name="rating"
                    value="4" for="4">☆</label>
                <input type="radio" name="rating" value="3" id="3"><label class="rating3" name="rating"
                    value="3" for="3">☆</label>
                <input type="radio" name="rating" value="2" id="2"><label class="rating2" name="rating"
                    value="2" for="2">☆</label>
                <input type="radio" name="rating" value="1" id="1"><label class="rating1" name="rating"
                    value="1" for="1">☆</label>
            </div>
            <div class="mb-3">
                <label for="feedback" class="form-label fw-bold mb-3">Ceritakan Pengalamanmu</label>
                <textarea class="form-control mb-3" id="feedback" name="feedback" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary w-100">Submit</button>
            </div>
        </form>
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
            $('#kota_id').on('change', function() {
                var kota_id = $(this).val();
                $.ajax({
                    url: '{{ route('fasilitas.getByKota') }}',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        kota_id
                    },
                    success: function(response) {
                        $('#proyek_id').empty();
                        response.forEach(el => {
                            $('#proyek_id').append('<option selected value="' + el.id +
                                '">' + el.nama_proyek + '</option>')
                        });
                    }
                })
            })
        })
    </script>
@endpush
