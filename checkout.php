<?php 
$page = 'checkout'; 
include 'header.php'; 

// Data yang sama untuk review pesanan
$cart_items = [
    ["nama" => "Sapu Lidi", "harga" => "Rp. 10.000", "qty" => 1, "img" => "sapu.jpg"],
    ["nama" => "Pengki Stainless", "harga" => "Rp. 10.000", "qty" => 2, "img" => "pengki.jpg"],
];
?>

<div class="cart-container">
    <h1 class="cart-title">Checkout</h1>

    <?php foreach($cart_items as $item) : ?>
    <div class="cart-item">
        <div class="item-left" style="width: 50%;"> <div class="cart-img-box">
                <img src="images/<?php echo $item['img']; ?>" alt="produk" onerror="this.src='https://via.placeholder.com/60'">
            </div>
            <div class="item-name" style="margin-left: 15px;"><?php echo $item['nama']; ?></div>
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

    <div class="checkout-summary">
        <div class="summary-row">
            <span>Subtotal</span>
            <span>Rp. 30.000</span>
        </div>
        <div class="summary-row">
            <span>Ongkos Kirim</span>
            <span>-</span>
        </div>
        <div class="summary-row last">
            <span>Total:</span>
            <span>Rp. 30.000</span>
        </div>
        
        <div class="payment-info" style="margin-top: 20px;">
            <p>Metode Pembayaran</p>
            <p>Metode Pengiriman</p>
        </div>

        <div style="margin-top: 40px; text-align: center;">
            <a href="https://wa.me/628995678907?text=Halo%20Adang%20Motekar,%20saya%20mau%20checkout%20pesanan%20saya..." target="_blank" class="btn-checkout-center" style="width: 100%; max-width: 400px; display:inline-block;">
                Checkout Via Whatsapp
            </a>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>