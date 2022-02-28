{{-- @extends('app') --}}
@section('nav')
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- vanila css -->
    <link rel="stylesheet" href="./css/style-navigation.css">
    <link rel="stylesheet" href="./css/style-footer.css">


    @if ($judul == 'Home')
    <link rel="stylesheet" href="./css/style-hero.css">
    <link rel="stylesheet" href="./css/style-about.css">
    <link rel="stylesheet" href="./css/style-know.css">
    <link rel="stylesheet" href="./css/style-best.css">

    @elseif ($judul == 'Course')
      {{-- course css --}}
      <link rel="stylesheet" href="./course/css/style-course.css">
      @elseif ($judul == 'Login-Register')
      {{-- course detail css --}}
       {{-- login regis css --}}
      <link rel="stylesheet" href="./login-regis/css/style-login.css">
    @elseif ($judul == 'About Us')
    {{-- about us css --}}
    <link rel="stylesheet" href="./about/css/style-about.css">

        @elseif ($judul == 'About Us')
    {{-- user css --}}
 <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"
        type="text/css">

@elseif ($judul == 'User')
            <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"
        type="text/css">
    @endif






    <!-- owl carausel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/
ajax/libs/OwlCarousel2/2.1.3/
assets/owl.carousel.min.css">
    <title>{{ $judul }}</title>
</head>

<body>
<nav class="nav-bar padding">
        <div class="logo nav-padding">
            <img src="./img/logo-nav.png" alt="logo">
        </div>
        <div class="nav-list nav-padding">
            <a href="/" class="list active">Home Page</a>
            <a href="/courses" class="list">Promers Course</a>
            <a href="/aboutus" class="list">About Us</a>
            <a href="/user" class="list">User Profile</a>
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

@endsection
