<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gudang</title>
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://kit.fontawesome.com/4456df0b79.js" crossorigin="anonymous"></script>

    </head>

    <body>
        @extends('navbar')

        <br><br><br><br>
        <main>
            <div id="fotogudang">
                <img src="/images/Logo.png" alt="">
                <h4>Pasti aman, cepat, dan mudah</h4>
            </div>
            <div class="icontoko">
                <img src="/images/Gudang.png" alt="">
            </div>
            <br>
            <div class="sebelahan">
                <section id="Kategori">
                    <h4 class="judul">Kategori</h4>
                    <h5>Makanan</h5>
                    <h5>Kebutuhan&nbsp;Pokok</h5>
                    <h5>Alat&nbsp;Dapur</h5>
                    <h5>Bumbu&nbsp;Dapur</h5>
                    <br>
                    <h4 class="judul">Filter</h4>
                    <h5>Harga</h5>
                    <h5>Ulasan</h5>
                </section>

                <section id="Barang">

                </section>
        
                <div id="Gudang">
                    <div class="sebelahan">
                        <h2> {{ $Store->name }} </h2>
                        <div class="edit-gudang sebelahan">
                            <div></div>
                            @if($is_admin)
                            <a href="/home/store/{{ $Store->id }}/edit"><button id="edit-gudang"><i class="fa-solid fa-pen-to-square"></i></button></a>
                            <form action="/home/store/{{ $Store->id }}/delete" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" id="edit-gudang"><i class="fa-solid fa-square-minus"></i></button>
                            </form>
                            
                            
                            @endif
                        </div>
                    </div>
                    <div class="sebelahan">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <h3 class="rating-angka">5.0</h3>
                    </div>
                    <br>
                    <div class="sebelahan edit-gudang">
                        <h4>PRODUK TERSEDIA</h4>
                        @if($is_admin)
                            <form action="/home/product/create" method="get">
                            @csrf
                                <input type="hidden" name="store_id" value="{{ $Store->id }}">
                                <button type="submit" id="tambah-product">
                                    <i class="fa-solid fa-square-plus"></i>
                                </button>
                            </form>
                        @endif
                        </div>

                    <section id="Container-Product">
                        @foreach($Products as $Product)
                            <div class="product" onclick="window.location.href='/home/product/{{ $Product->id }}'">
                                <img src= {{ $Product->image_link }} alt="">
                                <div class="description">
                                    <h5>{{ $Product->name }}</h5>
                                    <h4>Rp. {{ number_format($Product->price, 0)}}.</h4>
                                </div>
                            </div>
                        @endforeach
                    </section>
                    
                </div>
            </div>
        </main>
        <br><br>
        @extends('footer')
    </body>
</html>