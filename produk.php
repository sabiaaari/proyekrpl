<?php 
$page = 'produk'; 
include 'header.php'; 

// DATA DUMMY PRODUK (Sesuai Gambar)
// Tips Mahasiswa: Di semester lanjut, data ini akan diambil dari Database MySQL
$items = [
    ["nama" => "Sapu Lidi", "harga" => "Rp. 10.000", "img" => "sapulidi.png"],
    ["nama" => "Pengki", "harga" => "Rp. 10.000", "img" => "pengki.png"],
    ["nama" => "Keset Anyaman", "harga" => "Rp. 10.000", "img" => "keset.png"],
    ["nama" => "Serokan Air", "harga" => "Rp. 10.000", "img" => "serokan.jpg"],
    ["nama" => "Alat Pel", "harga" => "Rp. 10.000", "img" => "alatpel.jpg"],
    ["nama" => "Sapu Plastik", "harga" => "Rp. 10.000", "img" => "sapu_plastik.jpg"],
    ["nama" => "Sapu Lidi", "harga" => "Rp. 10.000", "img" => "sapu_lidi2.jpg"],
    ["nama" => "Keranjang Anyam", "harga" => "Rp. 10.000", "img" => "keranjang.jpg"],
    ["nama" => "Sapu Plastik Mini", "harga" => "Rp. 10.000", "img" => "sapu_mini.jpg"],
    ["nama" => "Sapu Ijuk", "harga" => "Rp. 10.000", "img" => "sapu_ijuk.jpg"],
    ["nama" => "Sikat Toilet", "harga" => "Rp. 10.000", "img" => "sikat.jpg"],
    ["nama" => "Alat Parut Kelapa", "harga" => "Rp. 10.000", "img" => "parutan.jpg"],
    ["nama" => "Aseupan Serbaguna", "harga" => "Rp. 10.000", "img" => "aseupan.jpg"],
    ["nama" => "Keranjang Parcel", "harga" => "Rp. 10.000", "img" => "parcel.jpg"],
    ["nama" => "Keranjang Buah", "harga" => "Rp. 10.000", "img" => "buah.jpg"],
    ["nama" => "Bantal Kapuk", "harga" => "Rp. 10.000", "img" => "bantal.jpg"]
];
?>

    <section class="search-section">
        <div class="search-box">
            <i class="ph ph-magnifying-glass"></i>
            <input type="text" placeholder="Anda cari apa?">
        </div>
    </section>

    <section class="shop-container">
        <div class="shop-grid">
            
            <?php foreach($items as $produk) : ?>
    <a href="detail.php?nama=<?php echo urlencode($produk['nama']); ?>" style="text-decoration: none; color: inherit;">
        
        <div class="shop-card">
            <div class="shop-img">
                <img src="images/<?php echo $produk['img']; ?>" 
                     alt="<?php echo $produk['nama']; ?>"
                     onerror="this.src='https://via.placeholder.com/200'">
            </div>
            <div class="shop-info">
                <div class="shop-text">
                    <h3><?php echo $produk['nama']; ?></h3>
                    <span><?php echo $produk['harga']; ?></span>
                </div>
                <div class="btn-plus"><i class="ph ph-plus"></i></div>
            </div>
        </div>

    </a>
<?php endforeach; ?>

        </div>
    </section>

<?php include 'footer.php'; ?>