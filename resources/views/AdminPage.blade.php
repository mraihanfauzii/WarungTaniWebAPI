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
        @extends('navbar')
        <br><br><br><br><br>
        <main>
            <h2 style="font-weight: 600; margin-left: 31%;">Orderan</h2>
            @foreach ($orders as $order)
                <div class="checkout">
                    <h2 style="font-weight: 600; margin-left: 3%;">Pesanan</h2>
                    <div class="border"></div>
                    <div class="data-pengiriman">
                        <h3 style="font-weight: 500; margin-bottom: 5px;margin-left: 3%;">Detail pesanan</h3>
                        <h4 class="keterangan">Nama          : {{ $order->user->name }}</h4>
                        <h4 class="keterangan">Email         : {{ $order->user->email }}</h4>
                        <h4 class="keterangan">Di pesan pada : {{ $order->created_at->diffForHumans() }}</h4>
                    </div>
                    <div class="border"></div> 
                    <br>
                    <div class="product-checkout">
                        <div class="sebelahan">
                            <div class="produk-admin-page">
                                @foreach ($order->order_details as $item)
                                    <div class="sebelahan">
                                        <img class="gambar-produk" src="{{ $item->product->image_link }}" alt="">
                                        <div class="product-checkout">
                                            <h3 class="produk">{{ $item->product->name }}</h3>
                                            <h5 class="berat">Jumlah : {{ $item->quantity }}</h5>
                                            <h3 class="harga">Rp. {{ number_format($item->product->price, 0)}}</h3>
                                        </div>
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>   
            
            @endforeach

        </main>
        <br><br>
        @extends('footer')
    </body>
</html>