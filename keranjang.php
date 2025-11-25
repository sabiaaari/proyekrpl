<?php 
$page = 'keranjang'; 
include 'header.php'; 

// Data Dummy Keranjang (Simulasi)
$cart_items = [
    ["nama" => "Sapu Lidi", "harga" => "Rp. 10.000", "qty" => 1, "img" => "sapu.jpg"],
    ["nama" => "Pengki Stainless", "harga" => "Rp. 10.000", "qty" => 2, "img" => "pengki.jpg"],
    ["nama" => "Serokan Air", "harga" => "Rp. 10.000", "qty" => 1, "img" => "serokan.jpg"]
];
?>

<div class="cart-container">
    <h1 class="cart-title">Keranjang</h1>
    
    <h3 class="cart-subtitle">Tas Belanja ( 3 Barang )</h3>

    <div class="select-all-box">
        <input type="checkbox" checked>
        <label>Pilih Semua Barang</label>
    </div>

    <?php foreach($cart_items as $item) : ?>
    <div class="cart-item">
        <div class="item-left">
            <input type="checkbox" checked>
            <div class="cart-img-box">
                <img src="images/<?php echo $item['img']; ?>" alt="produk" onerror="this.src='https://via.placeholder.com/60'">
            </div>
            <div class="item-name"><?php echo $item['nama']; ?></div>
        </div>

        <div class="qty-control">
            <button class="btn-qty"><i class="ph ph-minus"></i></button>
            <span class="qty-val"><?php echo $item['qty']; ?></span>
            <button class="btn-qty"><i class="ph ph-plus"></i></button>
        </div>

        <div class="item-price"><?php echo $item['harga']; ?></div>
        
        <div style="color: #ccc;"><i class="ph ph-dots-three-vertical"></i></div>
    </div>
    <?php endforeach; ?>

    <div class="promo-box">
        <input type="text" placeholder="Enter your promo code">
        <button class="btn-promo-arrow"><i class="ph ph-arrow-right"></i></button>
    </div>

    <div class="total-bar">
        <span>Total Pembayaran</span>
        <span class="total-price">Rp. 30.000</span>
    </div>

    <a href="checkout.php" class="btn-checkout-center">CHECK OUT</a>

</div>

<?php include 'footer.php'; ?>