<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <script src="https://kit.fontawesome.com/4456df0b79.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/style.css">
        
        <!-- swiper Plugin CSS -->
        <link rel="stylesheet" href="swiper/swiper-flashsale.css">
        <link rel="stylesheet" href="swiper/swiper-gudang.css">
        <link rel="stylesheet" href="swiper/swiper-rekomendasi.css">
        <link rel="stylesheet" href="swiper/swiper.css">
                                        
    </head>


<footer id = "contact">
    <div class = "container">
        <div class="footerproduk">
            <h3>Pengguna</h3>
            @if($is_admin)
                <a href="/home/admin"><h4>Admin&nbsp;Page</h4></a>
            @endif
            <a href="/home"><h4>Dashboard</h4></a>
            <a href="/home/cart"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cart</h4></a>
            <a href="/home/profile"><h4>&nbsp;&nbsp;&nbsp;&nbsp;Profile</h4></a>
        </div>
        <div class="footerlogo">
            <img src="/images/Logo.png" alt="">
        </div>
        <div class="footerpembayaran">
            <h3>Pembayaran</h3>
            <div class="pembayaranbank"><img src="/images/bank1.png" alt=""></div>
            <div class="pembayaranbank"><img src="/images/bank2.png" alt=""></div>
            <div class="pembayarandigital"><img src="/images/digitalpayment.png" alt=""></div>
        </div>
    </div>
    <div class="garis-footer">
        <div class="copyright">
            &copy; 2023 Warung Tani
        </div>
    </div>
</footer>