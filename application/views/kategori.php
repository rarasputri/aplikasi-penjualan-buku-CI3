<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta
            name="description"
            content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
        <meta name="author" content="Inovatik">
        <meta property="og:site_name" content=""/>
        <meta property="og:site" content=""/>
        <meta property="og:title" content=""/>
        <meta property="og:description" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:type" content="article"/>
        <title>LokaBaca – Surga bagi Pecinta Buku</title>

        <!-- Styles -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext"
            rel="stylesheet">
        <link href="<?= base_url('assets/tivo/') ?>css/bootstrap.css" rel="stylesheet">
        <link
            href="<?= base_url('assets/tivo/') ?>css/fontawesome-all.css"
            rel="stylesheet">
        <link href="<?= base_url('assets/tivo/') ?>css/swiper.css" rel="stylesheet">
        <link
            href="<?= base_url('assets/tivo/') ?>css/magnific-popup.css"
            rel="stylesheet">
        <link href="<?= base_url('assets/tivo/') ?>css/styles.css" rel="stylesheet">
        <link rel="icon" href="<?= base_url('assets/tivo/') ?>images/favicon.png">
    </head>
    <style>
        .search-container {
            position: relative;
            display: flex;
            align-items: center;
            width: 20%;

        }
        .search-input {
            width: 100%;
            padding: 10px 40px 10px 15px;
            border: 1px solid white;
            border-radius: 25px;
            outline: none;
            font-size: 16px;
            background-color: white;
            transition: border-color 0.3s ease;
        }

        .search-icon {
            position: absolute;
            right: 15px;
            font-size: 16px;
            color: blue;
            pointer-events: none;
        }

        .search-input:focus {
            border-color: white;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
         .pagination-wrapper {
            text-align: center;
            margin-top: 20px;
        }

        .pagination-wrapper .pagination-link {
            display: inline-block;
            margin: 0 5px;
            padding: 8px 12px;
            text-decoration: none;
            color: #007bff;
            border: 1px solid #ddd;
            border-radius: 7px;
        }

        .pagination-wrapper .pagination-link.active {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }
        .card-image:hover img {
            transform: scale(1.1);
            transition: 0.4s;
        }

        .card-overlay {
            position: absolute;
            top: 6px;
            left: 0;
            width: 100px;
            height: 350px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .card-image:hover .card-overlay {
            opacity: 0.3;
        }
    </style>
    <body data-spy="scroll" data-target=".fixed-top">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container">

                <h2>
                    <a class="navbar-brand logo-image" href=""><?= $konfigurasi->judul_website; ?></a>
                </h2>

                <!-- Mobile Menu Toggle Button -->
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-awesome fas fa-bars"></span>
                    <span class="navbar-toggler-awesome fas fa-times"></span>
                </button>
                <!-- end of mobile menu toggle button -->

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="<?= base_url('beranda') ?>">HOME
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <?php foreach ($kategori as $kate){ ?>
                        <li class="nav-item">
                            <a
                                class="nav-link page-scroll"
                                href="<?= base_url('beranda/kategori/'. $kate['id_kategori']) .'/#kategori' ?>">
                                <?= $kate['nama_kategori'] ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                        <div class="search-container">
                            <input
                                type="text"
                                id="searchInput"
                                class="form-control search-input"
                                placeholder="Search For..."
                                onkeyup="searchByTitle()">
                            <i class="fa fa-search search-icon"></i>
                        </div>
                    
                    <span class="nav-item">
                        <a class="btn-outline-sm" href="<?= base_url('admin/auth') ?>">LOG IN</a>
                    </span>
                </div>
            </div>
            <!-- end of container -->
        </nav>
        <!-- end of navbar -->
        <!-- end of navigation -->

        <!-- Header -->
        <header id="header" class="header">
            <div class="header-content">
                <div class="container"></div>
                <!-- end of container -->
            </div>
            <!-- end of header-content -->
        </header>
        <!-- end of header -->
        <svg
            class="header-frame"
            data-name="Layer 1"
            xmlns="http://www.w3.org/2000/svg"
            preserveaspectratio="none"
            viewbox="0 0 1920 310">
            <defs>
                <style>
                    .cls-1 {
                        fill: #5f4def;
                    }
                </style>
            </defs>
            <title>header-frame</title><path
                class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z"/></svg>
        <!-- end of header -->

        <!-- Description -->

        <div class="cards-1" id="kategori">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="above-heading"><?= $nama_kategori; ?></div>
                        <h2 class="h2-heading">Temukan petualangan tanpa batas di setiap halaman bersama LokaBaca!</h2>
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->

                <div class="row" id="contentContainer">
                    <?php
                    $itemsPerPage = 8; // Jumlah item per halaman
                    $totalItems = count($konten); // Total konten
                    $totalPages = ceil($totalItems / $itemsPerPage); // Total halaman
                    $currentPage = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1; // Halaman saat ini
                    $offset = ($currentPage - 1) * $itemsPerPage; // Offset untuk array_slice

                    // Ambil konten berdasarkan halaman
                    $paginatedKonten = array_slice($konten, $offset, $itemsPerPage);

                    foreach ($paginatedKonten as $aa) { ?>
                    <div
                        class="col-lg-3 content-card"
                        data-title="<?= strtolower($aa['judul']) ?>"
                        data-category="<?= strtolower($aa['nama_kategori']) ?>">
                        <div class="card">
                            <div class="card-image">
                                <a href="<?= base_url('beranda/artikel/' . $aa['slug']) ?>">
                                    <img
                                        style="height:320px;"
                                        class="img-fluid"
                                        src="<?= base_url('upload/konten/' . $aa['foto']) ?>"
                                        alt="alternative">
                                    <div class="card-overlay">
                                        <span><?= $aa['judul'] ?></span>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><?= $aa['judul'] ?></h4>
                                <p><?= $aa['nama_kategori'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <!-- Pagination -->
                <?php if ($totalPages > 1) { ?>
                <div class="pagination-wrapper">
                    <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                    <a
                        href="?page=<?= $i ?>#buku"
                        class="pagination-link <?= $i == $currentPage ? 'active' : '' ?>">
                        <?= $i ?>
                    </a>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>

        </div>
        <!-- end of description -->

        <!-- Newsletter -->
        <div class="form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="icon-container">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-pinterest-p fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                </a>
                            </span>
                        </div>
                        <!-- end of col -->
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of form -->
        <!-- end of newsletter -->

        <!-- Footer -->
        <svg
            class="footer-frame"
            data-name="Layer 2"
            xmlns="http://www.w3.org/2000/svg"
            preserveaspectratio="none"
            viewbox="0 0 1920 79">
            <defs>
                <style>
                    .cls-2 {
                        fill: #5f4def;
                    }
                </style>
            </defs>
            <title>footer-frame</title><path
                class="cls-2"
                d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z"
                transform="translate(0 -0.188)"/></svg>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-col first">
                            <h4><?= $konfigurasi->judul_website; ?></h4>
                            <p class="p-small"><?= $konfigurasi->profil_website; ?></p>
                        </div>
                    </div>
                    <!-- end of col -->
                    <div class="col-md-4">
                        <div class="footer-col middle">
                            <h4>Important Links</h4>
                            <ul class="list-unstyled li-space-lg p-small">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Our business partners
                                        <a class="white" href="#your-link">startupguide.com</a>
                                    </div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Read our
                                        <a class="white" href="terms-conditions.html">Terms & Conditions</a>,
                                        <a class="white" href="privacy-policy.html">Privacy Policy</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end of col -->
                    <div class="col-md-4">
                        <div class="footer-col last">
                            <h4>Contact</h4>
                            <ul class="list-unstyled li-space-lg p-small">
                                <li class="media">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="media-body"><?= $konfigurasi->alamat; ?></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-envelope"></i>
                                    <div class="media-body">
                                        <a class="white" href=""><?= $konfigurasi->email; ?></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of footer -->
        <!-- end of footer -->

        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Copyright © 2024 Created By
                            <a href="https://themewagon.com" target="_blank">LokaBaca</a>
                        </p>
                    </div>
                    <!-- end of col -->
                </div>
                <!-- enf of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of copyright -->
        <!-- end of copyright -->
        <script>
            document
                .getElementById('searchInput')
                .addEventListener('keyup', function () {
                    let query = this
                        .value
                        .toLowerCase();
                    let cards = document.querySelectorAll('.content-card');

                    cards.forEach(function (card) {
                        let title = card.getAttribute('data-title');
                        let category = card.getAttribute('data-category');

                        if (title.includes(query) || category.includes(query)) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
        </script>
        <!-- Scripts -->
        <script src="<?= base_url('assets/tivo/') ?>js/jquery.min.js"></script>
        <!-- jQuery for Bootstrap's JavaScript plugins -->
        <script src="<?= base_url('assets/tivo/') ?>js/popper.min.js"></script>
        <!-- Popper tooltip library for Bootstrap -->
        <script src="<?= base_url('assets/tivo/') ?>js/bootstrap.min.js"></script>
        <!-- Bootstrap framework -->
        <script src="<?= base_url('assets/tivo/') ?>js/jquery.easing.min.js"></script>
        <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="<?= base_url('assets/tivo/') ?>js/swiper.min.js"></script>
        <!-- Swiper for image and text sliders -->
        <script src="<?= base_url('assets/tivo/') ?>js/jquery.magnific-popup.js"></script>
        <!-- Magnific Popup for lightboxes -->
        <script src="<?= base_url('assets/tivo/') ?>js/validator.min.js"></script>
        <!-- Validator.js - Bootstrap plugin that validates forms -->
        <script src="<?= base_url('assets/tivo/') ?>js/scripts.js"></script>
        <!-- Custom scripts -->
    </body>
</html>