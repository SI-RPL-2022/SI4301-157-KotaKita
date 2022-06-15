@extends('Layout.secondary')
@section('title', '- Manajemen User')
@section('content')
    <div class="container">
        <h1 class="fw-bold my-5">MANAJEMEN USER</h1>
        {{-- Search --}}
        <form class="d-flex mb-3" method="post" action="{{ route('manajemen-users.search') }}">
            @csrf
            <input class="form-control me-2" type="search" placeholder="Cari Berdasarkan Nama" aria-label="Search" name="q">
            <button class="btn btn-utama-inverted" type="submit">Cari</button>
        </form>
        {{-- End Search --}}
        {{-- tb User --}}
        <table class="table table-hover text-center align-middle">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Domisili</th>
                    <th scope="col">Role</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->kota->nama ?? '-' }}</td>
                        <td>
                            <select class="form-select role" aria-label="Default select example" id="role" name="role"
                                data-userid="{{ $user->id }}">
                                <option selected hidden>User</option>
                                <option @if ($user->roles()->pluck('name')->first() === 'user') selected @endif value="user">User</option>
                                <option @if ($user->roles()->pluck('name')->first() === 'admin') selected @endif value="admin">Admin</option>
                                <option @if ($user->roles()->pluck('name')->first() === 'super admin') selected @endif value="super admin">Superadmin
                                </option>
                            </select>
                        </td>
                        <td>
                            <form action="{{ route('manajemen-users.destroy',$user->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
            $('body').on('change', '.role', function() {
                var userid = $(this).data('userid');
                var role = $(this).val();
                $.ajax({
                    url: '{{ route('manajemen-users.update') }}',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        userid,
                        role
                    },
                    success: function(response) {
                        location.reload();
                    }
                })
            })
        })
    </script>
@endpush
