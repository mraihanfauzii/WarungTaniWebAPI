<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Produk</title>
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://kit.fontawesome.com/4456df0b79.js" crossorigin="anonymous"></script>

    </head>

    <body class="CoverRegister" >
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
        <main style="padding-left: 32%;">
            @extends('navbar')
            <br><br><br><br><br><br>
            <h1>Tambah Produk</h1>
            <br>
            <form action="/home/product/create" method="post" enctype="multipart/form-data">
                @csrf
                {{-- <input type="hidden" name="store_id" value={{ $Store_id }}> --}}
                <input type="hidden" name="store_id" value={{ $Store_id }}>
                Nama Produk : <input type="text" name="name" id="NIM" size="20" style="margin-left: 102px;"><br><br>
                Harga Produk : <input type="number" name="price" id="NIM" size="10" style="margin-left: 102px;"><br><br>
                Foto Produk : <input type="text" name="image_link" style="margin-left: 115px;"> <br><br>
                {{-- Foto Produk : <input type="file" name="image" style="margin-left: 115px;"> <br><br> --}}
                <div style="display: flex;">
                    <label for="Alamat Bandung" style="margin-right: 10px; margin-top: 30px;">Informasi Produk : </label>
                    <textarea id="Alamat Bandung" name="description" rows="5" cols="20" style="margin-left: 70px;"></textarea><br><br>
                </div>
                <br>
                <br><br>
                <div style="margin-left: 10%;margin-top: -4%;">
                    <input type="submit" value="Submit" class="button-normal">
                    <input type="reset" value="Reset" class="button-normal">
                </div>
            </form>
        </main>
        <br><br><br><br><br><br><br><br><br><br>
        @extends('footer')
        <script src="style.js"></script>
    </body>
</html>