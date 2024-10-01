<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMPULS</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    
    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body>
<header id="header" class="header fixed-top">
    <div class="branding d-flex align-items-center">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/Logo_Unib.png') }}" alt="">
                <h1 class="sitename">SIMPULS</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#sizin">Surat Izin</a></li>
                    <li><a href="#pdana">Proposal Dana</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </div>
</header>

<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="mb-4">Masukkan Data Surat Izin Kegiatan ORMAWA Fakultas Teknik</h1>

                    <form action="{{ route('store') }}" method="post" class="form-group">
                        @csrf 
                        <div class="mb-3">
                            <label for="NomorSurat" class="form-label">NomorSurat</label>
                            <input type="text" name="NomorSurat" id="NomorSurat" class="form-control" placeholder="Masukkan nomor surat" required>
                        </div>

                        <div class="mb-3">
                            <label for="NamaKegiatan" class="form-label">NamaKegiatan</label>
                            <input type="text" name="NamaKegiatan" id="NamaKegiatan" class="form-control" placeholder="Masukkan nama kegiatan" required>
                        </div>

                        <div class="mb-3">
                            <label for="HariKegiatan" class="form-label">HariKegiatan</label>
                            <select name="HariKegiatan" id="HariKegiatan" class="form-select" required>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="TanggalKegiatan" class="form-label">TanggalKegiatan</label>
                            <input type="date" name="TanggalKegiatan" id="TanggalKegiatan" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="TempatKegiatan" class="form-label">TempatKegiatan</label>
                            <input type="text" name="TempatKegiatan" id="TempatKegiatan" class="form-control" placeholder="Masukkan tempat kegiatan" required>
                        </div>

                        <div class="mb-3">
                            <label for="PJKegiatan" class="form-label">PJKegiatan</label>
                            <input type="text" name="PJKegiatan" id="PJKegiatan" class="form-control" placeholder="Masukkan nama PJ" required>
                        </div>

                        <div class="mb-3">
                            <label for="Semester" class="form-label">Semester</label>
                            <input type="text" name="Semester" id="Semester" class="form-control" placeholder="Masukkan semester anda" required>
                        </div>

                        <div class="mb-3">
                            <label for="NomorHPPJ" class="form-label">NomorHPPJ</label>
                            <input type="text" name="NomorHPPJ" id="NomorHPPJ" class="form-control" placeholder="Masukkan nomor HP PJ" required>
                        </div>

                        <div class="mb-3">
                            <label for="Status" class="form-label">Status</label>
                            <select name="Status" id="Status" class="form-select" required>
                                <option value="1">Diizinkan</option>
                                <option value="0">Tidak Diizinkan</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->
</main>

<footer id="footer" class="footer accent-background">
    <p> <strong class="px-1 sitename">FT</strong>©<strong class="px-1 sitename">2024</strong></p>
</footer>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
