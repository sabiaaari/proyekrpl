<?php 
$page = 'profil'; 
include 'header.php'; 
?>

<div class="auth-container">
    <div class="page-header">
        <a href="index.php" class="back-arrow"><i class="ph ph-caret-left"></i></a>
        <h1>Profil Saya</h1>
    </div>

    <div class="profile-header">
        <div class="avatar-circle">
            <img src="images/profile.jpg" alt="Foto Profil" onerror="this.src='https://via.placeholder.com/100'">
        </div>
        <div class="profile-info">
            <h2>Zero One</h2>
            <p>zeroone@mail.com</p>
        </div>
    </div>

    <div class="menu-list">
        
        <a href="#" class="menu-item">
            <div class="menu-text">
                <h3>Orderan Saya</h3>
                <span>Sudah ada 3 pesanan</span>
            </div>
            <i class="ph ph-caret-right"></i>
        </a>

        <a href="#" class="menu-item">
            <div class="menu-text">
                <h3>Alamat Pengiriman</h3>
                <span>3 alamat</span>
            </div>
            <i class="ph ph-caret-right"></i>
        </a>

        <a href="#" class="menu-item">
            <div class="menu-text">
                <h3>Kode Promo</h3>
                <span>Ada promo spesial</span>
            </div>
            <i class="ph ph-caret-right"></i>
        </a>

        <a href="#" class="menu-item">
            <div class="menu-text">
                <h3>Peraturan</h3>
                <span>password</span>
            </div>
            <i class="ph ph-caret-right"></i>
        </a>
        
        <a href="login.php" class="menu-item" style="border-color: red;">
            <div class="menu-text">
                <h3 style="color: red;">Keluar</h3>
            </div>
            <i class="ph ph-sign-out" style="color: red;"></i>
        </a>

    </div>
</div>

<?php include 'footer.php'; ?>