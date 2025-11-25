<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adang Motekar</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar">
        <div class="logo">Adang Motekar</div>
        <ul class="nav-links">
            <li><a href="produk.php" class="<?php echo ($page == 'produk') ? 'active' : ''; ?>">Produk</a></li>
            <li><a href="index.php" class="<?php echo ($page == 'home') ? 'active' : ''; ?>">Beranda</a></li>
            <li><a href="tentang.php" class="<?php echo ($page == 'tentang') ? 'active' : ''; ?>">Tentang</a></li>
        </ul>
        <div class="nav-icons">
        <a href="login.php" style="color: white; text-decoration: none;">
        <i class="ph ph-user"></i>
        </a>
    
        <a href="keranjang.php" style="color: white; text-decoration: none;">
        <i class="ph ph-shopping-cart"></i>
        </a>
</div>
    </nav>