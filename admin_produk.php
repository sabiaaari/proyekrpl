<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produk - Admin</title>
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
            <li><a href="admin_produk.php" class="active"><i class="ph ph-package"></i> Manajemen Produk</a></li>
            <li><a href="admin_kasir.php"><i class="ph ph-shopping-cart"></i> Kasir</a></li>
            <li><a href="admin_laporan.php"><i class="ph ph-notebook"></i> Laporan Penjualan</a></li>
            <li style="margin-top: auto;">
                <a href="login.php"><i class="ph ph-sign-out"></i> Keluar</a>
            </li>
        </ul>
    </nav>

    <main class="admin-content">
        
        <div class="admin-page-header">
            <h1 style="font-size: 1.8rem;">Manajemen Produk</h1>
            <a href="admin_tambah_produk.php" class="btn-green-add">
                <i class="ph ph-plus"></i> Tambah Produk
            </a>
        </div>

        <h3 style="margin-bottom: 20px;">Kelola katalog produk Anda</h3>

        <div class="product-layout">
            
            <div class="stats-column">
                <div class="stat-box-simple">
                    <h3>Total Produk</h3>
                    <div class="number">16</div>
                    <span>Aktif dalam katalog</span>
                </div>
                <div class="stat-box-simple">
                    <h3>Produk Terjual</h3>
                    <div class="number">57</div>
                    <span>Aktif dalam katalog</span>
                </div>
                <div class="stat-box-simple">
                    <h3>Stok Habis</h3>
                    <div class="number">3</div>
                    <span>Aktif dalam katalog</span>
                </div>
            </div>

            <div class="table-container">
                <h2 style="font-size: 1.3rem; margin-bottom: 10px;">Produk Terlaris</h2>
                <p style="color: #666; font-size: 0.9rem;">Produk dengan performa terbaik</p>
                
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Terjual</th>
                            <th>Aksi</th> </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Keset Anyaman</td>
                            <td>Rp. 10.000</td>
                            <td>297</td>
                            <td><div class="btn-delete-icon" onclick="openDeleteModal()"><i class="ph ph-trash"></i></div></td>
                        </tr>
                        <tr>
                            <td>Alat Pel</td>
                            <td>Rp. 10.000</td>
                            <td>297</td>
                            <td><div class="btn-delete-icon" onclick="openDeleteModal()"><i class="ph ph-trash"></i></div></td>
                        </tr>
                        <tr>
                            <td>Sapu Lidi</td>
                            <td>Rp. 10.000</td>
                            <td>297</td>
                            <td><div class="btn-delete-icon" onclick="openDeleteModal()"><i class="ph ph-trash"></i></div></td>
                        </tr>
                        <tr>
                            <td>Pengki</td>
                            <td>Rp. 10.000</td>
                            <td>297</td>
                            <td><div class="btn-delete-icon" onclick="openDeleteModal()"><i class="ph ph-trash"></i></div></td>
                        </tr>
                         <tr>
                            <td>Serokan Air</td>
                            <td>Rp. 10.000</td>
                            <td>297</td>
                            <td><div class="btn-delete-icon" onclick="openDeleteModal()"><i class="ph ph-trash"></i></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

    <div class="modal-overlay" id="deleteModal">
        <div class="modal-box">
            <div class="warning-icon">
                <i class="ph ph-warning-triangle"></i>
            </div>
            
            <h2 class="modal-title">Apakah anda yakin ingin menghapus data barang ini?</h2>
            
            <div class="modal-actions">
                <button class="btn-modal-red" onclick="closeDeleteModal()">Hapus</button>
                
                <button class="btn-modal-blue" onclick="closeDeleteModal()">Batal</button>
            </div>
        </div>
    </div>

    <script>
        function openDeleteModal() {
            document.getElementById('deleteModal').style.display = 'flex';
        }

        function closeDeleteModal() {
            document.getElementById('deleteModal').style.display = 'none';
        }
    </script>

</body>
</html>