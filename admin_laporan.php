<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan - Admin</title>
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
            <li><a href="admin_kasir.php"><i class="ph ph-shopping-cart"></i> Kasir</a></li>
            <li><a href="admin_laporan.php" class="active"><i class="ph ph-notebook"></i> Laporan Penjualan</a></li>
            
            <li style="margin-top: auto;">
                <a href="login.php"><i class="ph ph-sign-out"></i> Keluar</a>
            </li>
        </ul>
    </nav>

    <main class="admin-content">
        
        <header class="admin-header">
            <i class="ph ph-list" style="font-size: 2rem; cursor: pointer;"></i>
            <div class="admin-profile">
                <span style="font-weight: 600; font-size: 1.1rem;">Admin</span>
                <div class="admin-avatar"></div>
            </div>
        </header>

        <div class="report-grid">
            
            <div class="stat-card">
                <div class="stat-header">
                    Produk Terjual <i class="ph ph-package" style="color:#aaa;"></i>
                </div>
                <div class="stat-number">550</div>
                <span class="stat-badge badge-blue">6.65%</span> 
                <span class="stat-desc">sejak minggu lalu</span>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    Total Penjualan <i class="ph ph-currency-dollar" style="color:#aaa;"></i>
                </div>
                <div class="stat-number">Rp. 20.000.000</div>
                <span class="stat-badge badge-gray">6.65%</span> 
                <span class="stat-desc">sejak minggu lalu</span>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    Total Order <i class="ph ph-shopping-cart" style="color:#aaa;"></i>
                </div>
                <div class="stat-number">298</div>
                <span class="stat-badge badge-green">6.65%</span> 
                <span class="stat-desc">sejak minggu lalu</span>
            </div>

        </div>

        <div class="report-container">
            
            <div class="report-header">
                <div>
                    <h2 style="font-size: 1.5rem; color: #1E4D2B;">Riwayat Transaksi</h2>
                    <p style="color: #888;">Daftar Lengkap Transaksi Penjualan</p>
                </div>
                <button class="btn-export">Ekspor PDF</button>
            </div>

            <table class="transaction-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tanggal</th>
                        <th>Kostumer</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#001</td>
                        <td>23/11/25</td>
                        <td>zero</td>
                        <td>Rp. 20.000</td>
                        <td><span class="badge-status status-pending">Pending</span></td>
                    </tr>
                    
                    <tr>
                        <td>#002</td>
                        <td>23/11/25</td>
                        <td>loys</td>
                        <td>Rp. 20.000</td>
                        <td><span class="badge-status status-pending">Pending</span></td>
                    </tr>

                    <tr>
                        <td>#003</td>
                        <td>23/11/25</td>
                        <td>azizah</td>
                        <td>Rp. 30.000</td>
                        <td><span class="badge-status status-lunas">Lunas</span></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </main>

</body>
</html>