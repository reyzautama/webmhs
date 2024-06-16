<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Web Mahasiswa')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- Font Awesome -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="fas fa-graduation-cap"></i> Web Mahasiswa
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.index') }}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mahasiswa.index') }}">
                        <i class="fas fa-user-graduate"></i> Mahasiswa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kelas.index') }}">
                        <i class="fas fa-chalkboard"></i> Kelas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dosen.index') }}">
                        <i class="fas fa-chalkboard-teacher"></i> Dosen
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('matakuliah.index') }}">
                        <i class="fas fa-book"></i> Mata Kuliah
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jadwal.index') }}">
                        <i class="fas fa-calendar-alt"></i> Jadwal
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">
                        <i class="fas fa-user"></i> Profil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">© 2024 Web Mahasiswa</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
