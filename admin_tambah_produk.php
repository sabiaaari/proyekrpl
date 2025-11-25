<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - Admin</title>
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
            <li><a href="#"><i class="ph ph-shopping-cart"></i> Kasir</a></li>
            <li><a href="#"><i class="ph ph-notebook"></i> Laporan Penjualan</a></li>
            <li style="margin-top: auto;">
                <a href="login.php"><i class="ph ph-sign-out"></i> Keluar</a>
            </li>
        </ul>
    </nav>

    <main class="admin-content">
        
        <div class="admin-page-header">
            <h1 style="font-size: 1.8rem;">Tambah Produk Baru</h1>
        </div>

        <div class="form-container">
            <h3 style="margin-bottom: 30px; font-weight: 500;">Buat produk baru dengan mengisi seluruh informasi yang diperlukan di bawah ini</h3>

            <form onsubmit="event.preventDefault(); showSuccessModal();">
                
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" class="form-input" required>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-input" required>
                </div>

                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" class="form-input" required>
                </div>

                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-input">
                        <option>Pilih Kategori</option>
                        <option>Alat Kebersihan</option>
                        <option>Kerajinan Tangan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Upload Gambar Produk</label>
                    <div class="image-upload-box">
                        <i class="ph ph-image" style="font-size: 3rem;"></i>
                    </div>
                </div>

                <div style="text-align: center; margin-top: 40px;">
                    <button type="submit" class="btn-green-add" style="display: inline-flex; cursor: pointer;">
                        + Tambah Produk
                    </button>
                </div>

            </form>
        </div>

    </main>

    <div class="modal-overlay" id="successModal">
        <div class="modal-box">
            <div class="success-icon">
                <i class="ph ph-check"></i>
            </div>
            
            <h2 class="modal-title">Data barang berhasil ditambahkan</h2>
            
            <button class="btn-modal-blue" onclick="redirectToProductList()">Konfirmasi</button>
        </div>
    </div>

    <script>
        function showSuccessModal() {
            document.getElementById('successModal').style.display = 'flex';
        }

        function redirectToProductList() {
            // Arahkan kembali ke halaman list produk setelah konfirmasi
            window.location.href = 'admin_produk.php';
        }
    </script>

</body>
</html>