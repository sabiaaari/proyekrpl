<?php 
$page = 'home'; // Memberi tahu header bahwa ini halaman Home
include 'header.php'; 
?>

    <header class="hero">
        <div class="hero-text">
            <h1>Produk Lokal Asli <br> Tasikmalaya</h1>
            <p>
                Adang Motekar menyediakan beragam produk kebutuhan rumah tangga yang dibuat dengan 
                keterampilan pengrajin lokal, tetap mengutamakan kualitas terbaik, dan menawarkan harga yang bersahabat.
            </p>
            <a href="#" class="btn-cta">Beli Sekarang</a>
        </div>
        <div class="hero-img-box">
            <div class="circle-img">
                <img src="images/hero.jpg" alt="Toko Adang Motekar">
            </div>
        </div>
    </header>

    <section class="features">
        <div class="feature-card">
            <div class="icon-circle"><i class="ph ph-money"></i></div>
            <h3>Harga Terjangkau</h3>
            <p>Harga terjangkau dengan kualitas tetap bagus</p>
        </div>
        <div class="feature-card">
            <div class="icon-circle"><i class="ph ph-leaf"></i></div>
            <h3>Produk Lokal</h3>
            <p>Produk kami dibuat dengan handmade oleh pengrajin</p>
        </div>
        <div class="feature-card">
            <div class="icon-circle"><i class="ph ph-shield-check"></i></div>
            <h3>Kepercayaan bertahun - tahun</h3>
            <p>Usaha telah berdiri sejak tahun 90-an</p>
        </div>
    </section>

    <section class="products">
        <h2>Produk Populer</h2>
        <div class="product-grid">
            <div class="product-card">
                <div class="p-img">
                    <img src="sapulidi.png" alt="Sapu">
                </div>
                <div class="p-info">
                    <div>
                        <h3>Sapu Lidi</h3>
                        <span>Rp. 10.000</span>
                    </div>
                    <button class="add-btn"><i class="ph ph-plus"></i></button>
                </div>
            </div>

            <div class="product-card">
                <div class="p-img">
                    <img src="pengki.png" alt="Pengki">
                </div>
                <div class="p-info">
                    <div>
                        <h3>Pengki</h3>
                        <span>Rp. 10.000</span>
                    </div>
                    <button class="add-btn"><i class="ph ph-plus"></i></button>
                </div>
            </div>

            <div class="product-card">
                <div class="p-img">
                    <img src="keset.png" alt="Serokan">
                </div>
                <div class="p-info">
                    <div>
                        <h3>Serokan Air</h3>
                        <span>Rp. 10.000</span>
                    </div>
                    <button class="add-btn"><i class="ph ph-plus"></i></button>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>