<?php
// Data Dummy Produk untuk Grid
$products = [
    ["name" => "Sapu Lidi", "price" => 10000, "img" => "sapu.jpg"],
    ["name" => "Pengki", "price" => 10000, "img" => "pengki.jpg"],
    ["name" => "Keset Anyaman", "price" => 10000, "img" => "keset.jpg"],
    ["name" => "Serokan Air", "price" => 10000, "img" => "serokan.jpg"],
    ["name" => "Alat Pel", "price" => 10000, "img" => "alatpel.jpg"],
    ["name" => "Sapu Plastik", "price" => 10000, "img" => "sapu_plastik.jpg"],
    ["name" => "Keranjang Anyam", "price" => 10000, "img" => "keranjang.jpg"],
    ["name" => "Sikat Toilet", "price" => 10000, "img" => "sikat.jpg"],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pembayaran - Admin</title>
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
        
        <div class="admin-page-header">
            <h1 style="font-size: 1.8rem;">Tambah Pembayaran</h1>
        </div>

        <div class="pos-layout">
            
            <div class="pos-product-grid">
                <?php foreach($products as $p): ?>
                <div class="pos-card">
                    <div class="pos-img">
                        <img src="images/<?php echo $p['img']; ?>" onerror="this.src='https://via.placeholder.com/80'">
                    </div>
                    <div class="pos-info">
                        <h4><?php echo $p['name']; ?></h4>
                        <span>Rp. <?php echo number_format($p['price'], 0, ',', '.'); ?></span>
                    </div>
                    <div class="pos-footer">
                        <span></span>
                        <button class="btn-plus-black" onclick="addToCart('<?php echo $p['name']; ?>', <?php echo $p['price']; ?>)">
                            <i class="ph ph-plus"></i>
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="receipt-box">
                <div class="receipt-header">
                    <h2 style="font-size: 1.4rem;">PT. Adang Motekar</h2>
                </div>
                
                <div class="receipt-info-row">
                    <span>Ila</span>
                    <span>#7</span>
                </div>

                <div class="receipt-items" id="cartItems">
                    <div class="receipt-item-row">
                        <span>Keset Anyaman (x2)</span>
                        <span>Rp. 20.000</span>
                    </div>
                </div>

                <div class="receipt-divider"></div>

                <div class="receipt-summary-row receipt-total">
                    <span>Total</span>
                    <span id="totalDisplay">Rp. 20.000</span>
                </div>
                <div class="receipt-summary-row">
                    <span>Jumlah Uang</span>
                    <span>Rp. 150.000</span> </div>
                <div class="receipt-summary-row">
                    <span>Kembali</span>
                    <span id="kembaliDisplay">Rp. 130.000</span>
                </div>

                <div class="receipt-footer">
                    TERIMA KASIH
                </div>

                <button onclick="simpanTransaksi()" class="btn-full" style="margin-top: 20px; border-radius: 10px;">
                    Simpan & Cetak
                </button>
            </div>

        </div>

    </main>

    <script>
        let totalBelanja = 20000; // Mulai dari 20rb karena ada item default

        function addToCart(nama, harga) {
            // 1. Tambah item ke tampilan struk
            const container = document.getElementById('cartItems');
            const itemHTML = `
                <div class="receipt-item-row">
                    <span>${nama}</span>
                    <span>Rp. ${harga.toLocaleString('id-ID')}</span>
                </div>
            `;
            container.innerHTML += itemHTML;

            // 2. Hitung Total
            totalBelanja += harga;
            
            // 3. Update Tampilan Total
            document.getElementById('totalDisplay').innerText = "Rp. " + totalBelanja.toLocaleString('id-ID');
            
            // 4. Update Kembali (Asumsi uang 150.000 tetap)
            let kembalian = 150000 - totalBelanja;
            document.getElementById('kembaliDisplay').innerText = "Rp. " + kembalian.toLocaleString('id-ID');
        }

        function simpanTransaksi() {
            alert("Transaksi Berhasil Disimpan!");
            window.location.href = "admin_kasir.php"; // Balik ke halaman tabel
        }
    </script>

</body>
</html>