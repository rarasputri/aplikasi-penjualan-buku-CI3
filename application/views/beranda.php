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
            width: 18%;

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
        .swiper-container {
            width: 100%;
            padding: 20px 0;
        }
        .swiper-slide {
            display: flex;
            justify-content: center;
        }
        .blog-container {
            max-width: 1200px;
            margin: 0 auto;

        }

        .blog-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        .blog-cards {
            display: flex;
            gap: 20px;
            padding: 15px;
        }

        .blog-card {
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 330px;
            flex: 1;
        }

        .blog-card img {
            width: 100%;
            height: 200px;
        }

        .blog-card-content {
            padding: 15px;
        }

        .blog-card-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin: 0 0 10px;
            color: #333;
        }

        .blog-card-desc {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 10px;
        }

        .blog-card-date {

            font-size: 0.8rem;
            color: #999;
        }
        .slider1 {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            max-width: 1000px;
            margin: auto;
        }
        .slider1-container {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .slide1 {
            min-width: 300px;
            margin: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            overflow: hidden;
        }
        .slide1 img {
            width: 100%;
            height: auto;
        }
        .slide1 h3 {
            margin: 10px 0;
        }
        .buttons {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
        .button {
            background-color: #5f4def;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 100px;
        }
        .button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
        .blog-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            position: relative;

            transition: transform 0.3s ease-in-out;
        }

        .blog-card {
            max-width: 384px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
            flex: 0 0 calc(33.3% - 20px);
            /* Setiap card mengambil sepertiga dari lebar kontainer */
            box-sizing: border-box;
        }

        .blog-card:hover {
            transform: translateY(-5px);
        }

        .blog-image {
            width: 100%;
            height: 192px;
            object-fit: cover;
        }

        .blog-content {
            padding: 16px;
        }

        .blog-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
            line-height: 1.4;
        }

        .blog-description {
            font-size: 14px;
            color: #666;
            margin-bottom: 16px;
            line-height: 1.6;
        }

        .blog-date {
            font-size: 12px;
            color: #999;
        }

        .blog-wrapper {
            position: relative;
            overflow: hidden;
            /* Membatasi konten di dalam pembungkus */
            width: 100%;
        }
        .banner
{
	width: 100%;
	margin-top: 30px;
}
.banner_item
{
	display: -webkit-box;
	display: -moz-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	height: 265px;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
}
.banner_category
{
	height: 50px;
	background: #FFFFFF;
	min-width: 180px;
	padding-left: 25px;
	padding-right: 25px;
}
.banner_category a
{
	display: block;
	color: #1e1e27;
	text-transform: uppercase;
	font-size: 22px;
	font-weight: 600;
	text-align: center;
	line-height: 50px;
	width: 100%;
	-webkit-transition: color 0.3s ease;
	-moz-transition: color 0.3s ease;
	-ms-transition: color 0.3s ease;
	-o-transition: color 0.3s ease;
	transition: color 0.3s ease;
}
.banner_category a:hover
{
	color: #b5aec4;
}
/* Style untuk elemen checkout */
.checkout {
    position: relative; /* Untuk positioning badge di atas ikon */
    display: inline-block;
}

.checkout a {
    text-decoration: none;
    color: #333; /* Warna teks/ikon */
    font-size: 20px; /* Ukuran ikon keranjang */
}

.checkout i {
    font-size: 22px; /* Ukuran ikon keranjang belanja */
    color: #fff; /* Warna ikon */
}

/* Style untuk badge item */
.checkout_items {
    position: absolute;
    top: -8px; /* Posisi badge di atas ikon */
    right: -10px; /* Posisi badge di sisi kanan ikon */
    background-color: #d32f2f; /* Warna merah untuk badge */
    color: #fff; /* Warna teks badge */
    font-size: 14px; /* Ukuran teks */
    font-weight: bold; /* Teks tebal */
    width: 20px; /* Lebar badge */
    height: 20px; /* Tinggi badge */
    line-height: 20px; /* Menengahkan teks secara vertikal */
    text-align: center; /* Menengahkan teks secara horizontal */
    border-radius: 50%; /* Membuat badge berbentuk lingkaran */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Bayangan untuk badge */
}
    </style>
    <body data-spy="scroll" data-target=".fixed-top" id="home">

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
                            <a class="nav-link page-scroll" href="#home">HOME
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle page-scroll"
                                href="#buku"
                                id="bukuDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                KATEGORI
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="bukuDropdown">
                                <?php foreach ($kategori as $kate) { ?>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="<?= base_url('beranda/kategori/' . $kate['id_kategori']) . '/#kategori' ?>">
                                        <?= $kate['nama_kategori'] ?>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link page-scroll" href="#galeri">GALERI<span class="sr-only"></span></a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#blog">BLOG<span class="sr-only"></span></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link page-scroll" href="#saran">SARAN<span class="sr-only"></span></a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#contak">CONTACT<span class="sr-only"></span></a>
                        </li>
                        
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
                    <li class="checkout" style="position: relative;">
                        <span
                            id="checkout_items"
                            class="checkout_items"
                            style="position: absolute; top: -8px; left: 100%; background-color:red; transform: translateX(-50%); color: white; font-size: 12px; font-weight: bold;">
                            <?php echo $this->cart->total_items(); ?>
                        </span>
                        <a href="<?= base_url('beranda/keranjang') ?>">
                            <i
                                class="fa fa-shopping-cart"
                                aria-hidden="true"
                                style="font-size: 24px ; color: white;"></i>
                        </a>
                    </li>
                    <span class="nav-item">

                        <?php if ($this->session->userdata('username')) { ?> 
                            <!-- <div style="color: white;"><?php echo $this->session->userdata('username') ?></div> -->
                            <div class="btn-outline-sm" style="color: blue;"> 
                                <?php echo anchor('pelanggan/logout', 'Logout', ['class' => 'nav-link']) ?>
                            </div>
                        <?php } else { ?>
                            <div class="btn-outline-sm">
                                <?php echo anchor('pelanggan/login', 'Login', ['class' => 'nav-link']) ?>
                            </div>
                            
                        <?php } ?>
                    </span>

                </div>

            </div>
            <!-- end of container -->
        </nav>
        <!-- end of navbar -->
        <!-- end of navigation -->

        <header id="header" class="header">
            <div id="headerCarousel" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php foreach ($caraousel as $index => $aa) { ?>
                    <li
                        data-bs-target="#headerCarousel"
                        data-bs-slide-to="<?= $index ?>"
                        class="<?= $index === 0 ? 'active' : '' ?>"></li>
                    <?php } ?>
                </ol>

                <!-- Carousel Items -->
                <div class="carousel-inner">
                    <?php foreach ($caraousel as $index => $aa) { ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                        <div class="header-content">
                            <div class="container">
                                <div class="row align-items-center">

                                    <!-- Text Section -->
                                    <div class="col-lg-6">
                                        <h1 style="font-weight: bold; color:white;"><?= $aa['judul'] ?></h1>
                                        <p style="font-size: 18px; color: white;"><?= $aa['keterangan'] ?></p>
                                    </div>

                                    <!-- Image Section -->
                                    <div class="col-lg-6 text-center">
                                        <div class="image-container">
                                            <img
                                                style="height: 320px; width: auto; border-radius: 8px;"
                                                src="<?= base_url('upload/caraousel/' . $aa['foto']) ?>"
                                                alt="<?= $aa['judul'] ?>">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </header>

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
                class="cls-1"
                d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z"/>
        </svg>

               
        <div class="container" style="margin-top: 7rem;">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Judul Section -->
                    <div class="section-title">
                        <h2>Buku Terbaru</h2>
                    </div>

                    <!-- Slider Container -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <!-- Loop blog Buku -->
                                <?php 
                        // Urutkan blog berdasarkan tanggal terbaru
                        usort($konten, function($a, $b) {
                            return strtotime($b['tanggal']) - strtotime($a['tanggal']);
                        });
                        
                        // Ambil 5 blog terbaru
                        $konten_terbaru = array_slice($konten, 0, 5);

                        foreach ($konten_terbaru as $aa) { 
                            // if ($aa['id_kategori'] == 2) { ?>
                                <div class="swiper-slide">
                                    <!-- Kartu Buku -->
                                    <div
                                        class="book-card"
                                        style="border: 1px solid #ddd; border-radius: 10px; padding: 15px; text-align: center; height: 320px;">

                                        <a href="<?= base_url('beranda/artikel/' . $aa['slug']) ?>">
                                            <img
                                                style="width: 150px; height: 200px; margin-bottom: 10px;"
                                                class="img-fluid slider-image"
                                                src="<?= base_url('upload/konten/' . $aa['foto']) ?>">
                                        </a>

                                        <!-- Judul Buku -->
                                        <h5 style="font-size: 16px; font-weight: bold; margin-bottom: 10px;">
                                            <?= $aa['judul'] ?>
                                        </h5>
                                        <!-- Harga Buku -->
                                        <p style="margin: 0; color: #333;">
                                            <span style="color: black; font-weight: bold;">
                                                Rp<?= number_format($aa['harga'], 0, ',', '.') ?>
                                            </span>
                                        </p>

                                    </div>
                                </div>
                                <?php 
                            } 
                         ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 7rem;">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Judul Section -->
                    <div class="section-title">
                        <h2>Buku Fiksi</h2>
                    </div>
                    <div  class="above-heading" style="text-align: right; padding:5px; ">
                            <a
                                href="<?= base_url('beranda/kategori/1/#kategori') ?>"
                                class="see-all-link"
                                style="font-size: 16px; color: #007bff; text-decoration: none;">Lihat Semua</a>
                        </div>
                    <!-- Slider Container -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <!-- Loop blog Buku -->
                                <?php
                        foreach ($konten as $aa) { 
                            if ($aa['id_kategori'] == 1) { ?>
                                <div class="swiper-slide">
                                    <!-- Kartu Buku -->
                                    <div
                                        class="book-card"
                                        style="border: 1px solid #ddd; border-radius: 10px; padding: 15px; text-align: center; height: 320px;">

                                        <a href="<?= base_url('beranda/artikel/' . $aa['slug']) ?>">
                                            <img
                                                style="width: 150px; height: 200px; margin-bottom: 10px;"
                                                class="img-fluid slider-image"
                                                src="<?= base_url('upload/konten/' . $aa['foto']) ?>">
                                        </a>

                                        <!-- Judul Buku -->
                                        <h5 style="font-size: 16px; font-weight: bold; margin-bottom: 10px;">
                                            <?= $aa['judul'] ?>
                                        </h5>
                                        <!-- Harga Buku -->
                                        <p style="margin: 0; color: #333;">
                                            <span style="color: black; font-weight: bold;">
                                                Rp<?= number_format($aa['harga'], 0, ',', '.') ?>
                                            </span>
                                        </p>

                                    </div>
                                </div>
                                <?php 
                            } 
                        }
                         ?>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 7rem;">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Judul Section -->
                    <div class="section-title">
                        <h2>Fiksi Sejarah</h2>
                    </div>
                    <div  class="above-heading" style="text-align: right; padding:5px; ">
                            <a
                                href="<?= base_url('beranda/kategori/6/#kategori') ?>"
                                class="see-all-link"
                                style="font-size: 16px; color: #007bff; text-decoration: none;">Lihat Semua</a>
                        </div>
                    <!-- Slider Container -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <!-- Loop blog Buku -->
                                <?php
                        foreach ($konten as $aa) { 
                            if ($aa['id_kategori'] == 6) { ?>
                                <div class="swiper-slide">
                                    <!-- Kartu Buku -->
                                    <div
                                        class="book-card"
                                        style="border: 1px solid #ddd; border-radius: 10px; padding: 15px; text-align: center; height: 320px;">

                                        <a href="<?= base_url('beranda/artikel/' . $aa['slug']) ?>">
                                            <img
                                                style="width: 150px; height: 200px; margin-bottom: 10px;"
                                                class="img-fluid slider-image"
                                                src="<?= base_url('upload/konten/' . $aa['foto']) ?>">
                                        </a>

                                        <!-- Judul Buku -->
                                        <h5 style="font-size: 16px; font-weight: bold; margin-bottom: 10px;">
                                            <?= $aa['judul'] ?>
                                        </h5>
                                        <!-- Harga Buku -->
                                        <p style="margin: 0; color: #333;">
                                            <span style="color: black; font-weight: bold;">
                                                Rp<?= number_format($aa['harga'], 0, ',', '.') ?>
                                            </span>
                                        </p>

                                    </div>
                                </div>
                                <?php 
                            } 
                        }
                         ?>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>


        <div class="container" style="margin-top: 7rem;">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Judul Section -->
                    <div class="section-title">
                        <h2>Buku NonFiksi</h2>
                    </div>
                    <div  class="above-heading" style="text-align: right; padding:5px; ">
                            <a
                                href="<?= base_url('beranda/kategori/2/#kategori') ?>"
                                class="see-all-link"
                                style="font-size: 16px; color: #007bff; text-decoration: none;">Lihat Semua</a>
                        </div>
                    <!-- Slider Container -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <!-- Loop blog Buku -->
                                <?php
                        foreach ($konten as $aa) { 
                            if ($aa['id_kategori'] == 2) { ?>
                                <div class="swiper-slide">
                                    <!-- Kartu Buku -->
                                    <div
                                        class="book-card"
                                        style="border: 1px solid #ddd; border-radius: 10px; padding: 15px; text-align: center; height: 320px;">

                                        <a href="<?= base_url('beranda/artikel/' . $aa['slug']) ?>">
                                            <img
                                                style="width: 150px; height: 200px; margin-bottom: 10px;"
                                                class="img-fluid slider-image"
                                                src="<?= base_url('upload/konten/' . $aa['foto']) ?>">
                                        </a>

                                        <!-- Judul Buku -->
                                        <h5 style="font-size: 16px; font-weight: bold; margin-bottom: 10px;">
                                            <?= $aa['judul'] ?>
                                        </h5>
                                        <!-- Harga Buku -->
                                        <p style="margin: 0; color: #333;">
                                            <span style="color: black; font-weight: bold;">
                                                Rp<?= number_format($aa['harga'], 0, ',', '.') ?>
                                            </span>
                                        </p>

                                    </div>
                                </div>
                                <?php 
                            } 
                        }
                         ?>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 7rem;">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Judul Section -->
                    <div class="section-title">
                        <h2>Koleksi Majalah</h2>
                    </div>
                    <div  class="above-heading" style="text-align: right; padding:5px; ">
                            <a
                                href="<?= base_url('beranda/kategori/4/#kategori') ?>"
                                class="see-all-link"
                                style="font-size: 16px; color: #007bff; text-decoration: none;">Lihat Semua</a>
                        </div>
                    <!-- Slider Container -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <!-- Loop blog Buku -->
                                <?php
                        foreach ($konten as $aa) { 
                            if ($aa['id_kategori'] == 4) { ?>
                                <div class="swiper-slide">
                                    <!-- Kartu Buku -->
                                    <div
                                        class="book-card"
                                        style="border: 1px solid #ddd; border-radius: 10px; padding: 15px; text-align: center; height: 320px;">

                                        <a href="<?= base_url('beranda/artikel/' . $aa['slug']) ?>">
                                            <img
                                                style="width: 150px; height: 200px; margin-bottom: 10px;"
                                                class="img-fluid slider-image"
                                                src="<?= base_url('upload/konten/' . $aa['foto']) ?>">
                                        </a>

                                        <!-- Judul Buku -->
                                        <h5 style="font-size: 16px; font-weight: bold; margin-bottom: 10px;">
                                            <?= $aa['judul'] ?>
                                        </h5>
                                        <!-- Harga Buku -->
                                        <p style="margin: 0; color: #333;">
                                            <span style="color: black; font-weight: bold;">
                                                Rp<?= number_format($aa['harga'], 0, ',', '.') ?>
                                            </span>
                                        </p>

                                    </div>
                                </div>
                                <?php 
                            } 
                        }
                         ?>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 7rem;">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Judul Section -->
                    <div class="section-title">
                        <h2>Koleksi Komik</h2>
                    </div>
                    <div  class="above-heading" style="text-align: right; padding:5px; ">
                            <a
                                href="<?= base_url('beranda/kategori/5/#kategori') ?>"
                                class="see-all-link"
                                style="font-size: 16px; color: #007bff; text-decoration: none;">Lihat Semua</a>
                        </div>
                    <!-- Slider Container -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <!-- Loop blog Buku -->
                                <?php
                        foreach ($konten as $aa) { 
                            if ($aa['id_kategori'] == 5) { ?>
                                <div class="swiper-slide">
                                    <!-- Kartu Buku -->
                                    <div
                                        class="book-card"
                                        style="border: 1px solid #ddd; border-radius: 10px; padding: 15px; text-align: center; height: 320px;">

                                        <a href="<?= base_url('beranda/artikel/' . $aa['slug']) ?>">
                                            <img
                                                style="width: 150px; height: 200px; margin-bottom: 10px;"
                                                class="img-fluid slider-image"
                                                src="<?= base_url('upload/konten/' . $aa['foto']) ?>">
                                        </a>

                                        <!-- Judul Buku -->
                                        <h5 style="font-size: 16px; font-weight: bold; margin-bottom: 10px;">
                                            <?= $aa['judul'] ?>
                                        </h5>
                                        <!-- Harga Buku -->
                                        <p style="margin: 0; color: #333;">
                                            <span style="color: black; font-weight: bold;">
                                                Rp<?= number_format($aa['harga'], 0, ',', '.') ?>
                                            </span>
                                        </p>

                                    </div>
                                </div>
                                <?php 
                            } 
                        }
                         ?>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

        <br><br>
        <div class="cards-1" id="buku">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="above-heading">LIBRARY</div>
                        <h2 class="h2-heading">Temukan petualangan tanpa batas di setiap halaman bersama LokaBaca!</h2>
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
                <div class="row" id="contentConta">
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
                                        style="height:290px;"
                                        class="img-fluid"
                                        src="<?= base_url('upload/konten/' . $aa['foto']) ?>"
                                        alt="alternative">
                                    <div class="card-overlay">
                                        <span><?= $aa['judul'] ?></span>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <span style="font-size: 12px;"><?= $aa['nama_kategori'] ?></span>
                                <h4 class="card-title"><?= $aa['judul'] ?></h4>
                                <h5 style="color:#686D76;; font-weight: bold;">
                                    Rp
                                    <?= number_format($aa['harga'], 0, ',', '.') ?>
                                </h5>
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

        <!-- <div class="cards-2" id="galeri">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="above-heading">GALERI</div>
                        <h2 class="h2-heading">Temukan petualangan tanpa batas di setiap halaman bersama LokaBaca!</h2>
                    </div>
                   
                </div>
               
                <div class="row" id="contentContainer">
                    <?php
                    $itemsPerPage = 3; // Jumlah item per halaman
                    $totalItems = count($galeri); // Total konten
                    $totalPages = ceil($totalItems / $itemsPerPage); // Total halaman
                    $currentPage = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1; // Halaman saat ini
                    $offset = ($currentPage - 1) * $itemsPerPage; // Offset untuk array_slice

                    // Ambil konten berdasarkan halaman
                    $paginatedGaleri = array_slice($galeri, $offset, $itemsPerPage);

                    foreach ($paginatedGaleri as $aa) { ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="card-image">
                                <img
                                    class="img-fluid"
                                    src="<?= base_url('upload/galeri/' .$aa['foto']) ?>"
                                    alt="alternative">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <?php if ($totalPages > 1) { ?>
                <div class="pagination-wrapper">
                    <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                    <a
                        href="?page=<?= $i ?>#galeri"
                        class="pagination-link <?= $i == $currentPage ? 'active' : '' ?>">
                        <?= $i ?>
                    </a>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>

        </div> -->

        <!-- Description -->
        <div class="cards-1" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="above-heading">Blog</div>
                        <h2 class="h2-heading">Temukan Cerita Menarik Di LokaBaca</h2>
                        <div  class="above-heading" style="text-align: right; padding: 5px; margin-top: 16px;">
                            <a
                                href="<?= base_url('beranda/blogitem') ?>"
                                class="see-all-link"
                                style="font-size: 16px; color: #007bff; text-decoration: none;">Lihat Semua</a>
                        </div>
                    </div>
                    <!-- end of col -->
                </div>
            </div>
            <!-- HTML -->
            <div class="blog-wrapper">
                <div class="col-lg-3 blog-container">
                    <?php foreach (array_slice($blog, 0, 3) as $item) { ?>

                    <div class="blog-card">
                    <a href="<?= base_url('beranda/blog/' . $item['slug']) ?>">
                        <img
                            src="<?= base_url('upload/blog/' . $item['foto']) ?>"
                            alt="Clean Eating"
                            class="blog-image"/>
                    </a>
                        <div class="blog-content">
                            <h4 class="blog-title"><?= $item['judul'] ?></h4>
                            <!-- <p class="blog-description"><?= $item['deskripsi'] ?></p> -->
                            <p class="blog-date"><?= $item['tanggal'] ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>

        </div>

        <br><br>


        <!-- Newsletter -->
        <div class="form" id="saran">
            <div class="container">
               <!-- <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <div class="above-heading">LOKALBACA</div>
                            <h2>Berikan Saran Pada LokaBaca</h2>

                           

                            <form action="<?= base_url('admin/saran/simpan') . '/#saran' ?>" method="post">
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control-input"
                                        id="nama"
                                        name="nama"
                                        required="required">
                                    <label class="label-control" for="nama">Nama</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input
                                        type="email"
                                        class="form-control-input"
                                        id="email"
                                        name="email"
                                        required="required">
                                    <label class="label-control" for="email">Email</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control-input"
                                        id="isi_saran"
                                        name="isi_saran"
                                        required="required">
                                    <label class="label-control" for="isi_saran">Saran</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group" href="#saran">
                                    <button type="submit" href="#saran" class="form-control-submit-button">SUBMIT</button>
                                </div>

                            </form>
                           

                        </div>
                        
                    </div>
                   
                </div>-->
                
                <br>
                <br>
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
    </div>
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
    <div class="footer" id="contak">
        <div class="col-lg-18">
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

        document.addEventListener("DOMContentLoaded", function () {
            const container = document.querySelector(".blog-container");
            const prevButton = document.querySelector(".swiper-button-prev");
            const nextButton = document.querySelector(".swiper-button-next");
            const cardWidth = document
                .querySelector(".blog-card")
                .offsetWidth;
            const visibleCards = 3; // Jumlah item yang terlihat
            const scrollAmount = cardWidth * visibleCards;

            let currentPosition = 0;

            // Fungsi untuk menggeser kontainer ke kiri
            prevButton.addEventListener("click", () => {
                currentPosition = Math.max(currentPosition - scrollAmount, 0);
                container.style.transform = `translateX(-${currentPosition}px)`;
            });

            // Fungsi untuk menggeser kontainer ke kanan
            nextButton.addEventListener("click", () => {
                const maxScroll = container.scrollWidth - container.offsetWidth; // Batas maksimal geseran
                currentPosition = Math.min(currentPosition + scrollAmount, maxScroll);
                container.style.transform = `translateX(-${currentPosition}px)`;
            });
        });
    </script>
    <script src="<?= base_url('assets/tivo/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/tivo/') ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/tivo/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/tivo/') ?>js/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/tivo/') ?>js/swiper.min.js"></script>
    <script src="<?= base_url('assets/tivo/') ?>js/jquery.magnific-popup.js"></script>
    <script src="<?= base_url('assets/tivo/') ?>js/validator.min.js"></script>
    <script src="<?= base_url('assets/tivo/') ?>js/scripts.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>