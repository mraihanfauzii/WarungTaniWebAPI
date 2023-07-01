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
    <body>
        {{-- <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Warung Tani</label>
            <ul>
                <br><br><br><br>
                <li class="search">
                    <input type="search" placeholder="Search">
                    <label class="icon">
                        <span class="fa-solid fa-magnifying-glass"></span>
                    </label>
                </li>
                @if($isLoggedIn)
                <div class="items">
                    <li><a href="#"><i class="fa-solid fa-bell" style="font-size: 28px; margin-right: 25px;"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-envelope" style="font-size: 28px;margin-right: 25px;"></i></a></li>
                    <li><a href="Keranjang.html"><i class="fa-solid fa-cart-shopping" style="font-size: 28px;margin-right: 25px;"></i></a></li>
                    <li><a href="Profil.html"><i class="fa-solid fa-user" style="font-size: 28px;"></i></a></li>
                </div>
                @else
                <div class="items">
                    <a href="/Login.html"><button class="btn-masuk">Masuk</button></a>
                    <a href="/Register.html"><button class="btn-daftar">Daftar</button></a>
                </div>
                @endif
            </ul>
        </nav> --}}
        @extends('navbar')

        <br><br><br><br><br><br>
        <h3 class="judul">FLASHSALE</h3>
        <section id="Flashsale">
            <div class="container swiper">
                <div class="slide-container-flashsale">
                    <div class="card-wrapper swiper-wrapper">

                        @foreach($Products as $Product)
                            <div class="card swiper-slide" onclick="window.location.href='/home/product/{{ $Product->id }}'">
                                <div class="image-box">
                                    <img src= {{ $Product->image_link }} alt="">
                                </div>
                                <div class="produk">
                                    <div class="keterangan">
                                        <h4 id="nama"> {{ $Product->name }}</h4>
                                        <h4 id="normalprice"><span style="text-decoration: line-through;"> Rp. {{ number_format($Product->price, 0)}}.- </span> </h4>
                                        <h4 id="discountprice">Rp. {{ number_format($Product->price - 3000, 0)}}.-</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
    
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <br>
        <div class="sebelahan" style="justify-content:center;">
            <h3 class="judul">Gudang Terdekat</h3>
            @if($isLoggedIn)
                @if($is_admin)
                    <a href="/home/store/create" style="margin-bottom:-25px;"><button id="tambah-gudang"><i class="fa-solid fa-square-plus"></i></button></a>
                @endif
            @endif
        </div>
        
        <section id="Gudang">
            <div class="container-gudang swiper">
                <div class="slide-container-gudang">
                    <div class="card-wrapper-gudang swiper-wrapper">
                        
                        @foreach($Stores as $Store)
                            <div class="card-gudang swiper-slide" onclick="window.location.href='/home/store/{{ $Store->id }}'">
                                <div class="image-box-gudang">
                                    <img src="images/Gudang-white.png" alt="">
                                </div>
                                <div class="gudang">
                                    <div class="keterangan">
                                        <h4 id="nama"> {{ $Store->name }} </h4>
                                        <h4 id="jarak">50 M</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
    
                        
                    </div>
                </div>
                <div class="swiper-button-next-gudang"></div>
                <div class="swiper-button-prev-gudang"></div>
                <div class="swiper-pagination-gudang"></div>
            </div>
        </section>

        <br>
        <h3 class="judul">Rekomendasi</h3>
        <section id="Rekomendasi">
            <div class="container swiper">
                <div class="slide-container-rekomendasi">
                    <div class="card-wrapper swiper-wrapper">

                        @foreach($Products as $Product)

                            <div class="card swiper-slide" onclick="window.location.href='/home/product/{{ $Product->id }}'">
                                <div class="image-box">
                                    <img src= {{ $Product->image_link }} alt="">
                                </div>
                                <div class="produk">
                                    <div class="keterangan">
                                        <h4 id="nama"> {{ $Product->name }}</h4>
                                        <h4 id="normalprice">Rp. {{ number_format($Product->price, 0)}}.-</h4>
                                    </div>
                                </div>
                            </div>
                        
                        @endforeach
    
                        <div class="card swiper-slide" onclick="window.location.href='/Produk.html'">
                            <div class="image-box">
                                <img src="images/Tomat.jpg" alt="">
                            </div>
                            <div class="produk">
                                <div class="keterangan">
                                    <h4 id="nama">Apel Fuji 7 KG</h4>
                                    <h4 id="normalprice">Rp.35.000</h4>
                                </div>
                            </div>
                        </div>
    
                        <div class="card swiper-slide" onclick="window.location.href='/Produk.html'">
                            <div class="image-box">
                                <img src="images/Buncis.webp" alt="">
                            </div>
                            <div class="produk">
                                <div class="keterangan">
                                    <h4 id="nama">Beras 5 KG</h4>
                                    <h4 id="normalprice">Rp.50.000</h4>
                                </div>
                            </div>
                        </div>
    
                        <div class="card swiper-slide" onclick="window.location.href='/Produk.html'">
                            <div class="image-box">
                                <img src="images/Cabai.jpg" alt="">
                            </div>
                            <div class="produk">
                                <div class="keterangan">
                                    <h4 id="nama">Tomat 1 KG</h4>
                                    <h4 id="normalprice">Rp.11.000</h4>
                                </div>
                            </div>
                        </div>
    
                        <div class="card swiper-slide" onclick="window.location.href='/Produk.html'">
                            <div class="image-box">
                                <img src="images/Bayam.jpg" alt="">
                            </div>
                            <div class="produk">
                                <div class="keterangan">
                                    <h4 id="nama">Timun 10 KG</h4>
                                    <h4 id="normalprice">Rp.30.000</h4>
                                </div>
                            </div>
                        </div>
    
                        <div class="card swiper-slide" onclick="window.location.href='/Produk.html'">
                            <div class="image-box">
                                <img src="images/Kurma.jpg" alt="">
                            </div>
                            <div class="produk">
                                <div class="keterangan">
                                    <h4 id="nama">Buncis</h4>
                                    <h4 id="normalprice">Rp.13.000</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next-rekomendasi"></div>
                <div class="swiper-button-prev-rekomendasi"></div>
                <div class="swiper-pagination-rekomendasi"></div>
            </div>
        </section>
        <br><br>
        @extends('footer')
        

        <!-- swiper Plugin JS -->
        <script src="swiper/swiper-bundle.min.js"></script>
        <!-- Set swiper -->
        <script src="swiper/swiper.js"></script>
    </body>
</html>