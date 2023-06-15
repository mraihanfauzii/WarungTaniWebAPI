<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Gudang</title>
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://kit.fontawesome.com/4456df0b79.js" crossorigin="anonymous"></script>

    </head>

    <body class="CoverRegister" >
        @extends('navbar')
        <main style="padding-left: 32%;">
            <br><br><br><br><br><br><br><br>
            <h1>Edit Gudang {{ $Store->name }}</h1>
            <br>
        <form action="/home/store/{{ $Store->id }}/edit" method="post">
        @method('put')
        @csrf
            Nama Gudang : <input type="text" name="name" id="Nama"size="22" style="margin-left: 95px;">
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
        <br><br><br><br><br><br><br><br><br><br>
        @extends('footer')
        <script src="style.js"></script>
    </body>
</html>