<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- SEO Meta Tags -->
        <meta
            name="description"
            content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
        <meta name="author" content="Inovatik">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on
        LinkedIn, Facebook, Google+ -->
        <meta property="og:site_name" content=""/>
        <!-- website name -->
        <meta property="og:site" content=""/>
        <!-- website link -->
        <meta property="og:title" content=""/>
        <!-- title shown in the actual shared post -->
        <meta property="og:description" content=""/>
        <!-- description shown in the actual shared post -->
        <meta property="og:image" content=""/>
        <!-- image link, make sure it's jpg -->
        <meta property="og:url" content=""/>
        <!-- where do you want your post to link to -->
        <meta property="og:type" content="article"/>

        <!-- Website Title -->
        <title>Article Details - LokaBaca</title>

        <!-- Styles -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext"
            rel="stylesheet">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <link href="<?= base_url('assets/tivo/') ?>css/bootstrap.css" rel="stylesheet">
        <link
            href="<?= base_url('assets/tivo/') ?>css/fontawesome-all.css"
            rel="stylesheet">
        <link href="<?= base_url('assets/tivo/') ?>css/swiper.css" rel="stylesheet">
        <link
            href="<?= base_url('assets/tivo/') ?>css/magnific-popup.css"
            rel="stylesheet">
        <link href="<?= base_url('assets/tivo/') ?>css/styles.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="icon" href="images/favicon.png">
    </head>
    <style>
        .format-buku-container {
            color: #000;
            /* Warna teks */

        }

        .format-buku-container h4 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .format-button {
            display: inline-flex;
            align-items: center;
            background-color: #5f4def;
            /* Warna abu-abu background */
            padding: 10px 15px;
            border: 1px solid white;
            /* Garis hitam di sekitar tombol */
            border-radius: 20px;
            /* Membuat sudut melingkar */
            cursor: pointer;
            font-size: 14px;
            color: white;
        }

        .format-button .fas {
            font-size: 18px;
            /* Ukuran ikon */
            margin-right: 10px;
            /* Jarak antara ikon dan teks */
        }

        .format-button .text {
            font-size: 14px;
            font-weight: normal;
        }
        .quantity {
            width: 100%;
            height: 40px;
            margin-top: 23px;
        }
        .quantity_selector {
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            width: 132px;
            height: 100%;
            border: solid 1px #e5e5e5;
            margin-left: 29px;
        }
        .quantity_selector span {
            font-weight: 500;
            color: #232530;
        }
        .minus,
        .plus {
            padding-left: 14px;
            padding-right: 14px;
            cursor: pointer;
        }
        .minus:hover,
        .plus:hover {
            color: #b5aec4;
        }
        /* Style untuk elemen checkout */
        .checkout {
            position: relative;
            /* Untuk positioning badge di atas ikon */
            display: inline-block;
        }

        .checkout a {
            text-decoration: none;
            color: #333;
            /* Warna teks/ikon */
            font-size: 20px;
            /* Ukuran ikon keranjang */
        }

        .checkout i {
            font-size: 22px;
            /* Ukuran ikon keranjang belanja */
            color: #fff;
            /* Warna ikon */
        }

        /* Style untuk badge item */
        .checkout_items {
            position: absolute;
            top: -8px;
            /* Posisi badge di atas ikon */
            right: -10px;
            /* Posisi badge di sisi kanan ikon */
            background-color: #d32f2f;
            /* Warna merah untuk badge */
            color: #fff;
            /* Warna teks badge */
            font-size: 14px;
            /* Ukuran teks */
            font-weight: bold;
            /* Teks tebal */
            width: 20px;
            /* Lebar badge */
            height: 20px;
            /* Tinggi badge */
            line-height: 20px;
            /* Menengahkan teks secara vertikal */
            text-align: center;
            /* Menengahkan teks secara horizontal */
            border-radius: 50%;
            /* Membuat badge berbentuk lingkaran */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            /* Bayangan untuk badge */
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
                        <?php foreach ($kategori as $kate) { ?>
                        <li class="nav-item">
                            <a
                                class="nav-link page-scroll"
                                href="<?= base_url('beranda/kategori/'. $kate['id_kategori']) ?>">
                                <?= $kate['nama_kategori'] ?></a>
                        </li>
                        <?php } ?>
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
                        <!-- <li class="checkout">
                            <a href="<?= base_url('beranda/cart')?>">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span id="checkout_items" class="checkout_items"><?= $jml_item ?></span>
                            </a>
                        </li> -->
                    </ul>
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
        <header id="header" class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>"Temukan petualangan tanpa batas di setiap halaman bersama LokaBaca!"</h1>
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </header>
        <!-- end of ex-header -->
        <!-- end of header -->

        <!-- Breadcrumbs -->
        <div class="ex-basic-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs">
                            <a href="<?= base_url('beranda')?>">Home</a>
                            <i class="fa fa-angle-double-right"></i>
                            <span>LokaBaca</span>
                        </div>
                        <!-- end of breadcrumbs -->
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of ex-basic-1 -->
        <!-- end of breadcrumbs -->

        <!-- Privacy Content -->
        <div class="ex-basic-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="text-container">
                           
                        <?= form_open('beranda/add'); ?>
                        <?= form_hidden('id', $konten->id_konten); ?>
                        <?= form_hidden('qty', 1); ?>
                        <?= form_hidden('price', $konten->harga); ?>
                        <?= form_hidden('name', $konten->judul); ?>
                        <?= form_hidden('redirect_page', str_replace('index.php/', '', current_url())); ?>
                            <div class="row">
                                <div class="col-md-2 col-lg-4">
                                    <div class="image-container-small">
                                        <img
                                            class="img-fluid"
                                            style="width:300px;"
                                            src="<?= base_url('upload/konten/'. $konten->foto ) ?>"
                                            alt="alternative">
                                    </div>
                                    <!-- end of image-container-small -->
                                </div>
                                <!-- end of col -->

                                <div class="col-md-8">
                                    <h7><?= $konten->penulis; ?></h7>
                                    <h2 ><?= $konten->judul; ?></h2>
                                    <h7 style="font-size:20px; margin-left:3px;">
                                        Rp.
                                        <?= number_format($konten->harga) ?>
                                    </h7>
                                    <br>
                                    
                                    <a
                                        href="<?php echo base_url(  'beranda/tambah_keranjang/' .$konten->id_konten )?>" class="btn-outline-reg">add to cart</a>
                                    <!-- <a class="btn-outline-reg" href="<?= $konten->link ?>">Beli Sekarang</a>
                                    -->
                                    <br><br>
                                    <div class="format-buku-container">
                                        <h4>Format Buku</h4>
                                        <div class="format-button">
                                            <i class="fas fa-book"></i>
                                            <!-- Ikon buku dari Font Awesome -->
                                            <span class="text"><?= $konten->format_buku ?></span>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <h5 style="color: #000;">Deskripsi</h5>
                                <?php
                                    $keterangan = $konten->keterangan;

                                    if (strpos($keterangan, '.') !== false) {
                                        $kalimat = explode('.', $keterangan);

                                        $jumlahKalimat = count($kalimat);

                                        if ($jumlahKalimat > 1) {
                                            $potongKeterangan = implode('.', array_slice($kalimat, 0, 1)) . '.';
                                            echo "<p>{$potongKeterangan} <a href='#' onclick='toggleKeterangan(event)' style='color: #5f4def;'> Baca selengkapnya</a></p>";

                                            echo "<p id='full-keterangan' style='display:none;'>{$keterangan}</p>";
                                        } else {
                                            echo "<p>{$keterangan}</p>";
                                        }
                                    } else {
                                        echo "<p>{$keterangan}</p>";
                                    }
                                ?>
                                  <br>
                                  <h5>Detail Buku</h5>
                                    <div style="display: flex; justify-content: space-between; align-items: flex-start; font-size: 12px; color: #000;">
                                        <div style="width: 50%;">
                                            <h7>Penerbit</h7>
                                            <p style="font-size: 14px;"><?= $konten->penerbit ?></p>
                                        </div>
                                        <div style="width: 50%; text-align: left;">
                                            <h7>Tanggal Terbit</h7>
                                            <p style="font-size: 14px;"><?= $konten->tanggal_terbit ?></p>
                                        </div>
                                    </div>
                                    <div style="display: flex; justify-content: space-between; align-items: flex-start; font-size: 12px; color: #000;">
                                        <div style="width: 50%;">
                                            <h7>Bahasa</h7>
                                            <p style="font-size: 14px;">Indonesia</p>
                                        </div>
                                        <div style="width: 50%; text-align: left;">
                                            <h7>Berat</h7>
                                            <p style="font-size: 14px;">0.9</p>
                                        </div>
                                    </div>
                                    <div style="display: flex; justify-content: space-between; align-items: flex-start; font-size: 12px; color: #000;">
                                        <div style="width: 50%;">
                                            <h7>ISBN</h7>
                                            <p style="font-size: 14px;"><?= $konten->isbn ?></p>
                                        </div>
                                      
                                    </div>
                                    
                                    <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
                                        <div
                                            class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
                                    </div>
                                </div>
                                
                                <!-- end of row -->
                                <?php echo form_close(); ?> 

                            </div>
                            <!-- end of text-container -->

                            <div class="text-container dark">
                                <p class="testimonial-text">"Setiap halaman yang kamu baca di LokaBaca adalah
                                    langkah kecil menuju wawasan yang lebih luas dan impian yang lebih dekat."</p>
                            </div>
                            <!-- end of text container -->
                            <a class="btn-outline-reg" href="<?= base_url('beranda') ?>">BACK</a>
                        </div>
                        <!-- end of col-->
                    </div>
                    <!-- end of row -->

                </div>
                <!-- end of container -->
            </div>
            <!-- end of ex-basic-2 -->
            <!-- end of privacy content -->

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
                function toggleKeterangan(event) {
                    event.preventDefault(); // Mencegah reload halaman
                    const fullText = document.getElementById('full-keterangan');
                    if (fullText.style.display === 'none') {
                        fullText.style.display = 'block'; // Tampilkan teks penuh
                        event.target.style.display = 'none'; // Sembunyikan link "Baca selengkapnya"
                    }
                }

                // Ambil elemen tombol dan elemen checkout
                const addToCartButton = document.getElementById('addToCart');
                const checkoutItems = document.getElementById('checkout_items');

                // Tambahkan event listener ke tombol
                addToCartButton.addEventListener('click', function (event) {
                    event.preventDefault(); // Mencegah reload halaman jika href="#" digunakan

                    // Ambil jumlah item saat ini
                    let currentItems = parseInt(checkoutItems.textContent);

                    // Tambahkan 1 ke jumlah item
                    currentItems++;

                    // Perbarui teks di elemen checkout_items
                    checkoutItems.textContent = currentItems;
                });

                function addToCart() {
                    // Menampilkan notifikasi alert
                    alert("Item berhasil ditambahkan ke keranjang!");

                }
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