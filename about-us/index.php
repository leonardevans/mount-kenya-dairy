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

    <link rel="icon" href="./../img/logo.png" type="image/png" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
    <!-- header begin -->
    <?php include '../components/header.php'?>

    <!-- header end -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" id="hero-section" data-setbg="../img/hero-14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>About us </h2>
                        <div class="bt-option">
                            <a href="../">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About US Section Begin -->
    <section class="aboutus-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="about-video set-bg" data-setbg="../img/hero/hero-2.jpg">
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>Who are we?</h2>
                        </div>
                        <div class="at-desc">
                            <p>Mount Kenya Milk is a group of dairy products produced and marketed by Meru Dairy
                                Cooperative Union Limited. Welcome to the Cool Mountain Freshness at affordable prices.
                            </p>
                        </div>
                        <div class="about-bar">
                            <div class="ab-item">
                                <p>Quality</p>
                                <div id="bar1" class="barfiller">
                                    <span class="fill" data-percentage="100"></span>
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="ab-item">
                                <p>Taste</p>
                                <div id="bar2" class="barfiller">
                                    <span class="fill" data-percentage="100"></span>
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="ab-item">
                                <p>Freshness</p>
                                <div id="bar3" class="barfiller">
                                    <span class="fill" data-percentage="100"></span>
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About US Section End -->

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
    <?php include '../components/footer.php'?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/masonry.pkgd.min.js"></script>
    <script src="../js/jquery.barfiller.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
    
    <script>
        $(document).ready(()=> {
            $(".about-link").addClass("active");
        });
    </script>

</body>

</html>