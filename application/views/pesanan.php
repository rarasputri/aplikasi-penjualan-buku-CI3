<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Saya</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Body Styling */
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f4f8fb;
            color: #333;
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

        /* Title Styling */
        h3 {
            color: #007bff;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Tabs Styling */
        .nav-tabs .nav-link {
            color: #007bff;
            font-weight: bold;
            border-radius: 50px;
            transition: all 0.3s;
        }

        .nav-tabs .nav-link.active {
            background-color: #007bff;
            color: white;
        }

        .nav-tabs .nav-link:hover {
            background-color: #e6f3ff;
        }

        /* Table Styling */
        .table {
            background-color: rgba(255, 255, 255, 0.7); /* Transparan */
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #007bff;
            color: white;
        }

        tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.1); /* Biru lembut saat hover */
        }

        /* Button Styling */
        .btn-status {
            font-size: 0.9rem;
            padding: 6px 12px;
            border-radius: 20px;
        }

        .btn-danger {
            background-color: #e63946;
            border: none;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-warning a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <br>
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
         <br>
    <!-- Main Content -->
    <div class="container mt-4 mb-5">
        <h3 class="text-start">Pesanan Saya</h3>

        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs justify-content-start mb-4" id="orderTabs" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" id="in-process-tab" data-bs-toggle="tab" data-bs-target="#in-process" type="button" role="tab">Diproses</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="completed-tab" data-bs-toggle="tab" data-bs-target="#completed" type="button" role="tab">Selesai</button>
            </li>
        </ul>

        <!-- Tabs Content -->
        <div class="tab-content" id="orderTabsContent">
            <!-- Diproses -->
            <div class="tab-pane fade show active" id="in-process" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Email</th>
                                <th>Produk</th>
                                <th>Barcode</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($orders as $aa) { 
                                if ($aa['status'] == 'pending') { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $aa['email']; ?></td>
                                    <td><?= $aa['produk']; ?></td>
                                    <td><a href="#" class="text-primary fw-bold">#<?= $aa['barcode']; ?></a></td>
                                    <td>Rp <?= number_format($aa['total'], 0, ',', '.'); ?></td>
                                    <td><span class="btn btn-danger btn-status"><?= ucfirst($aa['status']); ?></span></td>
                                </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Selesai -->
            <div class="tab-pane fade" id="completed" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Email</th>
                                <th>Produk</th>
                                <th>Barcode</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Struk</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($orders as $aa) { 
                                if ($aa['status'] == 'Complete') { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $aa['email']; ?></td>
                                    <td><?= $aa['produk']; ?></td>
                                    <td><a href="#" class="text-primary fw-bold">#<?= $aa['barcode']; ?></a></td>
                                    <td>Rp <?= number_format($aa['total'], 0, ',', '.'); ?></td>
                                    <td><span class="btn btn-success btn-status"><?= ucfirst($aa['status']); ?></span></td>
                                    <td>
                                        <button class="btn btn-warning btn-status">
                                            <a href="<?= base_url('beranda/print'); ?>" target="_blank">Struk</a>
                                        </button>
                                    </td>
                                </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
