<?php
session_start();

if(!in_array("admin", $_SESSION['roles'])){
    header("Location:./login/");
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Meru Dairy</title>
        <link rel="icon" href="../../img/logo.png" type="image/png" />
        <link href="../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <!-- navbar begin -->
               <?php require '../components/navbar.php'; ?>


<!-- nav bar end -->

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <!-- side nav begin -->
                 <?php include '../components/sidenav.php'?>
                <!-- side nav end -->
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <ol class="breadcrumb mb-4 mt-4">
                            <li class="breadcrumb-item active">Posts</li>
                        </ol>



                        <div class="jumbotron">
                <div class="row mb-1 bg-primary p-3">
                    <div class="col-sm-9">
                        <h4>Posts Management</h4>
                    </div>
                    <div class="col-sm-3">
                        <a href="./addPost.php" class="btn btn-light"  title="add new product"><i class="fas fa-plus"></i> <span>Add New</span></a>
                    </div>
                </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>						
                        <th>Category</th>
                        <th>author</th>
                        <th>Date Created</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td>1</td>
                        <td>
                            <img src="../img/user.jpg" class="avatar" alt="Avatar"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis beatae
                        </td>
                        <td>Education</td>
                        <td>John Doe</td>                        
                        <td>04/10/2013</td>
                        <td><span class="status text-success">&bull;</span> Published</td>
                        <td>
                            <a href="#setingsModal" class="settings" title="Settings" data-toggle="modal" data-target="#settingsModal"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="./post.php" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="./editPost.php" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#deleteModal" class="delete" title="Delete" data-toggle="modal"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                  
                </tbody>
            </table>
            
        </div>
                       
                        
                    </div>
                </main>
                <!-- footer begin -->
       <?php require '../components/footer.php'; ?>

                <!-- footer end -->
            </div>
        </div>

        <!-- success modal start -->
<!-- Modal HTML -->
<div id="successModal" class="modal fade">
	<div class="modal-dialog success-modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title w-100">Success!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Item Deleted Successfully</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
			</div>
		</div>
	</div>
</div> 
<!-- success modal end -->

<!-- confirm delete modal start -->

<!-- Modal HTML -->
<div id="deleteModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>						
				<h4 class="modal-title w-100">Are you sure?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete this Post? This process cannot be undone.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-danger">Delete</button>
			</div>
		</div>
	</div>
</div> 

<!-- confirm delete modal end -->

<!-- Post settings modal -->
<div class="modal fade" id="settingsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form action="">
<div class="card">
    <div class="card-header">
        Post Settings
    </div>
    <div class="card-body">
                <div class="card mb-2">
                    <label for="" class="card-header">Status</label>
                <div class="card-body row">
                    <div class="form-check col-md-6">
                    <input class="form-check-input" type="radio" name="status" id="publish" value="published" checked>
                    <label class="form-check-label" for="publish">
                        Publish
                    </label>
                    </div>
                    <div class="form-check col-md-6">
                    <input class="form-check-input" type="radio" name="status" id="hide" value="hidden">
                    <label class="form-check-label" for="hide">
                        Hide
                    </label>
                    </div>
                    
                </div>
                </div>

            <div class="card">
                <label class="card-header" for="category">Category</label>
                <div class="form-group card-body">
                    <select class="custom-select my-1 mr-sm-2" id="category">
                        <option selected>Health</option>
                        <option value="1">Education</option>
                        <option value="2">Farming</option>
                        <option value="3">Milk</option>
                    </select>
                </div>
            </div>
    </div>
    <div class="card-footer justify-content-between">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" >Update</button>
      </div>
</div>

</form>
      </div>
      
    </div>
  </div>
</div>
<!-- Post settings modal end -->

        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
      
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        
    </body>
</html>
