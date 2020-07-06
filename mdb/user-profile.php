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
    <body >

    <nav class="navbar navbar-dark bg-dark navbar-expand-sm">
  <a class="navbar-brand" href="../index.php">
    <img src="../img/logo.png" width="50" height="50" alt="logo">
   
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar-list-4">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="../img/user.jpg" width="50" height="50" class="rounded-circle">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Username</a>
          <a class="dropdown-item" href="./index.php">Dashboard</a>
          <a class="dropdown-item" href="./login.php">Log Out</a>
        </div>
      </li>   
    </ul>
  </div>
</nav>
       
                <main>
                    <div class="container-fluid">
                        <ol class="breadcrumb mb-4 mt-2">
                            <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                        <div class="container">
                            <div class="jumbotron">
                                <div class="card mb-2">
                                    <form action="">
                                    <div class="card-header">
                                        Profile Picture
                                    </div>
                                    <div class="card-body row">
                                        <div class="col-md-6 text center">
                                            <img src="../img/gallery-2.jpg" alt="" class="img-fluid" style="border-radius:50%;max-height:200px;max-width:200px">
                                        </div>
                                        <div class="col-md-6 form-group ">
                                            <label for="profile-pic">New Profile Picture</label>
                                            <input type="file" class="form-control-file" id="profile-pic" name="profile-pic" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Upload Profile Picture</button>
                                    </div>
                                    </form>
                                </div>

                                <div class="card mb-2">
                                    <form action="">
                                    <div class="card-header">
                                        Edit Profile
                                    </div>
                                    <div class="card-body">
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" name="username" id="username" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" id="email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="username">First Name</label>
                                                <input type="firstname" name="firstname" id="firstname" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Last Name</label>
                                                <input type="lastname" name="lastname" id="lastname" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="website">Website</label>
                                                <input type="url" name="website" id="website" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="mobile">Mobile</label>
                                                <input type="tel" name="mobile" id="mobile" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="about">About</label>
                                                <textarea id="about" class="form-control" name="about" rows="1" maxlength="150"></textarea>
                                            </div>
                                            
                                        
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                    </div>
                                    </form>
                                </div>
                                <div class="card">
                                    <form action="">
                                    <div class="card-header">
                                        Change Password
                                    </div>
                                    <div class="card-body row">
                                        <div class="form-group col-md-4">
                                          <label for="old-password">Old Password</label>
                                          <input type="password" class="form-control" name="old-password" id="old-password" placeholder="old password">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="old-password">New Password</label>
                                          <input type="password" class="form-control" name="new-password" id="new-password" placeholder="new password">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="old-password">Confirm New Password</label>
                                          <input type="password" class="form-control" name="new-password-confirm" id="new-password-confirm" placeholder="new password">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                        
                    </div>
                </main>
                <!-- footer begin -->
        <?php require 'footer.html'; ?>

              

        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
      
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        
    </body>
</html>
