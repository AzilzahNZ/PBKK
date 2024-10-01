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
        /* Menambahkan warna oranye pada kepala tabel */
        thead {
            background-color: orange;
        }

        /* Mengatur tampilan tabel agar responsif dengan scrollbar jika lebar konten melebihi layar */
        .table-responsive {
            overflow-x: auto;
        }

        /* Agar kolom tabel menyesuaikan dengan isi tabel */
        table th, table td {
            white-space: nowrap;
        }
        <style>

        /* Menambahkan style untuk body dan footer */
        body {
            display: flex;
            flex-direction: column;
        }

        main {
            flex-grow: 1; /* Memungkinkan konten utama mengisi ruang yang tersedia */
            min-height: 100vh;
        }
    </style>
</head>

<body class="index-page">

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
                <div class="col-lg-12">
                    <h1 class="mb-4">Daftar Surat Izin Kegiatan ORMAWA Fakultas Teknik</h1>

                    <!-- Tabel Responsif -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>NomorSurat</th>
                                    <th>NamaKegiatan</th>
                                    <th>HariKegiatan</th>
                                    <th>TanggalKegiatan</th>
                                    <th>TempatKegiatan</th>
                                    <th>PJKegiatan</th>
                                    <th>Semester</th>
                                    <th>NomorHPPJ</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $dt)
                                    <tr>
                                        <td>{{$dt->NomorSurat}}</td>
                                        <td>{{$dt->NamaKegiatan}}</td>
                                        <td>{{$dt->HariKegiatan}}</td>
                                        <td>{{$dt->TanggalKegiatan}}</td>
                                        <td>{{$dt->TempatKegiatan}}</td>
                                        <td>{{$dt->PJKegiatan}}</td>
                                        <td>{{$dt->Semester}}</td>
                                        <td>{{$dt->NomorHPPJ}}</td>
                                        <td>{{$dt->Status}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->
</main>

<footer id="footer" class="footer accent-background">
    <p><strong class="px-1 sitename">FT</strong>©<strong class="px-1 sitename">2024</strong></p>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
