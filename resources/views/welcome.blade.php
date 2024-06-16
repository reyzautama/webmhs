<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Web Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- Font Awesome -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            color: #444;
        }
        .container {
            max-width: 1500px;
            margin: 100px auto;
            text-align: center;
        }
        h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-weight: bold;
            color: #007bff; /* Blue color for header */
        }
        p {
            font-size: 1.2rem;
            line-height: 1.8;
        }
        .btn {
            margin-top: 30px;
            padding: 12px 24px;
            font-size: 1.1rem;
            border-radius: 25px;
            background-color: #007bff;
            border: none;
            color: #fff;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
        .feature {
            margin-top: 50px;
            text-align: left;
        }
        .feature h3 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #007bff; /* Blue color for headings */
        }
        .feature p {
            font-size: 1.2rem;
            line-height: 1.6;
        }
        .quote {
            margin-top: 50px;
            padding: 20px;
            background-color: #e9ecef;
            border-left: 5px solid #007bff;
            text-align: left;
            font-style: italic;
        }
        .card {
            margin-top: 50px;
            border: none;
            background: none;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card-title {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: #007bff; /* Blue color for card titles */
        }
        .card-text {
            font-size: 1.1rem;
            line-height: 1.6;
        }
        .footer {
            margin-top: 100px;
            background-color: #343a40; /* Dark background for footer */
            color: #fff;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Web Mahasiswa</h1>
        <p>Platform ini memudahkan Anda mengelola data mahasiswa, kelas, dosen, mata kuliah, dan jadwal akademik.</p>
        <a href="{{ route('dashboard.index') }}" class="btn btn-primary">
            <i class="fas fa-tachometer-alt"></i> Masuk ke Dashboard
        </a>
    </div>

    <div class="container feature">
        <div class="row">
            <div class="col-lg-6">
                <h3>Fitur Utama:</h3>
                <p>
                    - Pengelolaan data mahasiswa, kelas, dosen, mata kuliah.<br>
                    - Penjadwalan kuliah dan ujian.<br>
                    - Laporan dan analisis data.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="https://via.placeholder.com/400" class="img-fluid" alt="Ilustrasi Fitur Aplikasi">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-user-graduate fa-3x mb-3"></i>
                        <h5 class="card-title">Data Mahasiswa</h5>
                        <p class="card-text">Kelola informasi lengkap mengenai mahasiswa termasuk data pribadi, akademik, dan histori.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-chalkboard-teacher fa-3x mb-3"></i>
                        <h5 class="card-title">Data Dosen</h5>
                        <p class="card-text">Catat informasi dosen pengajar beserta spesialisasi, jadwal mengajar, dan histori akademik.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-book fa-3x mb-3"></i>
                        <h5 class="card-title">Mata Kuliah</h5>
                        <p class="card-text">Lihat daftar lengkap mata kuliah yang tersedia dan informasi terkait kurikulum serta prasyaratnya.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container quote">
        <p>"Aplikasi ini sangat membantu kami dalam mengatur administrasi akademik dengan lebih efisien." - Prof. John Doe</p>
    </div>

    <footer class="footer mt-5 py-4 text-center">
        <div class="container">
            <span class="text-muted">&copy; {{ date('Y') }} Web Mahasiswa</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
