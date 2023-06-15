<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profil</title>
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://kit.fontawesome.com/4456df0b79.js" crossorigin="anonymous"></script>
        <!-- swiper Plugin CSS -->
        <link rel="stylesheet" href="/swiper/swiper-transaksi.css">
        <link rel="stylesheet" href="/swiper/swiper-wishlist.css">
        <link rel="stylesheet" href="/swiper/swiper.css">
    </head>

    <body>
        @extends('navbar')

        <br><br><br><br><br><br>

        <main>
            <div class="checkout">
                <h2 class="title-box" style="margin-bottom: -10px;margin-left: 32%;">Informasi Pengguna</h2>
                <h3 class="nama-profile" style="text-align : center; margin-top: 20px;margin-left: 8px; margin-bottom: 20px;font-weight: 550;">Hi, {{ $user->name }} !</h3>
                <form class="form-daftar" action = "/home/profile/{{ $user->id }}/update" method = "post" style="margin-left:25%;">
                    @method('put')
                    @csrf
                    Nama: <input type="text" name = "name" id="name" class="label-box" placeholder="Nama Lengkap" style="margin-left: 100px;margin-bottom: 15px;">
                        <div class="error"></div>
                    Email: <input type="email" name = "email" id="email" class="label-box" placeholder="Email" style="margin-left: 104px;margin-bottom: 15px;">
                        <div class="error"></div>
                    Password: <input type="password" name = "password" id="password" class="label-box" placeholder="Password" style="margin-left: 73px;margin-bottom: 15px;">
                        <div class="error">
                        </div>
                    Confirm Password: <input type="password" name = "confirm_password" id="password" class="label-box" placeholder="Confirm Password" style="margin-left: 3px;margin-bottom: 15px;">
                        <div class="error"></div>
                        
                    <button type="submit" class="button-normal" style="margin-left: 50px;margin-top: 17px;">Simpan</button>
                    <a href="/logout" class="button-normal" style="font-weight : 600 ; background-color: rgb(255, 93, 93);">Log Out</a>
                </form>

                <form action="/home/profile/{{ $user->id }}/delete" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="button-normal" style="height : 55px;margin-left: 275px; background-color: rgb(255, 93, 93);">Hapus Akun</button>
                </form>
                


            </div>
            <h3 class="aktivitas">Aktivitas Saya</h3>
            <section id="Transaksi">
                <div class="container swiper">
                    <div class="slide-container-transaksi">
                        <div class="card-wrapper swiper-wrapper">

                            @foreach($LatestOrders as $LatestOrder)
                                @foreach($LatestOrder->order_details as $OrderDetails) 
                                    <div class="card swiper-slide" onclick="window.location.href='/home/product/{{ $OrderDetails->product->id }}'">
                                        <div class="image-box">
                                            <img src={{ $OrderDetails->product->image_link }} alt="">
                                        </div>
                                        <div class="produk">
                                            <div class="keterangan">
                                                <h4 id="nama">{{ $OrderDetails->product->name }}</h4>
                                                <h4 id="price">Rp. {{ number_format($OrderDetails->product->price, 0)}}.</h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach

                            {{-- @foreach($BoughtProducts as $BoughtProduct)
                                <div class="card swiper-slide" onclick="window.location.href='/home/product/{{ $BoughtProduct->product->id }}'">
                                    <div class="image-box">
                                        <img src={{ $BoughtProduct->product->image_link }} alt="">
                                    </div>
                                    <div class="produk">
                                        <div class="keterangan">
                                            <h4 id="nama">{{ $BoughtProduct->product->name }}</h4>
                                            <h4 id="price">Rp. {{ number_format($BoughtProduct->product->price, 0)}}.</h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach --}}
        
                        </div>
                    </div>
                <div class="swiper-button-next-transaksi"></div>
                    <div class="swiper-button-prev-transaksi"></div>
                    <div class="swiper-pagination-transaksi"></div>
                </div>
            </section>
            <h3 class="aktivitas" style="margin-top: -10px;">Wishlist</h3>
            <section id="Wishlist">
                <div class="container swiper">
                    <div class="slide-container-wishlist">
                        <div class="card-wrapper swiper-wrapper">

                            @foreach($Wishlists as $Wishlist)
                                <div class="card swiper-slide" onclick="window.location.href='/home/product/{{ $Wishlist->product_id }}'">
                                    <div class="image-box">
                                        <img src="{{ $Wishlist->product->image_link }}" alt="">
                                    </div>
                                    <div class="produk">
                                        <div class="keterangan">
                                            <h4 id="nama">{{ $Wishlist->product->name }}</h4>
                                            <h4 id="normalprice"> Rp. {{ number_format($Wishlist->product->price, 0)}}.- </h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
        
                        </div>
                    </div>
                    <div class="swiper-button-next-wishlist"></div>
                    <div class="swiper-button-prev-wishlist"></div>
                    <div class="swiper-pagination-wishlist"></div>
                </div>
            </section>
        </main>
        <br><br>
        @extends('footer')
        <!-- swiper Plugin JS -->
        <script src="/swiper/swiper-bundle.min.js"></script>
        <!-- Set swiper -->
        <script src="/swiper/swiper.js"></script>
    </body>
</html>