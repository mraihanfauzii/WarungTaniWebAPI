<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="/css/autenthication.css">

    </head>

    <body class="CoverLogin">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Warung Tani</label>
            <ul>
                <li><a href="/home" style="margin-left: -70%;">Dashboard</a></li>
            </ul>
        </nav>

        @if(session()->has('loginError'))
            <div class="alert alert-danger" role="alert">
                {{ session('loginError') }}
            </div>
        @endif

        @if (session()->has('RegistSuccess'))
            <div class="alert alert-success">
                {{ session('RegistSuccess') }}
            </div>
        @endif

        <div id="boxlogin" class="kotak-daftar">
            <form class="form-login" action = "/login" method = "post">
                @csrf
                <img class="logo" src="/images/Logo.png" alt="">
                <h1 class="title-box">Login</h1>
                <input type="email" name = "email" id="email" class="label-box" placeholder="Email" required>
                    <div class="error"></div>
                <input type="password" name = "password" id="password" class="label-box" placeholder="Password" required>
                    <div class="error"></div>
                <div class="sebelahan">
                    <p>&nbsp;&nbsp;Don't have an account yet?&nbsp;</p>
                    <div class="belum-daftar">
                        <a href="/register" class="biru">Register</a>
                    </div>
                </div>
                <button type ="submit" class="normal" id="Corner">Login</button>
            </form>
        </div> 
    </body>
</html>