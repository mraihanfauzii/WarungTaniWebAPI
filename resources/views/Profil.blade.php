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
                <h2 class="title-box" style="margin-bottom: 7px;margin-left: 32%;">Informasi Pengguna</h2>
                <h4 style="margin-bottom: 15px; text-align: center;">Anda dapat mengubah Nama dan Email<br> anda dengan menggantinya dibawah !</h4>
                <form class="form-daftar" action = "/home/profile/{{ $user->id }}/update" method = "post" style="margin-left:25%;">
                    @method('put')
                    @csrf
                    Nama: <input type="text" name = "name" id="name" class="label-box nama" placeholder="{{ $user->name }}">
                        <div class="error"></div>
                    Email: <input type="email" name = "email" id="email" class="label-box email" placeholder="{{ $user->email }}">
                        <div class="error"></div>
                    Password: <input type="password" name = "password" id="password" class="label-box password" placeholder="Password">
                        <div class="error">
                        </div>
                    Confirm Password: <input type="password" name = "confirm_password" id="password" class="label-box confirm-password" placeholder="Confirm Password">
                        <div class="error"></div>
                        
                    <button type="submit" class="button-normal" style="margin-left: 10%;margin-top: 17px;">Simpan</button>
                    <a href="/logout" class="button-normal" style="font-weight : 500 ; background-color: rgb(255, 93, 93);">Log Out</a>
                </form>

                <form action="/home/profile/{{ $user->id }}/delete" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="button-normal" style="height : 55px;margin-left: 40%; background-color: rgb(255, 93, 93);">Hapus Akun</button>
                </form>

            </div>
            <h3 class="aktivitas">Wishlist</h3>
            <section id="Wishlist" style="margin-bottom: -35px;">
                <div class="container swiper">
                    <div class="slide-container-wishlist">
                        <div class="card-wrapper swiper-wrapper">

                            @foreach($Wishlists as $Wishlist)
                                <div class="card swiper-slide product-slider" onclick="window.location.href='/home/product/{{ $Wishlist->product_id }}'">
                                    <div class="image-box">
                                        <img src="{{ $Wishlist->product->image_link }}" alt="">
                                    </div>
                                    <div class="produk">
                                        <div class="keterangan">
                                            <h4 id="nama">{{ $Wishlist->product->name }}</h4>
                                            <h4 id="normalprice" style="color: #803829;"> Rp. {{ number_format($Wishlist->product->price, 0)}}.- </h4>
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
            <br><br>
            <h3 class="aktivitas" style="margin-top: -10px;">Riwayat Pembelian</h3>
            <section id="Transaksi">
                <div class="container swiper">
                    <div class="slide-container-transaksi">
                        <div class="card-wrapper swiper-wrapper">

                            @foreach($LatestOrders as $LatestOrder)
                                @foreach($LatestOrder->order_details as $OrderDetails) 
                                    <div class="card swiper-slide product-slider" onclick="window.location.href='/home/product/{{ $OrderDetails->product->id }}'">
                                        <div class="image-box">
                                            <img src={{ $OrderDetails->product->image_link }} alt="">
                                        </div>
                                        <div class="produk">
                                            <div class="keterangan">
                                                <h4 id="nama">{{ $OrderDetails->product->name }}</h4>
                                                <h4 id="price" style="color: #803829;">Rp. {{ number_format($OrderDetails->product->price, 0)}}.</h4>
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
        </main>
        <br><br>
        @extends('footer')
        <!-- swiper Plugin JS -->
        <script src="/swiper/swiper-bundle.min.js"></script>
        <!-- Set swiper -->
        <script src="/swiper/swiper.js"></script>
    </body>
</html>