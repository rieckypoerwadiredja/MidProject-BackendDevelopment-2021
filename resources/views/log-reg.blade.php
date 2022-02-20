<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- vannila css --}}
    <link rel="stylesheet" href="./login-regis/css/style-login.css">
    <link rel="stylesheet" href="./css/style-navigation.css">
    <link rel="stylesheet" href="./css/style-footer.css">


    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>Login - Register</title>
</head>

<body>
<nav class="nav-bar padding">
        <div class="logo nav-padding">
            <img src="./img/logo-nav.png" alt="logo">
        </div>
        <div class="nav-list nav-padding">
            <a href="#" class="list active">about promers</a>
            <a href="#" class="list">destination</a>
            <a href="#" class="list">what people say</a>
            <a href="#" class="list">gallery</a>
        </div>
        <div class="btn-nav">
            <a href="/login-register" class="login">Login</a>
        </div>

        <div class="container-burger-icon">
            <div class="burger-icon active">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="close-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <div class="login-regis">
        <div class="form-login">
        <h1>Welcome To PROMERS</h1>

            <!-- Register -->
            <form class="register active" action="post">
                <input required placeholder="Your Name" type="text" name="nama" id="nama" class="nama">
                <input required placeholder="Email" type="text" name="email" id="email" class="email">
                <input required placeholder="Password" type="text" name="password" id="password" class="password">
                <div class="container-submit">
                    <a href="#" class="btn-log">Login</a>
                    <input type="submit" value="submit" class="submit">
                </div>
            </form>

            <!-- login -->
            <form class="login" action="post">
                <input required placeholder="Email" type="text" name="email" id="email" class="email">
                <input required placeholder="Password" type="text" name="password" id="password" class="password">
                <div class="container-submit">
                    <a href="#" class="btn-reg">Register</a>
                    <input type="submit" value="submit" class="submit">
                </div>
            </form>

        </div>
        <div class="img-sec">
            <img src="./login-regis/img/hiking.jpg" alt="">
        </div>
    </div>
    <script src="./js/navBar.js"></script>
    <script src="./login-regis/js/sistem-log-res.js"></script>
</body>

</html>
