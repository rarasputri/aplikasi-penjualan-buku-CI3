<!-- <div class="container-fluid"> <h4>Keranjang Belanja</h4> <table
class="table table-bordered table-striped table-hover"> <tr> <th>NO</th>
<th>Nama Produk</th> <th>Jumlah</th> <th>Harga</th> <th>Sub-Total</th> </tr>
<?php $no = 1; foreach ($this->cart->contents() as $items) : ?> <tr> <td><?php
echo $no++ ?></td> <td><?php echo $items['name']?></td> <td><?php echo
$items['qty']?></td> <td>RP. <?php echo
number_format($items['price'],0,',','.')?></td> <td>Rp. <?php echo
number_format($items['subtotal'],0,',','.')?></td> </tr> <?php endforeach; ?>
<tr> <td colspan="4"></td> <td>Rp. <?php echo
number_format($this->cart->total(),0,',','.')?></td> </tr> </table> <div
align="left"> <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>"><div
class="btn btn-sm btn-danger">Hapus</div></a> <a href="<?php echo
base_url('dashboard/index') ?>"><div class="btn btn-sm btn-warning">Lanjutkan
Belanja</div></a> </div> <div class="row g-4 justify-content-end"> <div
class="col-8"></div> <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4"> <div
class="bg-light rounded"> <div class="p-4"> <h1 class="display-6 mb-4">Cart
<span class="fw-normal">Total</span></h1> <div class="d-flex
justify-content-between mb-4"> <h5 class="mb-0 me-4">Subtotal:</h5> <td>Rp.
<?php echo number_format($items['subtotal'],0,',','.')?></td> </div> <div
class="py-4 mb-4 border-top border-bottom d-flex justify-content-between"> <h5
class="mb-0 ps-4 me-4">Total</h5> <td>Rp. <?php echo
number_format($this->cart->total(),0,',','.')?></td> </div> <a href="<?php echo
base_url('dashboard/transaction') ?>" button class="btn border-secondary
rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4"
type="submit">Checkout</button></a> </div> </div> </div> </div> </div> </div>
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Keranjang Belanja</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="styles.css">
        <!-- Tambahkan file CSS eksternal jika diperlukan -->
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
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f9f9f9;
            }

            .cart-container {
                max-width: 1200px;
                margin: 20px auto;
                padding: 20px;
                background: #fff;
                border-radius: 8px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            h1 {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 20px;
            }

            .cart {
                display: flex;
                gap: 20px;
            }

            .cart-items {
                flex: 2;
            }

            .cart-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding-bottom: 10px;
                border-bottom: 1px solid #ddd;
                margin-bottom: 10px;
            }

            .btn-clear {
                background: none;
                border: none;
                color: #888;
                cursor: pointer;
                font-size: 14px;
            }

            .store h3 {
                font-size: 18px;
                margin: 10px 0;
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .cart-item {
                display: flex;
                align-items: center;
                gap: 15px;
                padding: 15px 0;
                border-bottom: 1px solid #ddd;
            }

            .cart-item img {
                width: 80px;
                height: auto;
                border-radius: 4px;
            }

            .item-info {
                flex: 1;
            }

            .badge {
                display: inline-block;
                background: #D9EAFD;
                padding: 5px 10px;
                border-radius: 4px;
                font-size: 12px;
                color: blue;
                margin-bottom: 5px;
            }

            .price {
                font-size: 16px;
                font-weight: bold;
            }

            .old-price {
                text-decoration: line-through;
                font-size: 14px;
                color: #888;
                margin-left: 10px;
            }

            .discount {
                font-size: 14px;
                color: #d32f2f;
                margin-left: 10px;
                background: #ffecec;
                padding: 2px 6px;
                border-radius: 4px;
            }

            .actions {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .quantity {
                display: flex;
                align-items: center;
                gap: 5px;
            }

            .quantity span {
                font-size: 16px;
                font-weight: bold;
            }

            .btn-remove {
                background: none;
                border: none;
                color: #888;
                cursor: pointer;
                font-size: 18px;
            }

            .cart-summary {
                flex: 1;
                padding: 20px;
                background: #f8f9fa;
                border-radius: 15px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            .cart-summary h2 {
                font-size: 18px;
                margin-bottom: 15px;
            }

            .summary-row {
                display: flex;
                justify-content: space-between;
                font-size: 14px;
                margin-bottom: 10px;
            }

            .discount-price {
                color: #d32f2f;
            }

            .total {
                font-weight: bold;
                font-size: 16px;
            }
            .btn-checkout {
                width: 100%;
                display: inline-block;
                background-color: #007bff;
                /* Sesuaikan dengan warna tombol */
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                border: none;
                border-radius: 5px;
                /* Opsional untuk membuat sudut membulat */
                font-size: 16px;
                /* Sesuaikan ukuran teks */
                cursor: pointer;
                text-align: center;
            }

            .btn-checkout:hover {
                background-color: #0056b3;
                /* Warna saat hover */
            }

            .btn-update {
                width: 30%;
                display: inline-block;
                background-color: #007bff;
                /* Sesuaikan dengan warna tombol */
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                border: none;
                border-radius: 5px;
                /* Opsional untuk membuat sudut membulat */
                font-size: 16px;
                /* Sesuaikan ukuran teks */
                cursor: pointer;
                text-align: center;
            }

            .btn-update:hover {
                background-color: #0056b3;
                /* Warna saat hover */
            }
            .quantity-input {
                width: 60px;
                /* Atur lebar input agar tidak terlalu lebar */
                padding: 5px;
                /* Berikan padding agar tampilan lebih nyaman */
                font-size: 14px;
                /* Ukuran teks */
                text-align: center;
                /* Pusatkan angka di dalam input */
                border: 1px solid #ddd;
                /* Berikan border agar lebih elegan */
                border-radius: 4px;
                /* Membuat sudut sedikit membulat */
            }

            .quantity {
                display: flex;
                align-items: center;
                gap: 5px;
                /* Jarak antara elemen */
            }

            /* Breadcrumbs */
            .breadcrumbs a {
                color: #007bff;
                text-decoration: none;
                font-weight: bold;
            }
            .breadcrumbs span {
                color: #6c757d;
            }
        </style>
    </head>
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
        <div class="cart-container">
            <h1>Keranjang</h1>
            <div class="cart">

                <div class="cart-items">
                    <div class="cart-header">

                        <label for="select-all">Semua</label>
                        <button class="btn-clear">
                            <a href="<?php echo base_url('beranda/hapus_keranjang') ?>">
                                <i class="fa fa-trash"></i>
                            </a>
                        </button>
                    </div>
                    <?php echo form_open('beranda/update'); ?>

                    <?php
                $no = 1;
                foreach ($this->cart->contents() as $items) : ?>

                    <div class="store">

                        <h3>
                            <i class="fa fa-store"></i>
                            LokaBaca</h3>
                        <div class="cart-item">

                            <!-- <img src="<?= base_url('upload/konten/'. $konten['foto'] )?>" alt="Item">
                            -->
                            <div class="item-info">
                                <span class="badge">Soft Cover</span>
                                <p><?php echo $items['name']?></p>
                                <p class="price">Rp<?= number_format($items['price'],0,',','.')?>
                                </p>
                            </div>
                            <div class="actions">
                                <button class="btn-remove">
                                    <a href="<?= base_url('beranda/delete/'. $items['rowid'])?>">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </button>
                                <div class="quantity">
                                    <?php 
                                echo form_input(array(
                                    'name' => $no.'[qty]', 
                                    'value' => $items['qty'], 
                                    'maxlength' => '3', 
                                    'min' => '0', 
                                    'size' => '2', 
                                    'type' => 'number', 
                                    'class' => 'form-control quantity-input text-center'
                                )); 
                                ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <br>
                    <button class="btn-update" type="submit">Update</button>
                    <?php echo form_close(); ?>
                </form>
            </div>

            <!-- Ringkasan -->
            <div class="cart-summary">
                <h2>Ringkasan Keranjang</h2>
                <div class="summary-row">
                    <span>Total Harga (
                        <?= $this->cart->total_items(); ?>
                        barang )</span>
                    <span>Rp.<?php echo number_format($this->cart->total(),0,',','.')?></span>
                </div>

                <hr>
                <div class="summary-row total">
                    <h3>Subtotal</h3>
                    <h4>Rp.
                        <?php echo number_format($this->cart->total(),0,',','.')?></h4>
                </div>
                <a class="btn-checkout" href="<?= base_url('beranda/orders') ?>">Checkout</a>

            </div>

        </div>
    </div>
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