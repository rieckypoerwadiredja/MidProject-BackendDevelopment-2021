<<<<<<< HEAD:resources/views/index.blade.php
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
    <link rel="stylesheet" href="./css/style-hero.css">
    <link rel="stylesheet" href="./css/style-about.css">
    <link rel="stylesheet" href="./css/style-know.css">
    <link rel="stylesheet" href="./css/style-best.css">
    <link rel="stylesheet" href="./css/style-footer.css">

    <!-- owl carausel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/
ajax/libs/OwlCarousel2/2.1.3/
assets/owl.carousel.min.css">
    <title>About</title>
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

    <section class="hero" id="hero">
        <div class="img-container">
            <img src="./img/shibuya crossing2.jpg" alt="">
        </div>
        <div class="hero-content padding">
            <div class="top-hero">
                <div class="circle">
                    <h1>PROMERS</h1>
                    <p>LAND OF PROGRAMERS</p>
                </div>
            </div>
            <div class="bottom-hero">
                <ul class="social-media">
                    <li class="sosmed"><a href="#">instagram</a></li>
                    <li class="sosmed"><a href="#">facebook</a></li>
                    <li class="sosmed"><a href="#">twitter</a></li>
                </ul>
                <form class="" action="" method="post">

                    <input class="emailHero" type="text" placeholder="Find a good destination">

                    <input class="btnHero" type="button" value="GO">
                </form>
            </div>

        </div>
    </section>

    <section class="about-japan padding">
        <div class="title">
            <h3>PROMERS <span>日本</span></h3>
        </div>
        <div class="content">
            <div class="video-sec">

                <div class="container-text">
                    <img src="./img/logo.png" alt="logo">
                    <p class="jepun">PROMERSとは</p>
                    <h1>WHAT'S <br> PROMERS</h1>
                    <p class="desc-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam rerum esse
                        dolore magnam dolores
                        repudiandae soluta adipisci quos?</p>
                </div>

                <div class="container-video">
                    <i class="fas fa-play"></i>
                    <img src="./img/sakura river.jpg" alt="sakura river">
                </div>
            </div>
            <div class="img-sec">
                <div>
                    <img src="./img/Tokyo tower crop.jpg" alt="tokyo tower">
                </div>
                <div>
                    <img src="./img/Hiroshima castle crop.jpg" alt="Hiroshima Castle">
                </div>

            </div>
        </div>
    </section>

    <section class="know-japan">
        <div class="before"></div>
        <div class="know-title">
            <p>PROMERSを知る</p>
            <h3>GET TO KNOW PROMERS</h3>
        </div>
        <div class="cards owl-carousel" id="know">
            <div class="item">
                <div class="filter">
                    <div class="top">
                        <h4>AI</h4>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div class="bottom">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam quidem rem molestias
                            necessitatibus adipisci architecto distinctio dignissimos excepturi possimus libero?</p>
                    </div>
                </div>
                <img src="./img/robot.jpg">
            </div>
            <div class="item">
                <div class="filter">
                    <div class="top">
                        <h4>Android</h4>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div class="bottom">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam quidem rem molestias
                            necessitatibus adipisci architecto distinctio dignissimos excepturi possimus libero?</p>
                    </div>
                </div>
                <img src="./img/android.jpg">
            </div>
            <div class="item">
                <div class="filter">
                    <div class="top">
                        <h4>Web</h4>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div class="bottom">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam quidem rem molestias
                            necessitatibus adipisci architecto distinctio dignissimos excepturi possimus libero?</p>
                    </div>
                </div>
                <img src="./img/web.jpg">
            </div>
            <div class="item">
                <div class="filter">
                    <div class="top">
                        <h4>Dekstop</h4>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div class="bottom">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam quidem rem molestias
                            necessitatibus adipisci architecto distinctio dignissimos excepturi possimus libero?</p>
                    </div>
                </div>
                <img src="./img/dekstop.jpg">
            </div>
            <div class="item">
                <div class="filter">
                    <div class="top">
                        <h4>Design</h4>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div class="bottom">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam quidem rem molestias
                            necessitatibus adipisci architecto distinctio dignissimos excepturi possimus libero?</p>
                    </div>
                </div>
                <img src="./img/design.jpg">
            </div>

        </div>
    </section>

    <section class="best-course">
        <div class="title">
            <div class="top">
                <h3>Promers <span>Course</span></h3>
            </div>
            <div class="bottom">
                <P>POPULAR COURSES</P>
                <h3>BEST COURSES RECOMMENDATION</h3>
                <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis, esse! Aliquid, quam. Saepe
                    consequatur assumenda iusto praesentium atque accusantium nesciunt.</P>
            </div>
        </div>

        <div class="carausel">

            <div class="cards owl-carousel" id="best">
                <div class="item">
                    <h4 class="first-title">Cybersecurity</h4>
                    <button class="booking">booking now</button>
                    <div class="content">
                        <div class="safe-icon"><i class="far fa-bookmark"></i></div>
                        <h4>Intoroduction to Cybersecurity</h4>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur velit assumenda ducimus
                            quisquam accusantium qui!</p>
                    </div>
                    <img src="./img/cyber.jpg">
                </div>

                <div class="item">
                    <h4 class="first-title">artificial intelligence</h4>
                    <button class="booking">booking now</button>
                    <div class="content">
                        <div class="safe-icon"><i class="far fa-bookmark"></i></div>
                        <h4>artificial intelligence advance</h4>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur velit assumenda ducimus
                            quisquam accusantium qui!</p>
                    </div>
                    <img src="./img/ai.jpg">
                </div>

                <div class="item">
                    <h4 class="first-title">Software</h4>
                    <button class="booking">booking now</button>
                    <div class="content">
                        <div class="safe-icon"><i class="far fa-bookmark"></i></div>
                        <h4>Intermadite Software developer </h4>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur velit assumenda
                            ducimus
                            quisquam accusantium qui!</p>
                    </div>
                    <img src="./img/software.jpg">
                </div>

                <div class="item">
                    <h4 class="first-title">developer tools</h4>
                    <button class="booking">booking now</button>
                    <div class="content">
                        <div class="safe-icon"><i class="far fa-bookmark"></i></div>
                        <h4>Git tools</h4>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur velit assumenda
                            ducimus
                            quisquam accusantium qui!</p>
                    </div>
                    <img src="./img/github.jpg">
                </div>

                <div class="item">
                    <h4 class="first-title">UX UI Design</h4>
                    <button class="booking">booking now</button>
                    <div class="content">
                        <div class="safe-icon"><i class="far fa-bookmark"></i></div>
                        <h4>UX UI Design</h4>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur velit assumenda
                            ducimus
                            quisquam accusantium qui!</p>
                    </div>
                    <img src="./img/ux ui.jpg">
                </div>

                <div class="item">
                    <h4 class="first-title">android developer</h4>
                    <button class="booking">booking now</button>
                    <div class="content">
                        <div class="safe-icon"><i class="far fa-bookmark"></i></div>
                        <h4>internadite android developer</h4>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur velit assumenda ducimus
                            quisquam accusantium qui!</p>
                    </div>
                    <img src="./img/android apps.jpg">
                </div>

                <div class="item">
                    <h4 class="first-title">video editing</h4>
                    <button class="booking">booking now</button>
                    <div class="content">
                        <div class="safe-icon"><i class="far fa-bookmark"></i></div>
                        <h4>profesional video editing</h4>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur velit assumenda
                            ducimus
                            quisquam accusantium qui!</p>
                    </div>
                    <img src="./img/video editing.jpg">
                </div>

                <div class="item">
                    <h4 class="first-title">teach</h4>
                    <button class="booking">booking now</button>
                    <div class="content">
                        <div class="safe-icon"><i class="far fa-bookmark"></i></div>
                        <h4>teach</h4>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur velit assumenda
                            ducimus
                            quisquam accusantium qui!</p>
                    </div>
                    <img src="./img/teacher.jpg">
                </div>



            </div>

        </div>
    </section>

<footer class="footer">
        <div class="client">
            <h3 class="top">WE HAVE TRUST PARTNER</h3>
            <div class="bottom">
                <a href="https://www.dicoding.com/" target="_blank" class="partner">Dicoding</a>
                <a href="https://kotakode.com/" target="_blank" class="partner">Kotakode</a>
                <a href="https://progate.com/" target="_blank" class="partner">Progate</a>
            </div>
        </div>
        <div class="content">
            <div class="col-footer">
                <h4>ABOUT</h4>
                <a href="#">promers</a>
                <a href="#">promers partner</a>
                <a href="#">reward until now</a>
                <a href="#">event in 2022</a>
                <a href="#">our client</a>
            </div>
            <div class="col-footer">
                <h4>CONTACT</h4>
                <a href="#">PROMERS@gmail.com</a>
                <a href="#">+62 8123456789</a>
                <a href="#">Jl. Sudirman no.1, Jakarta Pusat</a>
            </div>
            <div class="col-footer">
                <h4>SOCIAL</h4>
                <a href="#">instagram</a>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">youtube channel</a>
                <a href="#">tik tok</a>
            </div>
        </div>
        <div class="line-container">
            <div class="line"></div>
            <p> COPYRIGHT BY RIECKY & JASON</p>
        </div>
    </footer>




    <!-- gsap animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"
        integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"
        integrity="sha512-5efjkDjhldlK+BrHauVYJpbjKrtNemLZksZWxd6Wdxvm06dceqWGLLNjZywOkvW7BF032ktHRMUOarbK9d60bg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- owl carausel -->
    <script src="https://cdnjs.cloudflare.com/
ajax/libs/jquery/2.2.2/jquery.min.js">
    </script>


    <script src="https://cdnjs.cloudflare.com/
ajax/libs/OwlCarousel2/2.1.3/
owl.carousel.min.js"></script>


    <!-- vanila js -->
    <script src="./js/know.js"></script>
    <script src="./js/animation.js"></script>
    <script src="./js/navBar.js"></script>
    <script src="./js/carausel.js"></script>
    <script src="./js/best.js"></script>

</body>

</html>
=======
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
    <link rel="stylesheet" href="./css/style-hero.css">
    <link rel="stylesheet" href="./css/style-about.css">
    <link rel="stylesheet" href="./css/style-know.css">
    <link rel="stylesheet" href="./css/style-best.css">

    <!-- owl carausel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/
ajax/libs/OwlCarousel2/2.1.3/
assets/owl.carousel.min.css">
    <title>About</title>
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
            <button class="login">Login</button>
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

    <section class="hero" id="hero">
        <div class="img-container">
            <img src="./img/shibuya crossing2.jpg" alt="">
        </div>
        <div class="hero-content padding">
            <div class="top-hero">
                <div class="circle">
                    <h1>PROMERS</h1>
                    <p>LAND OF PROGRAMERS</p>
                </div>
            </div>
            <div class="bottom-hero">
                <ul class="social-media">
                    <li class="sosmed"><a href="#">instagram</a></li>
                    <li class="sosmed"><a href="#">facebook</a></li>
                    <li class="sosmed"><a href="#">twitter</a></li>
                </ul>
                <form class="" action="" method="post">

                    <input class="emailHero" type="text" placeholder="Find a good destination">

                    <input class="btnHero" type="button" value="GO">
                </form>
            </div>

        </div>
    </section>

    <section class="about-japan padding">
        <div class="title">
            <h3>PROMERS <span>日本</span></h3>
        </div>
        <div class="content">
            <div class="video-sec">

                <div class="container-text">
                    <img src="./img/logo.png" alt="logo">
                    <p class="jepun">PROMERSとは</p>
                    <h1>WHAT'S <br> PROMERS</h1>
                    <p class="desc-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam rerum esse
                        dolore magnam dolores
                        repudiandae soluta adipisci quos?</p>
                </div>

                <div class="container-video">
                    <i class="fas fa-play"></i>
                    <img src="./img/sakura river.jpg" alt="sakura river">
                </div>
            </div>
            <div class="img-sec">
                <div>
                    <img src="./img/Tokyo tower crop.jpg" alt="tokyo tower">
                </div>
                <div>
                    <img src="./img/Hiroshima castle crop.jpg" alt="Hiroshima Castle">
                </div>

            </div>
        </div>
    </section>

    <section class="know-japan">
        <div class="before"></div>
        <div class="know-title">
            <p>PROMERSを知る</p>
            <h3>GET TO KNOW PROMERS</h3>
        </div>
        <div class="cards owl-carousel" id="know">
            <div class="item">
                <div class="filter">
                    <div class="top">
                        <h4>AI</h4>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div class="bottom">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam quidem rem molestias
                            necessitatibus adipisci architecto distinctio dignissimos excepturi possimus libero?</p>
                    </div>
                </div>
                <img src="./img/robot.jpg">
            </div>
            <div class="item">
                <div class="filter">
                    <div class="top">
                        <h4>Android</h4>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div class="bottom">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam quidem rem molestias
                            necessitatibus adipisci architecto distinctio dignissimos excepturi possimus libero?</p>
                    </div>
                </div>
                <img src="./img/android.jpg">
            </div>
            <div class="item">
                <div class="filter">
                    <div class="top">
                        <h4>Web</h4>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div class="bottom">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam quidem rem molestias
                            necessitatibus adipisci architecto distinctio dignissimos excepturi possimus libero?</p>
                    </div>
                </div>
                <img src="./img/web.jpg">
            </div>
            <div class="item">
                <div class="filter">
                    <div class="top">
                        <h4>Dekstop</h4>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div class="bottom">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam quidem rem molestias
                            necessitatibus adipisci architecto distinctio dignissimos excepturi possimus libero?</p>
                    </div>
                </div>
                <img src="./img/dekstop.jpg">
            </div>
            <div class="item">
                <div class="filter">
                    <div class="top">
                        <h4>Design</h4>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div class="bottom">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam quidem rem molestias
                            necessitatibus adipisci architecto distinctio dignissimos excepturi possimus libero?</p>
                    </div>
                </div>
                <img src="./img/design.jpg">
            </div>

        </div>
    </section>

    <section class="best-course">
        <div class="title">
            <div class="top">
                <h3>Promers <span>Course</span></h3>
            </div>
            <div class="bottom">
                <P>POPULAR COURSES</P>
                <h3>BEST COURSES RECOMMENDATION</h3>
                <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis, esse! Aliquid, quam. Saepe
                    consequatur assumenda iusto praesentium atque accusantium nesciunt.</P>
            </div>
        </div>

        <div class="carausel">

            <div class="cards owl-carousel" id="best">
                <div class="item">
                    <h4 class="first-title">Cybersecurity</h4>
                    <button class="booking">booking now</button>
                    <div class="content">
                        <div class="safe-icon"><i class="far fa-bookmark"></i></div>
                        <h4>Intoroduction to Cybersecurity</h4>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur velit assumenda ducimus
                            quisquam accusantium qui!</p>
                    </div>
                    <img src="./img/cyber.jpg">
                </div>

                <div class="item">
                    <h4 class="first-title">artificial intelligence</h4>
                    <button class="booking">booking now</button>
                    <div class="content">
                        <div class="safe-icon"><i class="far fa-bookmark"></i></div>
                        <h4>artificial intelligence advance</h4>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur velit assumenda ducimus
                            quisquam accusantium qui!</p>
                    </div>
                    <img src="./img/ai.jpg">
                </div>

                <div class="item">
                    <h4 class="first-title">Software</h4>
                    <button class="booking">booking now</button>
                    <div class="content">
                        <div class="safe-icon"><i class="far fa-bookmark"></i></div>
                        <h4>Intermadite Software developer </h4>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur velit assumenda
                            ducimus
                            quisquam accusantium qui!</p>
                    </div>
                    <img src="./img/software.jpg">
                </div>

                <div class="item">
                    <h4 class="first-title">developer tools</h4>
                    <button class="booking">booking now</button>
                    <div class="content">
                        <div class="safe-icon"><i class="far fa-bookmark"></i></div>
                        <h4>Git tools</h4>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur velit assumenda
                            ducimus
                            quisquam accusantium qui!</p>
                    </div>
                    <img src="./img/github.jpg">
                </div>

                <div class="item">
                    <h4 class="first-title">UX UI Design</h4>
                    <button class="booking">booking now</button>
                    <div class="content">
                        <div class="safe-icon"><i class="far fa-bookmark"></i></div>
                        <h4>UX UI Design</h4>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur velit assumenda
                            ducimus
                            quisquam accusantium qui!</p>
                    </div>
                    <img src="./img/ux ui.jpg">
                </div>

                <div class="item">
                    <h4 class="first-title">android developer</h4>
                    <button class="booking">booking now</button>
                    <div class="content">
                        <div class="safe-icon"><i class="far fa-bookmark"></i></div>
                        <h4>internadite android developer</h4>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur velit assumenda ducimus
                            quisquam accusantium qui!</p>
                    </div>
                    <img src="./img/android apps.jpg">
                </div>

                <div class="item">
                    <h4 class="first-title">video editing</h4>
                    <button class="booking">booking now</button>
                    <div class="content">
                        <div class="safe-icon"><i class="far fa-bookmark"></i></div>
                        <h4>profesional video editing</h4>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur velit assumenda
                            ducimus
                            quisquam accusantium qui!</p>
                    </div>
                    <img src="./img/video editing.jpg">
                </div>

                <div class="item">
                    <h4 class="first-title">teach</h4>
                    <button class="booking">booking now</button>
                    <div class="content">
                        <div class="safe-icon"><i class="far fa-bookmark"></i></div>
                        <h4>teach</h4>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur velit assumenda
                            ducimus
                            quisquam accusantium qui!</p>
                    </div>
                    <img src="./img/teacher.jpg">
                </div>



            </div>

        </div>
    </section>




    <!-- gsap animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"
        integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"
        integrity="sha512-5efjkDjhldlK+BrHauVYJpbjKrtNemLZksZWxd6Wdxvm06dceqWGLLNjZywOkvW7BF032ktHRMUOarbK9d60bg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- owl carausel -->
    <script src="https://cdnjs.cloudflare.com/
ajax/libs/jquery/2.2.2/jquery.min.js">
    </script>


    <script src="https://cdnjs.cloudflare.com/
ajax/libs/OwlCarousel2/2.1.3/
owl.carousel.min.js"></script>


    <!-- vanila js -->
    <script src="./js/know.js"></script>
    <script src="./js/animation.js"></script>
    <script src="./js/navBar.js"></script>
    <script src="./js/carausel.js"></script>
    <script src="./js/best.js"></script>

</body>

</html>
>>>>>>> 3fd0eadf2db995061ffe9e9fff9fedcaa8036c53:index.html
