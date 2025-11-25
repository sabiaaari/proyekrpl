<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adang Motekar - Admin Dashboard</title>
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
            <li><a href="admin_dashboard.php" class="active"><i class="ph ph-squares-four"></i> Dashboard</a></li>
            <li><a href="admin_produk.php"><i class="ph ph-package"></i> Manajemen Produk</a></li>
            <li><a href="admin_kasir.php"><i class="ph ph-shopping-cart"></i> Kasir</a></li>
            <li><a href="admin_laporan.php"><i class="ph ph-notebook"></i> Laporan Penjualan</a></li>
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
                <div class="admin-avatar"></div> </div>
        </header>

        <h1 style="margin-bottom: 25px; font-size: 1.5rem;">Dashboard Analisis</h1>

        <div class="dashboard-grid">
            
            <div class="stat-card">
                <div class="stat-header">
                    Total Penjualan <i class="ph ph-currency-dollar"></i>
                </div>
                <div class="stat-number">Rp. 20.000.000</div>
                <span class="stat-badge badge-gray">6.65%</span> 
                <span class="stat-desc">sejak minggu lalu</span>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    Produk Terjual <i class="ph ph-package"></i>
                </div>
                <div class="stat-number">550</div>
                <span class="stat-badge badge-blue">6.65%</span> 
                <span class="stat-desc">sejak minggu lalu</span>
            </div>

            <div class="chart-container">
                <div style="display:flex; justify-content:space-between; margin-bottom: 20px;">
                    <h3>Perkembangan</h3>
                    <span style="font-size: 0.8rem; color:#888;">tahunan <i class="ph ph-caret-down"></i></span>
                </div>
                <img src="https://via.placeholder.com/400x150/F5F7FA/AAAAAA?text=Grafik+Penjualan" style="width: 100%; border-radius: 10px;">
            </div>

        </div>

        <div class="dashboard-grid">
            
            <div class="stat-card">
                <div class="stat-header">
                    Total Order <i class="ph ph-shopping-cart"></i>
                </div>
                <div class="stat-number">298</div>
                <span class="stat-badge badge-green">6.65%</span> 
                <span class="stat-desc">sejak minggu lalu</span>
            </div>

            <div class="stat-card goal-card">
                <div style="margin-bottom: 10px; font-weight:500;">Quarter goal</div>
                <div class="donut-chart">
                    <span class="donut-text">84%</span>
                </div>
                <span class="stat-desc" style="margin-top: 10px;">All goals →</span>
            </div>

            <div class="stat-card" style="display:flex; flex-direction:column; justify-content:space-around;">
                <div>
                    <span class="stat-desc">Bulan Terbaik</span>
                    <h3 style="color: #D97706;">November <span style="font-size:0.8rem; font-weight:400;">2025</span></h3>
                </div>
                <div>
                    <span class="stat-desc">Tahun Terbaik</span>
                    <h3 style="color: #D97706;">2026</h3>
                    <span class="stat-desc">96rb terjual sejauh ini</span>
                </div>
            </div>

             <div class="stat-card">
                <span class="stat-desc">Pembeli Teratas</span>
                <div style="margin-top: 15px; display: flex; align-items:center; gap: 10px;">
                    <img src="images/profile.jpg" style="width:40px; height:40px; border-radius:50%; object-fit:cover;" onerror="this.src='https://via.placeholder.com/40'">
                    <span style="font-weight:600;">Sixta</span>
                </div>
            </div>
        </div>

        <h2 style="margin-bottom: 20px;">Produk Terlaris</h2>
        
        <div class="bottom-section">
            <div style="display: flex; gap: 20px;">
                
                <div class="shop-card" style="flex:1; border: 1px solid #ccc;">
                    <div class="shop-img" style="height: 150px;">
                        <img src="images/bantal.jpg" onerror="this.src='https://via.placeholder.com/150'">
                    </div>
                    <div class="shop-info">
                        <h3>Bantal Kapuk</h3>
                        <div class="btn-plus"><i class="ph ph-plus"></i></div>
                    </div>
                </div>

                <div class="shop-card" style="flex:1; border: 1px solid #ccc;">
                    <div class="shop-img" style="height: 150px;">
                        <img src="images/keranjang.jpg" onerror="this.src='https://via.placeholder.com/150'">
                    </div>
                    <div class="shop-info">
                        <div style="text-align:left;">
                            <h3>Keranjang Buah</h3>
                            <span style="font-size:0.8rem;">Rp. 10.000</span>
                        </div>
                        <div class="btn-plus"><i class="ph ph-plus"></i></div>
                    </div>
                </div>

                 <div class="shop-card" style="flex:1; border: 1px solid #ccc;">
                    <div class="shop-img" style="height: 150px;">
                        <img src="images/parcel.jpg" onerror="this.src='https://via.placeholder.com/150'">
                    </div>
                    <div class="shop-info">
                        <div style="text-align:left;">
                            <h3>Keranjang Parcel</h3>
                            <span style="font-size:0.8rem;">Rp. 10.000</span>
                        </div>
                        <div class="btn-plus"><i class="ph ph-plus"></i></div>
                    </div>
                </div>

            </div>

            <div class="calendar-card">
                <div style="display:flex; justify-content:space-between; margin-bottom:15px;">
                    <i class="ph ph-caret-left"></i>
                    <span style="font-weight:600;">March 2022</span>
                    <i class="ph ph-caret-right"></i>
                </div>
                <table class="calendar-table">
                    <thead>
                        <tr><th>SUN</th><th>MON</th><th>TUE</th><th>WED</th><th>THU</th><th>FRI</th><th>SAT</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>29</td><td>30</td><td>31</td><td>1</td><td>2</td><td>3</td><td>4</td></tr>
                        <tr><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td></tr>
                        <tr>
                            <td>12</td><td>13</td><td>14</td>
                            <td class="purple-range" style="border-radius: 15px 0 0 15px;">15</td>
                            <td class="purple-range">16</td>
                            <td class="purple-range">17</td>
                            <td class="purple-range" style="border-radius: 0 15px 15px 0;">18</td>
                        </tr>
                        <tr><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td></tr>
                        <tr><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td><td>1</td></tr>
                    </tbody>
                </table>
            </div>

        </div>

    </main>

</body>
</html>