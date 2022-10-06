<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS -->
    <link rel="stylesheet" href="../../content/css/testim.css">
    <link rel="stylesheet" href="../../content/css/style.css">

    <title>T-Coffee</title>
    <style>
        .favourite {
            min-height: 100vh;
        }

        section {
            padding: 24px;
            min-height: 100vh;
        }

        section .title {
            margin-bottom: 28px;
            font-size: calc(1vw + 1vh);
            white-space: nowrap;
            color: var(--text-color);
            text-align: left;
            width: 100%;
            overflow: hidden;
        }

        .cate .title {
            flex: 0 0 100%;
            text-align: center;
            font-size: calc(2vw + 2vh);
        }

        .cate .desc {
            margin: 0 auto;
            flex: 0 0 60%;
            text-align: center;
            font-size: 18px;
        }

        .cate .cate-item {
            margin-top: 24px;
            flex: 0 0 33.33%;
            max-width: 33.33%;
            margin-bottom: 30px;
            padding: 12px;
        }

        .cate-img {
            width: 100%;
            overflow: hidden;
        }

        .cate-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cate-content {
            padding-top: 24px;
            text-align: center;
        }

        .cate-content h4 {
            font-size: 18px;
            text-transform: uppercase;
            margin-bottom: 6px;
            font-weight: 600;
        }

        .cate-content p {
            color: #999;
            font-weight: 600;
            font-size: 15px;
        }

        .container {
            max-width: 1100px;
            width: 100%;
            margin: auto;
        }

        section .container {
            /* padding-top: 60px; */
            /* padding-bottom: 70px; */
        }

        footer {
            width: 100vw;
            max-width: 100vw;
            position: relative;
            left: calc(-50vw + 50%);
            background-color: var(--bg-color-white);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }


        footer .foot-logo h3 {
            flex: 0 0 100%;
            max-width: 100%;
            text-align: center;
            font-size: 36px;
            font-family: 'Lily Script One', cursive;
        }

        footer .foot-logo p {
            flex: 0 0 100%;
            max-width: 100%;
            text-align: center;
            font-size: 18px;
        }

        footer .foot-col {
            margin-top: 24px;
            flex: 0 0 33.33%;
            max-width: 33.33%;
            margin-bottom: 30px;
            padding: 12px;
        }

        footer .foot-col .title {
            font-size: 18px;
            margin-bottom: 16px;
            text-align: center;
        }

        footer .foot-col input {
            padding: 12px 24px;
            width: 100%;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        footer .foot-col p {
            margin-top: 12px;
            font-size: 16px;
        }

        footer .foot-col p a {
            color: #ff6800;
        }

        footer .foot-col .contact p {
            color: #555;
            font-size: 18px;
            margin-bottom: 12px;
            text-align: center;
        }

        footer .foot-col .social {
            max-width: fit-content;
            margin: 0 auto;
        }

        footer .foot-col .social a {
            color: #555;
            font-size: 24px;
            margin-right: 12px;
        }

        footer .copyright {
            width: 100vw;
            position: relative;
            left: calc(-50vw + 50%);
            padding: 12px;
            background-color: #ccc;

        }

        footer .copyright p {
            flex: 0 0 100%;
            max-width: 100%;
            text-align: center;
        }
    </style>
</head>

<<<<<<< HEAD
    <body>
=======
<body>
<<<<<<< HEAD
    <main>

    <div class="container">
        <header>
            <div class="logo">
                T-Coffee
                <!-- <img src="https://coffeeluck.themerex.net/wp-content/uploads/2016/08/logo.png" alt=""> -->
            </div>
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Coffee</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Hoi dap</a></li>
                </ul>
            </nav>
        </header>
        <div class="slider">
            <div class="slider-img">
                <img src="https://coffeeluck.themerex.net/wp-content/uploads/2016/08/slide1.jpg" alt="">
            </div>
            <div class="slider-content">
                <h3><span class="typing">Coffee with our story</span></h3>
                <p>visit our the best coffee shop</p>
            </div>
        </div>
        <div class="content">
            <section class="favourite">
                <div class="row">
                    <h3 class="title">Top 10</h3>
                </div>
            </section>
            <section class="cate">
                <div class="container">
                    <div class="row">
                        <h3 class="title">SMALL CAFE IN THE HEART OF CITY!</h3>
                        <p class="desc">We are proud of our coffee shop with the highest-quality products, most inviting stores, friendliest staff and the best coffee in the world.</p>
                    </div>
                    <div class="row">
                        <div class="cate-item">
                            <div class="cate-img">
                                <img src="https://coffeeluck.themerex.net/wp-content/uploads/2016/08/image-15-370x250.jpg" alt="">
                                <div class="blur"></div>
                                <a href="#" class="visit"></a>
                            </div>
                            <div class="cate-content">
                                <h4>Who we are</h4>
                                <p>history</p>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="cate-img">
                                <img src="https://coffeeluck.themerex.net/wp-content/uploads/2016/08/image-16-370x250.jpg" alt="">
                            </div>
                            <div class="cate-content">
                                <h4>Our Coffee</h4>
                                <p>online store</p>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="cate-img">
                                <img src="https://coffeeluck.themerex.net/wp-content/uploads/2016/08/image-17-370x250.jpg" alt="">
                            </div>
                            <div class="cate-content">
                                <h4>Visit us!</h4>
                                <p>location</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="testim">
                <div class="title">
                    Testimonial
                </div>
                <div class="testim-wrap">
                    <div class="testim-left">
                        <i class="fa-solid fa-angle-left"></i>
                    </div>
                    <div class="testim-content">

                    </div>
                    <ul class="testim-dots">
                        <li class="dot active"></li>
                        <li class="dot"></li>
                        <li class="dot"></li>
                        <li class="dot"></li>
                        <!-- <li class="dot"></li>
                <li class="dot"></li> -->
                    </ul>
                    <div class="testim-right">
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </section>

        </div>
        <footer>
            <div class="container">
                <div class="row foot-logo">
                    <h3>T-Coffee</h3>
                    <p>Bakery & Coffee</p>
                </div>
                <div class="row">
                    <div class="foot-col">
                        <div class="title">Want to hear coffee news from us?</div>
                        <form action="">
                            <input type="text" placeholder="Enter your Email">
                        </form>
                        <p>Please read the Coffee Address Personal data processing policy <a href="">here.</a></p>
                    </div>
                    <div class="foot-col">
                        <div class="title">Contact us</div>
                        <div class="contact">
                            <p>Tel. +84 329 621 991</p>
                            <p>Em. Support@t-coffee.com</p>
                            <p>Dc. Ninh Kieu, Can Tho</p>
                        </div>
                    </div>
                    <div class="foot-col">
                        <div class="title">Follow us</div>
                        <div class="social">
                            <a href="">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fa-brands fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row copyright">
                    <p>Privacy Policy / Cookie policy / All rights reserved. © Copyright T-Coffee</p>
                </div>
            </div>
        </footer>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
    <script src="../../content/js/script.js"></script>
    <script src="../../content/js/testim.js"></script>
    <script>
        const typed = new Typed(".typing", {
            strings: [
                "Coffee with our story",
                "Fresh, Organic, Handcrafted",
                "Experence the full taste",
            ],
            typeSpeed: 100,
            backSpeed: 60,
            loop: true,
        });
    </script>

>>>>>>> cf21bef9ded7958facc0811db65d24393ce111fa
</body>

</html>