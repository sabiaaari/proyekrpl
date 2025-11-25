<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir - Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="admin-body">

    <nav class="sidebar">
        <div class="sidebar-brand">
            <h2>Adang Motekar</h2>
            <span>Admin Panel</span>
        </div>
        <ul class="sidebar-menu">
            <li><a href="admin_dashboard.php"><i class="ph ph-squares-four"></i> Dashboard</a></li>
            <li><a href="admin_produk.php"><i class="ph ph-package"></i> Manajemen Produk</a></li>
            <li><a href="admin_kasir.php" class="active"><i class="ph ph-shopping-cart"></i> Kasir</a></li>
            <li><a href="admin_laporan.php"><i class="ph ph-notebook"></i> Laporan Penjualan</a></li>
            <li style="margin-top: auto;">
                <a href="login.php"><i class="ph ph-sign-out"></i> Keluar</a>
            </li>
        </ul>
    </nav>

    <main class="admin-content">
        
        <div class="admin-header" style="margin-bottom: 20px;">
            <h1 style="font-size: 2rem;">Kasir</h1>
            <a href="admin_tambah_pembayaran.php" class="btn-green-add">
                <i class="ph ph-plus"></i> Tambah Pembayaran
            </a>
        </div>

        <h3 style="margin-bottom: 20px; font-weight: 500;">Riwayat Pembayaran</h3>

        <div class="filter-bar">
            <div class="filter-group">
                <select class="btn-filter">
                    <option>Pilih nama hari...</option>
                    <option>Senin</option>
                    <option>Selasa</option>
                </select>
                <button class="btn-filter">Bulan Sekarang</button>
                <button class="btn-filter">2025</button>
                <button class="btn-dark-green">Tampilkan Laporan</button>
            </div>
            
            <button class="btn-excel">
                <i class="ph ph-microsoft-excel-logo"></i> Ekspor ke Excel
            </button>
        </div>

        <div class="table-container" style="padding: 0; box-shadow: none; border: none; background: transparent;">
            <div style="background: white; padding: 20px; border-radius: 10px; border: 1px solid #ccc;">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Transaksi</th>
                            <th>Nama Pembeli</th>
                            <th>Produk</th>
                            <th>Jumlah Beli</th>
                            <th>Harga</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>01/01/2025</td>
                            <td>Adam</td>
                            <td>Keset Anyaman</td>
                            <td>20</td>
                            <td>10.000</td>
                            <td>200.000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>01/01/2025</td>
                            <td>Sipa</td>
                            <td>Alat Pel</td>
                            <td>15</td>
                            <td>10.000</td>
                            <td>150.000</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>01/01/2025</td>
                            <td>Sixta</td>
                            <td>Sapu Lidi</td>
                            <td>10</td>
                            <td>10.000</td>
                            <td>100.000</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>01/01/2025</td>
                            <td>Syaila</td>
                            <td>Pengki</td>
                            <td>9</td>
                            <td>10.000</td>
                            <td>90.000</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>01/01/2025</td>
                            <td>Yahya</td>
                            <td>Serokan Air</td>
                            <td>8</td>
                            <td>10.000</td>
                            <td>80.000</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>01/01/2025</td>
                            <td>Rophile</td>
                            <td>Sapu Plastik</td>
                            <td>7</td>
                            <td>10.000</td>
                            <td>70.000</td>
                        </tr>
                    </tbody>
                </table>
                
                <div style="text-align: right; margin-top: 20px; font-weight: 700; font-size: 1.1rem;">
                    Total Pendapatan Hari ini: 690.000
                </div>
            </div>

            <div class="pagination">
                <a href="#" class="page-item"><i class="ph ph-caret-left"></i></a>
                <a href="#" class="page-item">1</a>
                <a href="#" class="page-item active">2</a>
                <a href="#" class="page-item">3</a>
                <a href="#" class="page-item">...</a>
                <a href="#" class="page-item">15</a>
                <a href="#" class="page-item"><i class="ph ph-caret-right"></i></a>
            </div>
        </div>

    </main>
</body>
</html>