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
    <style>
        /* Style untuk menyesuaikan padding, margin, dan layout */
        .form-container input,
        .form-container select {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px;
            box-sizing: border-box;
        }

        .form-container label {
            font-weight: 500;
            margin-bottom: 5px;
        }

        .form-container .row {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #d77c43;
        }

        .btn-primary:hover {
            background-color: rgb(30, 234, 30);
        }

        .form-container input[type="submit"] {
            width: 15%;
            border-radius: 5px;
            background-color: #d77c43;
            border: none;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: rgb(30, 234, 30);
        }

        .form-container select {
            padding: 10px;
        }
    </style>
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

    <main>
        <section id="hero" class="hero section accent-background mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="mb-4">Edit Data Surat Izin Kegiatan</h1>
        </section>

        <section class="py-5" id="sizin">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="form-container">
                            <form action="{{route('update', $sizin->id)}}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="NomorSurat" class="form-label">Nomor Surat</label>
                                        <input type="text" name="NomorSurat" placeholder="masukkan Nomor Surat"
                                            value="{{ old('NomorSurat', $sizin->NomorSurat) }}">
                                        @error('NomorSurat')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="NamaKegiatan" class="form-label">Nama Kegiatan</label>
                                        <input type="text" name="NamaKegiatan" placeholder="masukkan Nama Kegiatan"
                                            value="{{ old('NamaKegiatan', $sizin->NamaKegiatan) }}">
                                        @error('NamaKegiatan')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="HariKegiatan" class="form-label">Hari Kegiatan</label>
                                        <select name="HariKegiatan">
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>
                                        </select>
                                        @error('HariKegiatan')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="TanggalKegiatan" class="form-label">Tanggal Kegiatan</label>
                                        <input type="date" name="TanggalKegiatan"
                                            value="{{ old('TanggalKegiatan', $sizin->TanggalKegiatan) }}">
                                        @error('TanggalKegiatan')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="TempatKegiatan" class="form-label">Tempat Kegiatan</label>
                                        <input type="text" name="TempatKegiatan" placeholder="masukkan Tempat Kegiatan"
                                            value="{{ old('TempatKegiatan', $sizin->TempatKegiatan) }}">
                                        @error('TempatKegiatan')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="PJKegiatan" class="form-label">PJ Kegiatan</label>
                                        <input type="text" name="PJKegiatan" placeholder="masukkan PJ Kegiatan"
                                            value="{{ old('PJKegiatan', $sizin->PJKegiatan) }}">
                                        @error('PJKegiatan')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="Semester" class="form-label">Semester</label>
                                        <input type="number" name="Semester" placeholder="masukkan Semester"
                                            value="{{ old('Semester', $sizin->Semester) }}">
                                        @error('Semester')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="NomorHPPJ" class="form-label">Nomor HP PJ</label>
                                        <input type="text" name="NomorHPPJ" placeholder="masukkan Nomor HPPJ"
                                            value="{{ old('NomorHPPJ', $sizin->NomorHPPJ) }}">
                                        @error('NomorHPPJ')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="Status" class="form-label">Status</label>
                                    <select name="Status">
                                        <option value="1">Diizinkan</option>
                                        <option value="0">Tidak Diizinkan</option>
                                    </select>
                                    @error('status')
                                    {{ $message }}
                                    @enderror
                                </div>

                                <div class="text-center mt-4">
                                    <input type="submit" value="Simpan">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer accent-background">
        <p> <strong class="px-1 sitename">FT</strong>©<strong class="px-1 sitename">2024</strong></p>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
