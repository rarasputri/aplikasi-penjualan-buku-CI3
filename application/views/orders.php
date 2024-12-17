
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
            rel="stylesheet">
        <link
            rel="stylesheet"
            href="<?= base_url('assets/payment/') ?>tailwindcss-colors.css">
        <link rel="stylesheet" href="<?= base_url('assets/payment/') ?>style.css">
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
        <title>Payment Page</title>
    </head>
    <style>
         .breadcrumbs span {
            color: #6c757d;
        }
  /* Breadcrumbs */
  .breadcrumbs a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
    <body>
        <!-- Breadcrumbs -->
        <div class="ex-basic-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs">
                            <a href="<?= base_url('beranda')?>">Home</a>
                            <i class="fa fa-angle-double-right"></i>
                            <span>Payment</span>
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

        <!-- start: Payment -->
        <section class="payment-section">
            <div class="container">
                <div class="payment-wrapper">
                    <div class="payment-left">
                        <div class="payment-header">
                            <div class="payment-header-icon">
                                <i class="ri-flashlight-fill"></i>
                            </div>
                            <div class="payment-header-title">LokaBaca Payment</div>
                            <p class="payment-header-description"><?=$this->session->userdata('email')?></p>
                        </div>
                        <div class="payment-content">
                            <div class="payment-body">
                            <div class="payment-plan">
                                <div class="payment-plan-type">Pay</div>
                                <div class="payment-plan-info">
                                    <div class="payment-plan-info-name">No. Rekening Lokabaca</div>
                                    <div class="payment-plan-info-price">(98764526)</div>
                                </div>
                            </div>
                            <br>
                         
                                <div class="payment-summary">
                                    <?php
                                $no = 0;
                                foreach ($this->cart->contents() as $items) {

                                ?>
                                    <div class="payment-summary-item">
                                        <div class="payment-summary-name">
                                            <?= implode(' ', array_slice(explode(' ', $items['name']), 0, 5)) ?>
                                        </div>
                                        <div class="payment-summary-price">Rp<?=number_format($items['price'],0,',','.')?></div>
                                    </div>
                                    <?php } ?>
                                    <div class="payment-summary-divider"></div>
                                    <div class="payment-summary-item payment-summary-total">
                                        <div class="payment-summary-name">Total</div>
                                        <div class="payment-summary-price">
                                            Rp<?= number_format($this->cart->total(),0,',','.') ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-right">
                        <form
                            action="<?=base_url('admin/orders/bayar/')?>"
                            method="post"
                            class="payment-form"
                            enctype="multipart/form-data">
                            <h1 class="payment-title">Pembayaran</h1>
                            <div class="payment-method">
                                <input type="radio" name="payment" value="BRI" id="method-1" checked="checked">
                                <label for="method-1" class="payment-method-item">
                                    <img src="<?= base_url('assets/payment/') ?>images/bri.png" alt="">
                                </label>
                                <input type="radio" name="payment" value="BCA" id="method-2">
                                <label for="method-2" class="payment-method-item">
                                    <img src="<?= base_url('assets/payment/') ?>images/bca2.jpg" alt="">
                                </label>

                                <input type="radio" name="payment" value="MANDIRI" id="method-3" checked="checked">
                                <label for="method-3" class="payment-method-item">
                                    <img src="<?= base_url('assets/payment/') ?>images/mandiri1.png" alt="">
                                </label>
                                <input type="radio" name="payment" value="BNI" id="method-4" checked="checked">
                                <label for="method-4" class="payment-method-item">
                                    <img src="<?= base_url('assets/payment/') ?>images/bni.png" alt="">
                                </label>
                                <input type="hiddden" name="total" value="<?=$this->cart->total()?>">

                            </div>
                            <div class="payment-form-group">
                                <input
                                    type="text"
                                    name="nama_penerima"
                                    placeholder=" " class="
                                    payment-form-control" id="
                                    email" >
                                    <label for="email" class="payment-form-label payment-form-label-required">Nama Penerima</label>
                               
                            </div>
                            <div class="payment-form-group">
                                <input
                                    type="text"
                                    name="no_telp"
                                    placeholder=" " class="
                                    payment-form-control" id="
                                    email" >
                                    <label for="email" class="payment-form-label payment-form-label-required">No Telp</label>
                               
                            </div>
                            <div class="payment-form-group">
                                <input
                                    type="text"
                                    name="alamat"
                                    placeholder=" " class="
                                    payment-form-control" id="
                                    email">
                                <label for="email" class="payment-form-label payment-form-label-required">Alamat</label>
                            </div>
                            <div class="payment-form-group">
                                <input
                                    type="hidden"
                                    name="email"
                                    placeholder=" " class="
                                    payment-form-control" id="
                                    email" value="<?=$this->session->userdata('email')?>"
                                  >
                               
                            </div>

                            <div class="payment-form-group">
                                <input
                                    type="hidden"
                                    name="barcode"
                                    value="<?= substr(microtime(), 2, 6) . '-' . uniqid('', true) . '-' . $this->session->userdata('id_user'); ?>"
                                    class="payment-form-control">
                            </div>


                        <div class="a">
                            <label >Bukti Pembayaran</label>
                            <input type="file" name="foto" placeholder=" " class=" a" id=" email">
                        </div>
                        <?php foreach ($this->cart->contents() as $item): ?>
                            <input type="hidden" name="produk[]" value="<?= htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8') ?>">
                        <?php endforeach; ?>

                        <style>
                            /* Container styling */
                            .a {
                                margin-bottom: 20px;
                                font-family: 'Roboto', sans-serif;
                            }

                            /* Label styling */
                            .a label {
                                display: block;
                                font-size: 16px;
                                font-weight: 500;
                                color: #333;
                                margin-bottom: 10px;
                                letter-spacing: 0.5px;
                            }

                            /* Input file styling */
                            .a input[type="file"] {
                                display: block;
                                width: 100%;
                                padding: 12px 15px;
                                font-size: 14px;
                                color: #555;
                                background-color: #f0f0f0;
                                border: 1px solid #ddd;
                                border-radius: 8px;
                                cursor: pointer;
                                transition: all 0.3s ease-in-out;
                            }

                            /* Hover effect */
                            .a input[type="file"]:hover {
                                background-color: #e6e6e6;
                                border-color: #ccc;
                            }

                            /* Focus effect */
                            .a input[type="file"]:focus {
                                outline: none;
                                border-color: #00aaff;
                                background-color: #fff;
                                box-shadow: 0 0 8px rgba(0, 170, 255, 0.5);
                            }

                            /* Custom button styling for input file */
                            .a input[type="file"]::-webkit-file-upload-button {
                                padding: 10px 20px;
                                background-color: #6366f1;
                                border: none;
                                border-radius: 5px;
                                color: white;
                                font-size: 14px;
                                font-weight: bold;
                                cursor: pointer;
                                transition: background-color 0.3s ease-in-out;
                            }

                            /* Hover effect untuk tombol */
                            .a input[type="file"]::-webkit-file-upload-button:hover {
                                background-color: #008ecc;
                            }
                        </style>

                        <input type="hidden" name="status" value="pending">

                        <button type="submit" class="payment-form-submit-button">
                            <i class="ri-wallet-line"></i>
                            Pay</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Payment -->
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