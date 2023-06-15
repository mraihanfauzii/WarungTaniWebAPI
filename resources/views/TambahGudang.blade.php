<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Gudang</title>
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://kit.fontawesome.com/4456df0b79.js" crossorigin="anonymous"></script>

    </head>

    <body class="CoverRegister" >
        @extends('navbar')
        <main style="padding-left: 32%;">
            <br><br><br><br><br><br><br><br>
            <h1>Tambah Gudang</h1>
            <br>
       <form action="/home/store/create" method="post">
        @csrf
            Nama Gudang : <input type="text" name="name" size="22" style="margin-left: 95px;" required>
            <br><br><br><br>
            <div style="margin-left: 10%;margin-top: -4%;">
                <button type="submit" class="button-normal">
                    Submit
                </button>
                <a href="/home/store/create">
                    <button class="button-normal">
                        Reset
                    </button>
                </a>
            </div>
       </form>
        </main>
        
        {{-- <footer id = "contact">
            <div class = "layar-dalam">
                <div class="footerproduk">
                    <h3>Pengguna</h3>
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
        <br><br><br><br><br><br><br><br><br><br>
        @extends('footer')
        <script src="style.js"></script>
    </body>
</html>