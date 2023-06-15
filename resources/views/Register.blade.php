<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar</title>
        <link rel="stylesheet" href="/css/autenthication.css">
        <script src="https://kit.fontawesome.com/4456df0b79.js" crossorigin="anonymous"></script>

    </head>

    <body class="CoverRegister">
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
        <section></section>
        <div class="kotak-daftar" >
            <form class="form-daftar" action = "/register" style="margin-top : 100px" method = "post">
                @csrf
                <h1 class="title-box" style="margin-top : 60px">Register</h1>
                <input type="text" name = "name" id="name" class="label-box" placeholder="Nama Lengkap" required>
                    <div class="error"></div>
                <input type="email" name = "email" id="email" class="label-box" placeholder="Email" required>
                    <div class="error"></div>
                <input type="password" name = "password" id="password" class="label-box" placeholder="Password" required>
                    <div class="error"></div>
                <input type="password" name = "confirm_password" id="password" class="label-box" placeholder="Confirm Password" required>
                    <div class="error"></div>
                <button class="normal" id="Corner">Daftar</button>
                <div class="sebelahan">
                    <p>Already have an account?&nbsp;</p>
                    <a href="/login" class="biru">Login</a>
                </div>
            </form>
        </div> 
    </body>
</html>