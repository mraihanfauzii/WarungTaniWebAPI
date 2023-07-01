<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Produk</title>
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://kit.fontawesome.com/4456df0b79.js" crossorigin="anonymous"></script>

    </head>

    <body class="CoverRegister" >
        @extends('navbar')
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
                    <li><a href="#"><i class="fa-solid fa-cart-shopping" style="font-size: 28px;margin-right: 25px;"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-user" style="font-size: 28px;"></i></a></li>
                </div>
            </ul>
        </nav> --}}
        <main style="padding-left: 32%;">
            <br><br><br><br><br><br>
            <h1>Edit Produk "Nama Produk"</h1>
            <br>
            <form action="/home/product/{{ $Product->id }}/update" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                Nama Produk : <input type="text" name="name" id="NIM" value="{{ $Product->name }}" size="20" style="margin-left: 102px;"><br><br>
                Harga Produk : <input type="number" name="price" id="NIM" value={{ $Product->price }} size="10" style="margin-left: 102px;"><br><br>
                Foto Produk : <input type="text" name="image_link" style="margin-left: 115px;" value={{ $Product->image_link }}> <br><br>
                <div style="display: flex;">
                    <label for="Alamat Bandung" style="margin-right: 10px; margin-top: 30px;">Informasi Produk : </label>
                    <textarea id="Alamat Bandung" name="description" rows="5" cols="20" style="margin-left: 70px;">{{ $Product->description }}</textarea><br><br>
                </div>
                <br>
                <br><br>
                <div style="margin-left: 10%;margin-top: -4%;">
                    <input type="submit" value="Submit" class="button-normal">
                    <input type="reset" value="Reset" class="button-normal">
                </div>
            </form>
            {{-- <form>
                Nama Produk : <input type="text" id="NIM" size="10" style="margin-left: 102px;"><br><br>
                Foto Produk : <input type="file" name="gambar" style="margin-left: 115px;"> <br><br>
                <div style="display: flex;">
                    <label for="Alamat Bandung" style="margin-right: 10px; margin-top: 30px;">Informasi Produk : </label>
                    <textarea id="Alamat Bandung" name="Alamat Bandung" rows="5" cols="20" style="margin-left: 70px;"></textarea><br><br>
                </div>
                <br>
                <br><br>
                <div style="margin-left: 10%;margin-top: -4%;">
                    <input type="submit" value="Submit" class="button-normal">
                    <input type="reset" value="Reset" class="button-normal">
                </div>
            </form> --}}
        </main>
        <br><br><br><br>
        @extends('footer')
        <script src="style.js"></script>
    </body>
</html>