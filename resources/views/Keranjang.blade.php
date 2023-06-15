<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Keranjang</title>
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://kit.fontawesome.com/4456df0b79.js" crossorigin="anonymous"></script>

    </head>

    <body>
        @extends('navbar')
        <br><br><br><br>
        <main>
            <div class="checkout" style="height: 900px;">
                <h2 style="font-weight: 600; margin-left: 3%;">Keranjang</h2>
                <div class="border"></div>
                <br>
                <div class="product-checkout">
                    {{-- <div class="sebelahan">
                        <input type="checkbox">
                        <div class="icontoko-product" style="margin-bottom: 20px;margin-left: 4%;">
                            <img id="logo-gudang" src="/images/Gudang.png" alt="">
                        </div>
                        <h3 class="produk" style="margin-top: 30px;margin-left: 10px;">Gudang Buah Batu</h3>
                    </div> --}}

                    @foreach($SelectedProducts as $SelectedProduct)
                        <div class="sebelahan" style="width : 100%;" >
                                <img class="gambar-produk" style="height : 100px; width : 150px;" src={{ $SelectedProduct->product->image_link }} alt="">
                            <div class="product-checkout">
                                <h3 class="produk"> {{ $SelectedProduct->product->name }} </h3>
                                <h3 class="harga">Rp. {{ number_format($SelectedProduct->product->price, 0)}}.-</h3>
                            </div>

                            <form action="/home/cart/{{ $SelectedProduct->id }}/update" method="post">
                                @method('put')
                                @csrf
                                <input type="hidden" name="quantity" value={{ $SelectedProduct->quantity - 1 }}>
                                <button type="submit" style="border-color: transparent; background-color: transparent;"><img style="margin-left : 25px; margin-top : 21px;height : 20px; width : 20px;" src="/images/minus_sign.png" alt=""></button>
                            </form>
                            
                            <h3 style="height: 30px;width: 35px;margin-top: 20px;margin-left: 30px;"> {{ $SelectedProduct->quantity }} </h3>
                            
                            <form action="/home/cart/{{ $SelectedProduct->id }}/update" method="post">
                                @method('put')
                                @csrf
                                <input type="hidden" name="quantity" value={{ $SelectedProduct->quantity + 1 }} >
                                <button type="submit" style="border-color: transparent; background-color: transparent;"><img style="margin-left : 5px; margin-top : 21px;height : 20px; width : 20px;" src="/images/plus_sign.png" alt=""></button>
                            </form>

                            <form action="/home/cart/{{ $SelectedProduct->id }}/delete" method="post">
                                @method('delete')
                                @csrf
                                <div class="share-like-product" style="margin-left: 3%;margin-top: 20px;">
                                    <button type="submit" id="edit-gudang"><i class="fa-solid fa-trash-can" style="font-size: 25px; margin-left: 20px;"></i></button>
                                </div>
                            </form>

                            
                        </div>
                    @endforeach

                    
                {{-- <div class="border" style="margin-bottom: 20px;margin-top: 7px;"></div> --}}

                    {{-- <div class="sebelahan">
                        <input type="checkbox">
                        <div class="icontoko-product" style="margin-bottom: 20px;margin-left: 4%;">
                            <img id="logo-gudang" src="/images/Gudang.png" alt="">
                        </div>
                        <h3 class="produk" style="margin-top: 30px;margin-left: 10px;">Gudang Sukapura</h3>
                    </div> --}}
               
                </div>
                <div class="border"></div>
                <div class="Total-harga-pembayaran">
                    <div class="sebelahan pembayaran-checkout">
                        <div class="totalharga">
                            <h3 class="produk">Total Harga</h4>
                            <h2 class="harga" style="font-weight: bold;">Rp. {{ number_format($TotalPrice, 0)}}.-</h3>
                        </div>
                        <form action="/home/order/create" method="post" style="margin-top: 30px;margin-left: 30px;">
                            @csrf
                            <input type="hidden" name="user_id" value={{ $user->id }}>
                            <button type="submit" class="button-normal">Beli</button>
                        </form>
                        
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
                    <div class="pembayaranluar"><img src="/images/Logo.png" alt=""></div>
                </div>
                <div class="footerpembayaran">
                    <h3>Pembayaran</h3>
                    <div class="pembayaranbank"><img src="/images/bank1.png" alt=""></div>
                    <div class="pembayaranbank"><img src="/images/bank2.png" alt=""></div>
                    <div class="pembayarandigital"><img src="/images/digitalpayment.png" alt=""></div>
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