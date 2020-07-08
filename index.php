<?php
session_start();



?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Mount Kenya Dairy milk website">
    <meta name="keywords" content="Mount Kenya Dairy, Milk,mt kenya milk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mount Kenya Milk</title>

    <link rel="icon" href="./img/logo.png" type="image/png" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
</head>

<body>
    <!-- header begin -->
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>

        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="./">Home</a></li>
                <li><a href="./about-us/">About Us</a></li>
                <li><a href="./services/">Services</a></li>
                <li><a href="./#products">Products</a></li>
                <li><a href="./blog/">Blog</a></li>
                <?php
if(!isset($_SESSION['logged_in_username'])){
?>
                <li><a href="#">More</a>
                    <ul class="dropdown">                 
                        <li><a href="./mdb/login/">Login</a></li>
                        <li><a href="./mdb/register/">Sign Up</a></li>
                    </ul>
                </li>
<?php }?>
                <li><a href="./contact/">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a href="https://web.facebook.com/mountkenyadairy/"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/mountkenyadairy"><i class="fa fa-twitter"></i></a>
            <!-- <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a> -->
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-3 row">
                    <div class="logo">
                        <a href="./index.php">
                            <img src="./img/logo.png" alt="">
                        </a>
                    </div>
<?php
if(isset($_SESSION['logged_in_username'])){
?>


<div class="dropdown" id="logged-user-dropdown">
  <a class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php if(isset($_SESSION['profile_pic'])){ ?>

    <img src="./img/profiles/<?php echo $_SESSION['profile_pic'];?>" id="avatar" class="rounded-circle">

<?php } else {?>
    <img src="./img/profiles/user.jpg" id="avatar" class="rounded-circle">

<?php } ?>
</a>
  <div class="dropdown-menu" id="logged-user" aria-labelledby="dropdownMenu2">

    <a href="#" class="dropdown-item" ><?php echo $_SESSION['logged_in_username'];?></a>
<?php
if(in_array("admin", $_SESSION['roles'])){
?>

    <a href="./mdb/" class="dropdown-item">Dashboard</a>

<?php }?>
    <a href="./mdb/user-profile/" class="dropdown-item" >User Profile</a>
    <a href="./mdb/logout/" class="dropdown-item">Logout</a>
  </div>
</div>
<?php
}
?>

                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li class="home-link"><a href="./">Home</a></li>
                            <li class="about-link"><a href="./about-us/">About Us</a></li>
                            <li class="services-link"><a href="./services/">Services</a></li>
                            <li><a href="./#products">Products</a></li>
                            <li class="blog-link"><a href="./blog/">Blog</a></li>
<?php
if(!isset($_SESSION['logged_in_username'])){
?>
                            <li><a href="#">More</a>
                    <ul class="dropdown">
                        <li><a href="./mdb/login/">Login</a></li>
                        <li><a href="./mdb/register/">Sign Up</a></li>
                    </ul>
                </li>

<?php }?>

                            <li class="contact-link"><a href="./contact/">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <div class="to-social">
                            <a href="https://web.facebook.com/mountkenyadairy/"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/mountkenyadairy"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->


    <!-- header end -->

    <!-- Hero Section Begin -->
    <section class="hero-section" style="opacity: 0.9;">
        <div class="hs-slider owl-carousel bg-imgs">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <h1>The <strong>Cool</strong> Mountain Freshness</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <h1>The <strong>Cool</strong> Mountain Freshness</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <h1>The <strong>Cool</strong> Mountain Freshness</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-4.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <h1>The <strong>Cool</strong> Mountain Freshness</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-5.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <h1>The <strong>Cool</strong> Mountain Freshness</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-6.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <h1>The <strong>Cool</strong> Mountain Freshness</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-7.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <h1>The <strong>Cool</strong> Mountain Freshness</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-8.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <h1>The <strong>Cool</strong> Mountain Freshness</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-9.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <h1>The <strong>Cool</strong> Mountain Freshness</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-10.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <h1>The <strong>Cool</strong> Mountain Freshness</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-11.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <h1>The <strong>Cool</strong> Mountain Freshness</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-12.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <h1>The <strong>Cool</strong> Mountain Freshness</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-13.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <h1>The <strong>Cool</strong> Mountain Freshness</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- products Section Begin -->
    <!-- class team-section is product-section -->
    <section class="team-section spad" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>Our Products</span>
                            <h2>Home of High Quality Milk Products</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ts-slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/products/whole-milk.jpg">
                            <div class="ts_text">
                                <h4>Whole Milk</h4>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum deleniti
                                    pariatur necessitatibus natus.
                                    Porro tempora debitis deleniti laborum optio tenetur facilis cum, illo aliquid
                                    beatae ullam nam doloremque,
                                    quibusdam excepturi.</span>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/products/yoghurt.jpg">
                            <div class="ts_text">
                                <h4>Yoghurt</h4>
                                <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum, soluta.
                                    Consequatur, deserunt minima
                                    aliquid facere iste dolor </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/products/ghee.jpg">
                            <div class="ts_text">
                                <h4>Ghee</h4>
                                <span>Lorem ipsum dolor sit amet consectetur corporis tenetur sint atque voluptatem
                                    ullam!</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/products/maziwa-mala.jpg">
                            <div class="ts_text">
                                <h4>Maziwa Mala</h4>
                                <span> reprehenderit earum corrupti ipsam omnis? Debitis eveniet cumque quaerat
                                    recusandae cum, rem quae!</span>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/products/butter.png">
                            <div class="ts_text">
                                <h4>Butter</h4>
                                <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/products/milk2.jpg">
                            <div class="ts_text">
                                <h4>Milk</h4>
                                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae quasi,</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- products Section End -->

    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>Mount Kenya Diary<br /> 2919-60200 <br> Meru</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <a href="tel:+254710901376">
                            <i class="fa fa-mobile"></i>
                            <p>+254710901376</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <a href="mailto:maziwa@merudairy.co.ke"><i class="fa fa-envelope"></i>
                            <p>maziwa@merudairy.co.ke</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="./index.php"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Mount Kenya Milk is a group of dairy products produced and marketed by Meru Dairy Cooperative
                            Union Limited. Welcome to
                            the Cool Mountain Freshness at affordable prices.</p>
                        <div class="fa-social">
                            <a href="https://web.facebook.com/mountkenyadairy/"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/mountkenyadairy"><i class="fa fa-twitter"></i></a>
                            <!-- <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a> -->
                            <a href="mailto:maziwa@merudairy.co.ke"><i class="fa  fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href="./about-us/">About Us</a></li>
                            <li><a href="./blog/">Blog</a></li>

                            <li><a href="./contact/">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Support</h4>
                        <ul>

                            <li><a href="./contact/">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h4>Motto</h4>
                        <p>Tasted, tested, proven <br> <br> Simply the best</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p>
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $(document).ready(()=> {
            $(".home-link").addClass("active");
        });
    </script>


</body>

</html>
