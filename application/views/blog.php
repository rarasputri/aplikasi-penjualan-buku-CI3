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
        <title>Article Details - Tivo - SaaS App HTML Landing Page Template</title>

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

        <!-- Favicon -->
        <link rel="icon" href="images/favicon.png">
    </head>
    <body data-spy="scroll" data-target=".fixed-top">

       <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
    
            <h2><a class="navbar-brand logo-image" href="<?= base_url('beranda') ?>"><?= $konfigurasi->judul_website; ?></a></h2>
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?= base_url('beranda') ?>">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <?php foreach ($kategori as $kate){ ?>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?= base_url('beranda/kategori/'. $kate['id_kategori']) ?>"> <?= $kate['nama_kategori'] ?></a>
                    </li>
                    <?php } ?>
                   
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="<?= base_url('admin/auth') ?>">LOG IN</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
            <!-- end of navigation -->
        <!-- Header -->
            <header id="header" class="ex-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>"Temukan petualangan tanpa batas di setiap halaman bersama LokaBaca!"</h1>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </header> <!-- end of ex-header -->
            <!-- end of header -->


            <!-- Breadcrumbs -->
            <div class="ex-basic-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumbs">
                                <a href="<?= base_url('beranda')?>">Home</a><i class="fa fa-angle-double-right"></i><span>LokaBaca</span>
                            </div> <!-- end of breadcrumbs -->
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div> <!-- end of ex-basic-1 -->
            <!-- end of breadcrumbs -->

      <!-- Privacy Content -->
<div class="ex-basic-2">
    <div class="container">

        <div class="row" style="width:1200px;">
            <div class="col-lg-12">
                <!-- Image Section -->
                <div class="text-container text-center">
                <h2><?= htmlspecialchars($blog->judul, ENT_QUOTES, 'UTF-8'); ?></h2>
                </div>
                <div class="image-container-large text-center">
                    <img
                        class="img-fluid" style="width: 1200px; height: 600px;"
                        src="<?= base_url('upload/blog/' . $blog->foto) ?>"
                        alt="alternative">
                </div>
                <!-- End of Image Section -->

                <!-- Text Section -->
                <div class="text-container text-center">
               
               
                    <p align="left"><?= nl2br(htmlspecialchars($blog->deskripsi)) ?></p>
               
            </div>

                <!-- End of Text Section -->

                <!-- End of Back Button -->
            </div>
            <!-- End of Column -->
        </div>
        <!-- End of Row -->
        
        <!-- Back Button -->
        <div class="text-right mt-3">
            <a class="btn-outline-reg" href="<?= base_url('beranda')?>">BACK</a>
        </div>
    </div>
    </div>
    <!-- End of Container -->


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
        function toggledeskripsi(event) {
            event.preventDefault();
            const fullDeskripsi = document.getElementById('full-deskripsi');
            if (fullDeskripsi.style.display === 'none') {
                fullDeskripsi.style.display = 'block';
            } else {
                fullDeskripsi.style.display = 'none';
            }
        }
        </script>

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