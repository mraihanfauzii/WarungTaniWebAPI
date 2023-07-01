<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Produk</title>
        <script src="https://kit.fontawesome.com/4456df0b79.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/style.css">

    </head>

    <body class="CoverRegister">
        @extends('navbar')
        
        <main>
            <br><br><br><br>
            <div class="sebelahan-product">
                <div class="product-page">
                    <img src= "{{ $Product[0]->image_link }}" alt="">
                    <div class="description">
                    </div>
                </div>
                <div>
                    <br><br>
                    <h4 class="product-name"> {{ $Product[0]->name }}</h4>
                    <h3 class="product-price">Rp. {{ number_format($Product[0]->price, 0)}}.-</h3>
                    <div class="sebelahan">
                        <div class="sebelahan" style="margin-top:7px; margin-left:-7px;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <h4>5.0</h4>
                        </div>
                        <div class="share-like-product">
                            <div class="sebelahan">
                                @if($is_admin)
                                    <form action="/home/product/{{ $Product[0]->id }}/delete" method="post">
                                    @method('delete')
                                    @csrf
                                        <button type="submit" id="edit-gudang"><i class="fa-solid fa-square-minus"></i></button>
                                    </form>
                                    
                                    <a href="/home/product/{{ $Product[0]->id }}/edit"><button id="edit-product"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                @endif
                                <form action="/home/product/wishlist/create" method="post">
                                @csrf
                                    <input type="hidden" name="user_id" value={{ $user->id }}>
                                    <input type="hidden" name="product_id" value={{ $Product[0]->id }}>
                                    <button type="submit" id="wishlist"><i class="fa-solid fa-heart"></i></button>
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                    <h4>{{ $Product[0]->product_reviews_count }} Ulasan</h4>
                    <div class="sebelahan">
                        <h5 class="padding-text">Pasti Fresh</h5>
                        <h5 class="padding-text">Pengiriman Instant</h5>
                    </div>
                    <div class="sebelahan informasigudang">
                        <div class="icontoko-product">
                            <img src="/images/Gudang.png" alt="">
                        </div>
                        <div>
                            <h5 class="namagudang"> {{ $Product[0]->Store->name }} </h5>
                            <h5 class="levelgudang">JURAGAN PASAR</h5>
                        </div>
                        <a href="/home/store/{{ $Product[0]->Store->id }}"><button class="button-normal">Detail Gudang</button></a>
                    </div>
                    <h4>Informasi Produk</h4>
                    <h5 class="keterangan-product"> {{ $Product[0]->description }} </h5>

                    <div class="sebelahan">
                        <form action="/home/cart/create" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value= {{ $Product[0]->id }} >
                            <input type="hidden" name="user_id" value= {{ $user->id }} >
                            <input type="hidden" name="quantity" value= {{ 1 }} >
                            <input type="hidden" name="redirect_cart" value= {{ 0 }} >
                            <button type="submit" class="button-normal">Keranjang</button>
                        </form>
                        {{-- <a href="Keranjang.html"><button class="button-normal">Keranjang</button></a> --}}
                        <form action="/home/cart/create" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value= {{ $Product[0]->id }} >
                            <input type="hidden" name="user_id" value= {{ $user->id }} >
                            <input type="hidden" name="quantity" value= {{ 1 }} >
                            <input type="hidden" name="redirect_cart" value= {{ 1 }} >
                            <button type="submit" class="button-normal">Order</button>
                        </form>
                    </div>

                </div>
            </div>
        </main>
        <br><br>
        @extends('footer')
        <script src="style.js"></script>
    </body>
</html>