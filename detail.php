<?php 
$page = 'produk'; 
include 'header.php'; 

// MENGAMBIL DATA DARI URL
// Jika linknya detail.php?nama=Pengki, maka $nama_produk = "Pengki"
$nama_produk = isset($_GET['nama']) ? $_GET['nama'] : 'Pengki';

// LOGIKA DATABASE SEDERHANA (Simulasi)
// Agar deskripsi dan gambar berubah sesuai produk
$default_desc = "Terbuat dari bahan alumunium dengan gagang berbahan kayu yang dibalut plastik.";
$default_img = "pengki.jpg";
$default_price = "Rp. 10.000";

// Cek produk apa yang diklik (Contoh logika simple)
if($nama_produk == 'Sapu Lidi') {
    $gambar = "sapu.jpg";
    $desc = "Sapu lidi kuat dan awet, gagang bambu kokoh.";
} elseif ($nama_produk == 'Pengki') {
    $gambar = "pengki.jpg";
    $desc = "Terbuat dari bahan alumunium dengan gagang berbahan kayu yang dibalut plastik.";
} else {
    // Default jika produk lain
    $gambar = "pengki.jpg"; // Ganti dengan gambar defaultmu
    $desc = $default_desc;
}
?>

    <section class="detail-section">
        
        <div class="detail-header">
            <a href="produk.php" class="btn-back">Kembali</a>
            <h1>Detail Produk</h1>
        </div>

        <div class="detail-content">
            
            <div class="left-col">
                <div class="main-img-box">
                    <img src="images/<?php echo $gambar; ?>" alt="<?php echo $nama_produk; ?>" onerror="this.src='https://via.placeholder.com/300'">
                </div>
                <div class="thumb-gallery">
                    <div class="thumb-box">
                        <img src="images/<?php echo $gambar; ?>" alt="Thumb 1">
                    </div>
                    <div class="thumb-box">
                        <img src="images/<?php echo $gambar; ?>" alt="Thumb 2">
                    </div>
                </div>
            </div>

            <div class="right-col">
                <div class="info-pill">
                    <?php echo $nama_produk; ?>
                </div>

                <div class="info-pill">
                    <?php echo $default_price; ?>
                </div>

                <div class="info-pill">
                    Stok : 200
                </div>

                <button class="btn-add-cart">
                    Tambah ke Keranjang
                </button>

                <div class="desc-box">
                    <h3>Deskripsi</h3>
                    <p><?php echo $desc; ?></p>
                </div>
            </div>

        </div>

    </section>

<?php include 'footer.php'; ?>