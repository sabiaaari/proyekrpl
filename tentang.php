<?php 
$page = 'tentang'; // Agar menu 'Tentang' di navbar menyala
include 'header.php'; 
?>

    <div class="about-container">
        
        <section class="about-header">
            <h1>Tentang Adang Motekar</h1>
            <p>Menghadirkan produk rumah tangga dengan sentuhan kearifan lokal</p>
            
            <div class="about-gallery">
                <img src="hero.png" alt="Foto Pengrajin 1" onerror="this.src='https://via.placeholder.com/300x200'">
                <img src="toko2.png" alt="Foto Pengrajin 2" onerror="this.src='https://via.placeholder.com/300x200'">
                <img src="toko1.png" alt="Foto Pengrajin 3" onerror="this.src='https://via.placeholder.com/300x200'">
            </div>
        </section>

        <section class="history-section">
            <h2>Sejarah<br>Kami</h2>
            <div class="history-text">
                <p>
                    Adang Motekar berdiri pada tahun 1995 sebagai usaha keluarga kecil yang bertujuan melestarikan kerajinan rumah tangga — terutama alat rumah tangga berbahan kain dan kayu. Bermula dari ide memanfaatkan sisa bahan kain konveksi yang menumpuk dijadikan sebuah alas keset anyam, seiring waktu kami berkembang dan mulai membuka toko fisik serta kanal penjualan yang lebih luas. Kami selalu menjaga hubungan baik dengan pemasok bahan lokal dan menerapkan praktik ramah lingkungan dalam setiap langkah produksi.
                </p>
            </div>
        </section>
    </div>

    <section class="why-section">
        <h2>Kenapa Harus Memilih Adang Motekar ?</h2>
        
        <div class="why-grid">
            <div class="why-card">
                <div class="icon-circle"><i class="ph ph-hand-heart"></i></div>
                <h3>Kualitas Buatan Tangan</h3>
                <p>Setiap produk melewati pemeriksaan teliti</p>
            </div>
            <div class="why-card">
                <div class="icon-circle"><i class="ph ph-handshake"></i></div>
                <h3>Pemberdayaan</h3>
                <p>Mendukung pertumbuhan pengrajin lokal</p>
            </div>
            <div class="why-card">
                <div class="icon-circle"><i class="ph ph-hands-clapping"></i></div>
                <h3>Kearifan Lokal</h3>
                <p>Mengutamakan teknik turun - temurun</p>
            </div>
            <div class="why-card">
                <div class="icon-circle"><i class="ph ph-users-three"></i></div>
                <h3>Kesempatan Menjadi Reseller</h3>
                <p>Memberikan harga khusus reseller</p>
            </div>
        </div>
    </section>

    <section class="location-section">
        <div class="loc-text">
            <h2>Peta Lokasi kami</h2>
            <p>
                J7G6+RQH Adang Motekar, Jl. Cibangunkidul,<br>
                kampung sukajadi, Kec. Cibeureum, Kab.<br>
                Tasikmalaya, Jawa Barat 46196
            </p>
        </div>
        
        <a href="https://www.google.com/maps/search/?api=1&query=Jl.+Cibangunkidul,+Kec.+Cibeureum,+Kab.+Tasikmalaya" target="_blank" class="map-wrapper" title="Klik untuk buka Google Maps">
            <img src="peta.png" alt="Peta Lokasi" onerror="this.src='https://via.placeholder.com/600x400?text=Peta+Google+Maps'">
        </a>
    </section>

<?php include 'footer.php'; ?>