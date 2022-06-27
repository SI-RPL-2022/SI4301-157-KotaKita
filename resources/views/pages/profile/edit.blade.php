@extends('Layout.secondary')
@section('title', '- FAQ')
@section('content')
    <div class="container">
        <h1 class="fw-bold my-5">PROFIL</h1>
        <div class="row">
            <div class="col-4">
                <img class="img-account-profile rounded-circle mb-2 img-fluid" src="{{ auth()->user()->foto() }}" alt="Foto Profil">
                <div class="row" style="margin-left: 100px; margin-top: 40px;">
                    <div class="col-2">
                        <a href="javascript:void(0)" class="bi bi-pencil-fill btnEditFoto"></a>
                    </div>
                    <div class="col">
                        <a href="javascript:void(0)" class="bi bi-trash-fill btnRemoveFoto"></a>
                        <form action="{{ route('profile.foto-remove') }}" method="post" id="formRemove">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-8">
                <form action="" method="post">
                    @csrf
                    <div class="row gx-3 mb-3">
                    <!-- Form Group (first name)-->
                    <div class="col-md-12">
                        <label class="small mb-1" for="name"><b>Full Name</b></label>
                        <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" placeholder="Enter your first name" value="{{ auth()->user()->name }}" name="name">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- Form (email)-->
                    <div class="mb-3">
                        <label class="small mb-1" for="email"><b>Email address</b></label>
                        <input class="form-control  @error('email') is-invalid @enderror" id="email" name="email" type="email" placeholder="Enter your email address" value="{{ auth()->user()->email }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="kota_id"><b>Domisili</b></label>
                       <select name="kota_id" id="kota_id" class="form-control  @error('kota_id') is-invalid @enderror">
                           @foreach ($data_kota as $kota)
                               <option value="{{ $kota->id }}">{{ $kota->nama }}</option>
                           @endforeach
                       </select>
                       @error('koda_id')
                       <div class="invalid-feedback">
                           {{ $message }}
                       </div>
                   @enderror
                    </div>
                    <!-- Form (password)-->
                    <div class="mb-3">
						<label for="password" class="form-label"><b>Password</b></label>
						<input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Password" name="password" >
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
					</div>
                    <!-- Form (konfrm password)-->
					<div class="mb-3">
						<label for="password_confirmation" class="form-label "><b>Konfirmasi Password</b></label>
						<input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Konfirmasi Password" name="password_confirmation" >
                        @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
					</div>
                    <div class="row mx-auto">
                        <div class="col">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-utama">Simpan Perubahan</button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-grid">
                                <a href="" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalEditFoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Upload Foto</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('profile.foto-update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
          </div>
        </div>
      </div>
@endsection
@push('scripts')
<script>
    $(function(){
        $('.btnEditFoto').on('click', function(){
            $('#modalEditFoto').modal('show');
        })
        $('.btnRemoveFoto').on('click', function(){
            var formRemove = $('#formRemove');
            formRemove.submit();
        })
    })
</script>
@endpush
