<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            Detail Orders
        </title>
        <?php require_once('template/css.php')?>

    </head>
    <style>
        .keterangan-col {
            max-width: 350px;
            /* Sesuaikan dengan lebar yang diinginkan */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .keterangan-full {
            white-space: normal;
            max-width: 100%;
            /* Agar dapat diperluas penuh saat 'Baca selengkapnya' diklik */
        }
    </style>
    <body class="g-sidenav-show  bg-gray-200">
        <aside
            class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
            id="sidenav-main">
            <?php require_once('sidebar.php')?>
        </aside>
        <main
            class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <nav
                class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"
                id="navbarBlur"
                navbar-scroll="true">
                <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                            <li class="breadcrumb-item text-sm">
                                <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                            </li>
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Detail Orders</li>
                        </ol>
                        <h6 class="font-weight-bolder mb-0">Detail Orders</h6>
                    </nav>
                </div>
            </div>
            <div class="collapse navbar-collapse mt-sm-0 mt-4 me-md-0 me-sm-6" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group input-group-outline">
                        <label class="form-label">Type here...</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <a href="javascript:;">
                    <a
                        href="<?= base_url('admin/auth/logout') ?>"
                        class="nav-link text-body font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">Log Out</span>
                    </a>
                </a>
        </ul>
    </div>
</nav>

<!-- End Navbar -->
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Detail Orders</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table id="myTable" class="table align-items-center mb-0">
                        <thead>
                            <tr>

                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kode Barang</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Bukti</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Payment</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Struk</th>

                            </tr>
                        </thead>

                        <tbody class="table-border-bottom-0">
                            <?php 
                            $no =1;
                            foreach ($orders as $aa) { ?>
                            <tr>

                            <td class="align-middle text-center"><?= $aa['tanggal'] ?></td>
                                <td class="align-middle text-center"><?= $aa['email'] ?></td>
                                <td class="align-middle text-center" style="color:blue;">#<?= $aa['barcode'] ?></td>
                                <td class="align-middle text-center">Rp
                                    <?= number_format($aa['total'], 0, ',', '.') ?></td>
                                    <td>
    
                                        <a
                                        href="<?= base_url('upload/pembayaran/' . $aa['foto']) ?>"
                                        target="_blank"
                                        style="color: blue; text-decoration: underline;">
                                        <div>Bukti Pembayaran</div>
                                    </a>
                                </td>
                                <td class="align-middle text-center"><?= $aa['payment'] ?></td>
                                <td class="align-middle text-center">
                                    <div class="btn btn-<?=$aa['status'] == 'pending' ? 'danger' : 'success'?>">
                                        <?= $aa['status'] ?>
                                    </div>
                                    <button
                                        type="button"
                                        class="btn btn-sm btn-info"
                                        data-bs-toggle="modal"
                                        data-bs-target="#konten<?= $no; ?>"
                                        fdprocessedid="iw7x2p">
                                        <span class="tf-icons bx bx-edit">Konfirm</span>
                                    </button>

                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="konten<?= $no; ?>"
                                        tabindex="-1"
                                        style="display: none;"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <form
                                                action="<?= base_url('admin/orders/update') ?>"
                                                method="post"
                                                enctype="multipart/form-data">
                                                <input type="hidden" name="nama_foto" value="<?=$aa['foto']?>">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalCenterTitle"></h5>
                                                        <button
                                                            type="button"
                                                            class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"
                                                            fdprocessedid="ax0u6d"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <label class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col sm-10">
                                                                <input
                                                                   
                                                                    id="nameWithTitle"
                                                                    class="form-control"
                                                                    placeholder="Masukkan Nama"
                                                                    name="email"
                                                                    value="<?=$this->session->userdata('email')?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                        <label class="col-sm-2 col-form-label">Alamat</label>
                                                            <div class="col sm-10">
                                                                <input
                                                                  
                                                                    id="nameWithTitle"
                                                                    class="form-control"
                                                                    placeholder="Masukkan Nama"
                                                                    name="alamat"
                                                                    value="<?= $aa['alamat'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                        <label class="col-sm-2 col-form-label">No Telp</label>
                                                            <div class="col sm-10">
                                                                <input
                                                                  
                                                                    id="nameWithTitle"
                                                                    class="form-control"
                                                                    placeholder="Masukkan Nama"
                                                                    name="no_telp"
                                                                    value="<?= $aa['no_telp'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                        <label class="col-sm-2 col-form-label">Nama Penerima</label>
                                                            <div class="col sm-10">
                                                                <input
                                                                  
                                                                    id="nameWithTitle"
                                                                    class="form-control"
                                                                    placeholder="Masukkan Nama"
                                                                    name="nama_penerima"
                                                                    value="<?= $aa['nama_penerima'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                        <label class="col-sm-2 col-form-label">Barcode</label>
                                                            <div class="col sm-10">
                                                                <input
                                                                   
                                                                    id="nameWithTitle"
                                                                    class="form-control"
                                                                    placeholder="Masukkan Nama"
                                                                    name="barcode"
                                                                    value="<?= $aa['barcode'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                        <label class="col-sm-2 col-form-label">Total</label>
                                                            <div class="col sm-10">
                                                                <input
                                                                   
                                                                    id="nameWithTitle"
                                                                    class="form-control"
                                                                    placeholder="Masukkan Nama"
                                                                    name="total"
                                                                    value="<?= $aa['total'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                
                                                        <div class="row">
                                                        <label class="col-sm-2 col-form-label">Produk</label>
                                                        <div class="col sm-10">
                                                                <input
                                                                    id="nameWithTitle"
                                                                    class="form-control"
                                                                    placeholder="Masukkan Nama"
                                                                    name="produk"
                                                                    value="<?= $aa['produk'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="col-sm-2 col-form-label">Payment</label>
                                                            <div class="col sm-10">
                                                                <input
                                                                   
                                                                    id="nameWithTitle"
                                                                    class="form-control"
                                                                    placeholder="Masukkan Nama"
                                                                    name="payment"
                                                                    value="<?= $aa['payment'] ?>">
                                                            </div>
                                                        </div>

                                                        <div value="<?= base_url('upload/pembayaran/' . $aa['foto']) ?>"></div>
                                                        <input type="hidden" name="status" value="Complete">

                                                        <input type="hidden" name="id_order" value="<?= $aa['id_order'] ?>">

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button
                                                            type="button"
                                                            class="btn btn-outline-secondary"
                                                            data-bs-dismiss="modal"
                                                            fdprocessedid="3t093q">Close</button>
                                                        <button type="submit" class="btn btn-success" fdprocessedid="7zqvqu">KONFIRMASI</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </div>
                                <td class="align-middle text-center">
                                    <div class="btn btn-warning"> <a href="<?= base_url('beranda/print'); ?>"
                                    target="_blank">Struk</a></div>
                                </td>

                            </tr>
                            <?php
                        $no++;
                     } ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>

</div>
</main>

<?php require_once('template/js.php')?>
</body>
</html>