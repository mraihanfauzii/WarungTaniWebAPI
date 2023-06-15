<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Checkout</title>
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://kit.fontawesome.com/4456df0b79.js" crossorigin="anonymous"></script>

    </head>

    <body>
        {{-- <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Warung Tani</label>
            <ul>
                <li class="search">
                    <input type="search" placeholder="Search">
                    <label class="icon">
                        <span class="fa-solid fa-magnifying-glass"></span>
                    </label>
                </li>
                <div class="items">
                    <li><a href="#"><i class="fa-solid fa-bell" style="font-size: 28px; margin-right: 25px;"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-envelope" style="font-size: 28px;margin-right: 25px;"></i></a></li>
                    <li><a href="Keranjang.html"><i class="fa-solid fa-cart-shopping" style="font-size: 28px;margin-right: 25px;"></i></a></li>
                    <li><a href="Profil.html"><i class="fa-solid fa-user" style="font-size: 28px;"></i></a></li>
                </div>
            </ul>
        </nav> --}}
        @extends('navbar')
        <br><br><br><br>
        <main>
            <div class="checkout">
                <h2 style="font-weight: 600; margin-left: 3%;">Checkout</h2>
                <div class="border"></div>
                <div class="data-pengiriman">
                    <h3 style="font-weight: 500; margin-bottom: 5px;margin-left: 3%;">Alamat Pengiriman</h3>
                    <h4 class="keterangan">Muhammad Raihan Fauzi</h4>
                    <h4 class="keterangan">08123456789</h4>
                    <h4 class="keterangan">Jl.Telekomunikasi No.1, Bandung</h4>
                </div>
                <div class="border"></div> 
                <br>
                <div class="product-checkout">
                    <div class="sebelahan">
                        <div class="icontoko-product" style="margin-bottom: 20px;margin-left: 4%;">
                            <img id="logo-gudang" src="imagesGudang.png" alt="">
                        </div>
                        <h3 class="produk" style="margin-top: 30px;margin-left: 10px;">Gudang Buah Batu</h3>
                    </div>
                    <div class="sebelahan">
                        <img class="gambar-produk" src="imagesBeras.png" alt="">
                        <div class="product-checkout">
                            <h3 class="produk">Beras 10 KG</h3>
                            <h5 class="berat">(Jumlah : 2)</h5>
                            <h3 class="harga">Rp.65.000</h3>
                        </div>
                    </div>
                    <div class="sebelahan">
                        <img class="gambar-produk" src="imagesApel.jpg" alt="">
                        <div class="product-checkout">
                            <h3 class="produk">Apel Fuji 7 KG</h3>
                            <h5 class="berat">(Jumlah : 1)</h5>
                            <h3 class="harga">Rp.40.000</h3>
                        </div>
                    </div>
                </div>
                <div class="sebelahan keterangan-pengiriman">
                    <h3 class="jarak-pengiriman">Go-Send</h3>
                    <h3 class="jarak-pengiriman">Same Day</h3>
                    <h3>Rp.20.000</h3>
                </div> 
                <div class="border"></div>
                <div class="Ringkasan-Belanja">
                    <h3 style="font-weight: 500;">Ringkasan Belanja</h3>
                    <div class="sebelahan">
                        <h3 style="margin-right: 135px; margin-top: 3px;">Total Harga (2 Barang)</h3>
                        <h3 style="margin-top: 5px;margin-left: 100px;">Rp.105.000</h3>
                    </div>
                    <div class="sebelahan">
                        <h3 style="margin-right: 265px;">Total Ongkos Kirim</h3>
                        <h3>Rp.20.000</h3>
                    </div>
                </div>
                <div class="border"></div>
                <div class="Total-harga-pembayaran">
                    <div class="sebelahan pembayaran-checkout">
                        <div class="totalharga">
                            <h3 class="produk">Total Harga</h4>
                            <h2 class="harga" style="font-weight: bold;">Rp.125.000</h3>
                        </div>
                        <a href="/Pembayaran.html"><button class="button-normal">Pilih Pembayaran</button></a>
                    </div>
                </div>
            </div>   
        </main>
        <br><br>
        @extends('footer')
        {{-- <footer id = "contact">
            <div class = "layar-dalam">
                <div class="footerproduk">
                    <h3>Pengguna</h3>
                    <a href="/Admin-page.html"><h4>Admin Page</h4></a>
                    <a href="/HomepageAfterLogin.html"><h4>Dashboard</h4></a>
                    <a href="/Keranjang.html"><h4>Keranjang</h4></a>
                    <a href="/Profil.html"><h4>Profil</h4></a>
                </div>
                <div class="footerlogo">
                    <div class="pembayaranluar"><img src="imagesLogo.png" alt=""></div>
                </div>
                <div class="footerpembayaran">
                    <h3>Pembayaran</h3>
                    <div class="pembayaranbank"><img src="imagesbank1.png" alt=""></div>
                    <div class="pembayaranbank"><img src="imagesbank2.png" alt=""></div>
                    <div class="pembayarandigital"><img src="imagesdigitalpayment.png" alt=""></div>
                </div>
            </div>
            <div class="garis-footer">
                <div class="copyright">
                    &copy; 2023 Warung Tani
                </div>
            </div>
        </footer> --}}
    </body>
</html>