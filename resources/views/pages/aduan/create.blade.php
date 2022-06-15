@extends('Layout.secondary')
@section('title', '- Dokumen Proyek')
@section('content')
    <div class="container">
        <h1 class="fw-bold my-5">ADUAN MASYARAKAT</h1>
        <form action="{{ route('aduan.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- Dropdown Pilih Kota, bisa get dari halaman Proyek --}}
            <label for="kota_id" class="form-label fw-bold mb-3">Pilih Kota</label>
            <select class="form-select mb-3" id="kota_id" aria-label="Default select example" required autofocus name="kota_id">
                <option selected disabled>Open this select menu</option>
                @foreach ($data_kota as $kota)
                   @if ($proyek)
                   <option @if($kota->id == $proyek->kota_id ?? 0) selected @endif value="{{ $kota->id }}">{{ $kota->nama }}</option>
                   @else
                   <option value="{{ $kota->id }}">{{ $kota->nama }}</option>
                   @endif
                @endforeach
            </select>
            {{-- Dropdown Pilih Proyek, bisa get dari halaman proyek --}}
            <label for="proyek_id" class="form-label fw-bold mb-3">Pilih Proyek</label>
            <select class="form-select mb-3" id="proyek_id" name="proyek_id" aria-label="Default select example" required>
                <option value="" selected disabled>-- Pilih Proyek</option>
                @foreach ($data_proyek as $proyek2)
                    @if ($proyek)
                    <option @if($proyek2->id == $proyek->id) selected @endif value="{{ $proyek2->id }}">{{ $proyek2->nama_proyek }}</option>
                    @else
                    <option value="{{ $proyek2->id }}">{{ $proyek2->nama_proyek }}</option>
                    @endif
                @endforeach
            </select>
            {{-- Textarea review --}}
            <div class="mb-3">
                <label for="aduan" class="form-label fw-bold mb-3">Ceritakan aduanmu</label>
                <textarea class="form-control mb-3" id="aduan" name="aduan" rows="3" required></textarea>
            </div>
            {{-- Input Foto --}}
            <div class="form-outline mb-3">
                <label class="form-label fw-bold mb-3" for="foto">Tambah foto</label>
                <div class="input-group">
                    <input type="file" name="foto[]" class="myfrm form-control" id="foto" multiple>
                    <div class="input-group-btn">
                        <button class="btn btn-utama-inverted" type="button">Add</button>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 mt-4 text-center"><button class="btn btn-utama" type="submit" value="submit">Kirim</button></div>
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
    $(function(){
        $('#kota_id').on('change', function(){
            var kota_id = $(this).val();
            $.ajax({
                url: '{{ route('proyek.getByKota') }}',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    kota_id
                },
                success: function(response){
                    $('#proyek_id').empty();
                    response.forEach(el => {
                        $('#proyek_id').append('<option selected value="'+el.id+'">'+el.nama_proyek+'</option>')
                    });
                }
            })
        })
    })
</script>
@endpush
