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

<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <a href="/home"><label class="logo">Warung Tani</label></a>
    <ul>
        <br><br><br><br>
        
        @if($isLoggedIn)
        <div class="items">
            <li style="margin-right: 25px;"><a href="/home/cart"><i class="fa-solid fa-cart-shopping" style="font-size: 28px;color:white;"></i>
                    <span style="color:white;">Keranjang</span>
                </a>
            </li>
            <li><a href="/home/profile"><i class="fa-solid fa-user" style="font-size: 28px;"></i>
                    <span style="color:white;">Profile</span>
                </a>
            </li>
        </div>
        @else
        <div class="items">
            <a href="/login"><button class="btn-masuk">Masuk</button></a>
            <a href="/register"><button class="btn-daftar">Daftar</button></a>
        </div>
        @endif
    </ul>
</nav>