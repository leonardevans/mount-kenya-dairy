<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Meru Dairy</title>
        <link rel="icon" href="../img/logo.png" type="image/png" />
        <link href="./css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <!-- navbar begin -->
        <?php include 'navbar.html'; ?>

<!-- nav bar end -->

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <!-- side nav begin -->
                <?php include './sidenav.php'?>
                <!-- side nav end -->
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row jumbotron ">
                            <div class="card bg-dark text-white p-5 m-4">
                                <p><i class="fas fa-users"></i>  Users</p>
                                <span class="badge badge-light">12</span>
                            </div>
                            <div class="card bg-dark text-white p-5 m-4">
                                <p><i class="fas fa-blog"></i>  Posts </p>
                                <span class="badge badge-light">15</span>
                            </div>
                            <div class="card bg-dark text-white p-5 m-4">
                                <p><i class="fas fa-comments"></i>  Comments </p>
                                <span class="badge badge-light">34</span>
                            </div>
                            <div class="card bg-dark text-white p-5 m-4">
                                <p><i class="fab fa-product-hunt"></i>  Products </p>
                                <span class="badge badge-light">10</span>
                            </div>
                            <div class="card bg-dark text-white p-5 m-4">
                                <p><i class="fab fa-servicestack"></i>  Services </p>
                                <span class="badge badge-light">4</span>
                            </div>
                            
                        </div>
                       
                        
                    </div>
                </main>
                <!-- footer begin -->
        <?php require 'footer.html'; ?>

                <!-- footer end -->
            </div>
        </div>

        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
      
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        
    </body>
</html>
