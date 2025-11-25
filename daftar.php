<?php 
$page = 'daftar'; 
include 'header.php'; 
?>

<div class="auth-container">
    <div class="page-header">
        <a href="index.php" class="back-arrow"><i class="ph ph-caret-left"></i></a>
        <h1>Daftar</h1>
    </div>

    <form action="login.php">
        
        <div class="input-group">
            <i class="ph ph-user input-icon"></i> <input type="text" placeholder="Nama" required>
        </div>

        <div class="input-group">
            <i class="ph ph-envelope-simple input-icon"></i>
            <input type="email" placeholder="Email" required>
        </div>

        <div class="input-group">
            <i class="ph ph-lock-key input-icon"></i>
            <input type="password" placeholder="Kata Sandi" required>
        </div>

        <a href="login.php" class="auth-link">
            Sudah Punya Akun? <i class="ph ph-arrow-right"></i>
        </a>

        <button type="submit" class="btn-full">DAFTAR</button>
    
    </form>

    <div class="social-login">
        <p>Atau login dengan akun media sosial lain</p>
        <div class="social-icons">
            <div class="social-btn"><i class="ph ph-google-logo" style="color: #DB4437;"></i></div>
            <div class="social-btn"><i class="ph ph-facebook-logo" style="color: #4267B2;"></i></div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>