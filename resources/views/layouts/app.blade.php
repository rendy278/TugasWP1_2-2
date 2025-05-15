<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="container my-5">
    <h2 class="mb-4">@yield('title')</h2>

    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: "{{ session('success') }}",
            timer: 3000,
            timerProgressBar: true,
            showConfirmButton: false
        });
    </script>
    @endif

    @if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: "{{ session('error') }}",
            timer: 3000,
            timerProgressBar: true,
            showConfirmButton: false
        });
    </script>
    @endif

    @yield('content')
    
</div>
</body>
</html>
