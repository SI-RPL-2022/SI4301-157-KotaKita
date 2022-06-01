<script src="{{ asset('assets/sweetalert2/sweetalert2.all.min.js') }}"></script>
@if (session('success'))
<script>
    Swal.fire({
        icon: 'success',
        text: '{{ session('success') }}',
        showConfirmButton: true,
        timer: 1500
    })
</script>
@endif
@if (session('error'))
<script>
    Swal.fire({
        icon: 'error',
        text: '{{ session('error') }}',
        showConfirmButton: true,
        timer: 1500
    })
</script>
@endif
