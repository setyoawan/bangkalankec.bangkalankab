<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="<?= base_url('assets'); ?>/img/bangkalan.png" rel="icon">
    <link href="<?= base_url('assets'); ?>/img/bangkalan.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('templates'); ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('templates'); ?>/css/animate.css">

    <link rel="stylesheet" href="<?= base_url('templates'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('templates'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('templates'); ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url('templates'); ?>/css/aos.css">

    <link rel="stylesheet" href="<?= base_url('templates'); ?>/css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url('templates'); ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url('templates'); ?>/css/jquery.timepicker.css">


    <link rel="stylesheet" href="<?= base_url('templates'); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('templates'); ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url('templates'); ?>/css/style.css">

    <script src="<?= base_url('assets'); ?>/charts/highcharts.js"></script>
    <script src="<?= base_url('assets'); ?>/charts/modules/exporting.js"></script>
    <script src="<?= base_url('assets'); ?>/charts/modules/export-data.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('page'); ?>"><img src="<?= base_url('assets'); ?>/img/bangkalan.png" height="40px" width="40px" alt=""> Bangkalan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="<?= base_url('page'); ?>" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="<?= base_url('page#news'); ?>" class="nav-link">News</a></li>
                    <li class="nav-item"><a href="<?= base_url('page#gallery'); ?>" class="nav-link">Gallery</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="blog.html" id="stakeholders" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Stakeholders
                        </a>
                        <div class="dropdown-menu" aria-labelledby="stakeholders">
                            <a class="dropdown-item text-primary" href="<?= base_url('page/koramil'); ?>">KORAMIL</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/polsek'); ?>">POLSEK</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/puskesmas'); ?>">PUSKESMAS</a>
                            
                            

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kelurahan/Desa
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                        <!-- <a class="dropdown-item text-primary" href="<?= base_url('page/tni'); ?>">Tentara Negara Indonesia</a> -->
                            <!-- <a class="dropdown-item text-primary" href="#">Puskesmas</a> -->
                            <a class="dropdown-item text-primary" href="<?= base_url('page/demangan'); ?>">Kelurahan Demangan</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/pejagan'); ?>">Kelurahan Pejagan</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/kraton'); ?>">Kelurahan Kraton</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/pangeranan'); ?>">Kelurahan Pangeranan</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/kemayoran'); ?>">Kelurahan Kemayoran</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/mlajah'); ?>">Kelurahan Mlajah</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/bancaran'); ?>">Kelurahan Bancaran</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/martajasah'); ?>">Desa Martajasah</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/ujungpiring'); ?>">Desa Ujung Piring</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/kramat'); ?>">Desa Kramat</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/sambilangan'); ?>">Desa Sambilangan</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/sabiyan'); ?>">Desa Sabiyan</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/gebang'); ?>">Desa Gebang</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pemerintahan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                        <a class="dropdown-item text-primary" href="<?= base_url('page/visimisi'); ?>">Visi & Misi</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/strukturorganisasi'); ?>">Struktur Organisasi</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/lakip'); ?>">Lakip</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/renstra'); ?>">Renstra</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Statistik
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_3">
                            <a class="dropdown-item text-primary" href="<?= base_url('page/penduduk'); ?>">Penduduk</a>
                            <a class="dropdown-item text-primary" href="<?= base_url('page/pendidikan'); ?>">Pendidikan</a>



                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <section class="hero-wrap ftco-degree-bg" style="background-image: url('<?= base_url('assets'); ?>/img/bkl.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('page'); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><?= $page; ?> <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread"><?= $sub; ?></h1>
                </div>
            </div>
        </div>
    </section>