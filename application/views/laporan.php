<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
    <style>
        /* Gaya Umum */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Warna biru muda */
            color: #333;
            margin: 0;
            text-align: center;
            width : 800px;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #004080; /* Warna biru gelap */
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #004080; /* Warna biru gelap */
            color: #ffffff;
            text-transform: uppercase;
            font-size: 12px;
        }

        tr:nth-child(even) {
            background-color: #f2f7ff; /* Warna biru muda untuk baris genap */
        }

        tr:hover {
            background-color: #d0e4ff; /* Warna biru saat hover */
        }

        a {
            color: #0073e6; /* Warna biru untuk link */
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .barcode {
            color: #004080; /* Warna biru gelap untuk kode barang */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>LokaBaca Book Store</h1>
    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Email</th>
                <th>Kode Barang</th>
                <th>Payment</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $total = 0;
                $no = 1;
                foreach ($orders as $aa) { ?>
            <tr>
                <td><?= htmlspecialchars($aa['tanggal']) ?></td>
                <td><?= htmlspecialchars($aa['email']) ?></td>
                <td class="barcode">#<?= htmlspecialchars($aa['barcode']) ?></td>
                <td><?= htmlspecialchars($aa['payment']) ?></td>
                <td>Rp <?= number_format($aa['total'], 0, ',', '.') ?></td>
                
            </tr>
            <?php
                $total = $total + $aa['total'];
                $no++;
             } ?>
            <td colspan=4>Total</td>
            <td>Rp <?= number_format($total, 0, ',', '.') ?></td>
        </tbody>
    </table>
    <script>
    window.print();
</script>
</body>
</html>
