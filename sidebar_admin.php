<nav class="sidebar" id="sidebar">
    <div class="sidebar-brand">
        <h2 id="brand-text">Adang Motekar</h2>
        <span id="brand-sub">Admin Panel</span>
    </div>
    
    <ul class="sidebar-menu">
        <li>
            <a href="index.php" class="<?php echo ($page == 'dashboard') ? 'active' : ''; ?>">
                <i class="ph ph-squares-four"></i> 
                <span class="menu-text">Dashboard</span>
            </a>
        </li>
        
        <li>
            <a href="produk.php" class="<?php echo ($page == 'produk') ? 'active' : ''; ?>">
                <i class="ph ph-package"></i> 
                <span class="menu-text">Manajemen Produk</span>
            </a>
        </li>
        
        <li>
            <a href="kasir.php" class="<?php echo ($page == 'kasir') ? 'active' : ''; ?>">
                <i class="ph ph-shopping-cart"></i> 
                <span class="menu-text">Kasir</span>
            </a>
        </li>
        
        <li>
            <a href="laporan.php" class="<?php echo ($page == 'laporan') ? 'active' : ''; ?>">
                <i class="ph ph-notebook"></i> 
                <span class="menu-text">Laporan Penjualan</span>
            </a>
        </li>
        
        <li style="margin-top: auto;">
            <a href="../login.php">
                <i class="ph ph-sign-out"></i> 
                <span class="menu-text">Keluar</span>
            </a>
        </li>
    </ul>
</nav>