<?php 
$page = 'login'; 
include 'header.php'; 
?>


<div class="auth-container">
    <div class="page-header">
        <a href="index.php" class="back-arrow"><i class="ph ph-caret-left"></i></a>
        <h1>Masuk</h1>
    </div>

    <?php 
$page = 'login'; 
include 'header.php'; 

// SIMULASI LOGIN (Biasanya pakai Database, ini pakai PHP dasar)
if(isset($_POST['email'])) {
    $email = $_POST['email'];
    
    // Cek apakah yang login adalah ADMIN
    if($email == 'admin@adang.com') {
        // Redirect ke Admin Dashboard
        echo "<script>window.location.href='admin_dashboard.php';</script>";
    } else {
        // Redirect ke Profil User Biasa
        echo "<script>window.location.href='profil.php';</script>";
    }
}
?>

<div class="auth-container">
    <form method="POST" action=""> <div class="input-group">
            <i class="ph ph-envelope-simple input-icon"></i>
            <input type="email" name="email" placeholder="Email Anda" required>
        </div>

        <div class="input-group">
            <i class="ph ph-lock-key input-icon"></i>
            <input type="password" name="password" placeholder="Kata Sandi" required>
        </div>

        <button type="submit" class="btn-full">MASUK</button>
    </form>
    
    </div>

    <div class="social-login">
        <p>Belum punya akun? <a href="daftar.php" style="color: var(--green-dark); font-weight: bold;">Daftar disini</a></p>
        
        <p>Atau login dengan akun media sosial lain</p>
        <div class="social-icons">
            <div class="social-btn"><i class="ph ph-google-logo" style="color: #DB4437;"></i></div>
            <div class="social-btn"><i class="ph ph-facebook-logo" style="color: #4267B2;"></i></div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>