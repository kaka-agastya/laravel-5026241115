<!DOCTYPE html>
<html lang="en">

<head>
    <title>5026241115 Kaka Agastya Herlambang Wahyudi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    {{-- SweetAlert2 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Kode Soal mypegawai</h1>
            <p>@yield('judul_halaman')</p>
        </div>

        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('pegawai') ? 'active' : '' }}" href="/pegawai">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('tas') ? 'active' : '' }}" href="/tas">Tas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('siswa') ? 'active' : '' }}" href="/siswa">Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('belanja') ? 'active' : '' }}" href="/belanja">Latihan 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('kuliah') ? 'active' : '' }}" href="/kuliah">Latihan 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('eas') ? 'active' : '' }}" href="/eas">EAS</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            @yield('konten')
        </div>
    </div>

    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            confirmButtonColor: '#0d6efd',
            timer: 3000,
            timerProgressBar: true,
        });
    </script>
    @endif

    @if ($errors->any())
        <script>
            let errorMessages = '<style="text-align: center; margin-bottom: 0;">';
            @foreach ($errors->all() as $error)
                errorMessages += '{{ $error }}';
            @endforeach

            Swal.fire({
                icon: 'error',
                title: 'Terdapat Kesalahan!',
                html: errorMessages,
                confirmButtonColor: '#dc3545',
            });
        </script>
    @endif


</body>

</html>