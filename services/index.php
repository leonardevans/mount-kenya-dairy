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
    <section class="breadcrumb-section set-bg" id="hero-section" data-setbg="../img/hero-17.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Services</h2>
                        <div class="bt-option">
                            <a href="../">Home</a>
                            <span>Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->




<!-- Services Section Begin -->
<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>What we do?</span>
                    <h2>We offer the best services</h2>
                </div>
            </div>
        </div>
        <div class="row" id="services-container">
            <!-- <div class="col-md-6 card bg-transparent text-white">
                <div class="card-header">Milk Processing</div>
                <div class="row card-body">
                    <div class="col-md-6">
                        <img src="../img/milk-processing.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <p>Meru Dairy Co-operative Union LTD is the processor of the wide variety Mt. Kenya milk
                            products.Check our Products
                            section for more details .</p>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-md-6 card bg-transparent text-white">
                <div class="card-header">Delivery</div>
                <div class="row card-body">
                    <div class="col-md-6">
                        <img src="../img/delivery.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <p>We deliver our products to our customers.For more information about this service get in touch
                            with us through the
                            Contact details provided.</p>
                    </div>
                </div>
            </div> -->
            
            
            
        </div>
    </div>
</section>
<!-- Services Section End -->


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
    <?php require '../components/footer.php'; ?>
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
    <script src="../mdb/js/utilities.js"></script>
    <script src="../js/services.js"></script>
    

    <script>
        $(document).ready(()=> {
            $(".services-link").addClass("active");
        });
    </script>


</body>

</html>