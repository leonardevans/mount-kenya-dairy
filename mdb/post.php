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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <!-- navbar begin -->
       <?php require 'navbar.html'; ?>

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
                        <ol class="breadcrumb mb-4 mt-2">
                            <li class="breadcrumb-item active">Post Details</li>
                        </ol>
                        <div class="container">
                            <nav class="nav nav-pills nav-fill">
                                <a class="nav-item nav-link active" href="#" id="show-details">Details</a>
                                <a class="nav-item nav-link" href="#" id="show-comments">Comments</a>
                                <a class="nav-item nav-link" href="../blog-details.html">View in blog</a>
                                
                            </nav>

                            <div class="jumbotron mt-1" >
                                <div id="details">
                                <div class="card mb-2">
                                    <div class="card-header">
                                        <nav class="nav nav-pills nav-fill">
                                <a class="nav-item edit" title="Edit" data-toggle="tooltip" href="editPost.php" id=""><i class="material-icons">&#xE254;</i></a>
                                <a href="#deleteModal" class="nav-item text-danger delete " title="Delete" data-toggle="modal"><i class="material-icons">&#xE872;</i></a>
                                
                            </nav>
                                    </div>
                                    <div class="card-body">
                                        <table class="table">
  <thead>
    <tr>
      <th scope="col">Category</th>
      <th scope="col">Date Created</th>
      <th scope="col">Date Updated</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Farming</td>
      <td>2020/07/03</td>
      <td>2020/07/04</td>
      <td>Published</td>
    </tr>
    
  </tbody>
</table>
                                    </div>
                                </div>

                                <div class="card mb-2">
                                    <div class="card-header">
                                        Title
                                    </div>
                                    <div class="card-body" >
                                        <p class="card-text">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, nobis repellat ab tempore voluptatibus, iure tenetur eius voluptates eos, architecto voluptatum libero. Amet, doloremque minima. Officia in temporibus veniam optio!
                                        </p>
                                    </div>
                                </div>

                                <div class="card mb-2">
                                    <div class="card-header">
                                        Main Image
                                    </div>
                                    <div class="card-body">
                                        <img class="img-fluid" src="../img/hero-17.jpg" alt="">
                                    </div>
                                </div>

                                <div class="card mb-2">
                                    <div class="card-header">
                                        Title Details
                                    </div>
                                    <div class="card-body">
                                        
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores inventore quo totam animi reiciendis quisquam excepturi itaque, similique laudantium error! In eaque neque eveniet corporis aspernatur facilis voluptatibus error voluptatum.</p>
                                    </div>
                                </div>

                                <div class="card mb-2">
                                    <div class="card-header">
                                        Images
                                    </div>
                                    <div class="card-body row">
                                        <div class="col-md-4">
                                            <img class="img-fluid" src="../img/hero-17.jpg" alt="">
                                        </div>
                                        <div class="col-md-4">
                                            <img class="img-fluid" src="../img/hero-17.jpg" alt="">
                                        </div>
                                        <div class="col-md-4">
                                            <img class="img-fluid" src="../img/hero-17.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-2">
                                    <div class="card-header">
                                        Description details
                                    </div>
                                    <div class="card-body">
                                        
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum earum iste animi beatae eius corrupti quibusdam saepe obcaecati cupiditate. Eaque deserunt illum accusamus cupiditate fugit autem enim soluta qui totam.
                                        </p>
                                    </div>
                                </div>

                                <div class="card mb-2">
                                    <div class="card-header">
                                        Quotes
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">John Doe - Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi alias praesentium rem cumque, sint ad, vitae molestiae enim placeat ea doloribus dolorem provident odit tempore neque numquam assumenda. Optio, adipisci!</p>
                                        <p class="card-text">John Doe - Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi alias praesentium rem cumque, sint ad, vitae molestiae enim placeat ea doloribus dolorem provident odit tempore neque numquam assumenda. Optio, adipisci!</p>
                                    </div>
                                </div>

                                <div class="card mb-2">
                                    <div class="card-header">
                                        More Description
                                    </div>
                                    <div class="card-body">
                                        
                                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo ducimus vel eligendi laborum! Tempore exercitationem voluptatibus ab est dolorem harum rem, doloremque accusantium velit corrupti facere inventore enim. Autem, obcaecati.</p>
                                    </div>
                                </div>

                                <div class="card mb-2">
                                    <div class="card-header">
                                        Author
                                    </div>
                                    <div class="card-body">
                                        
                                        <p class="card-text">John Doe</p>
                                    </div>
                                </div>

                            </div>
                            <div id="comments" style="display:none">
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Comment</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum obcaecati iusto consequatur! Perspiciatis corrupti sunt obcaecati autem! Natus vitae, deserunt laborum nihil, ut laboriosam facere dignissimos, doloribus vero possimus rerum.</td>
                                        
                                        <td>Visible</td>
                                        <td>2020/07/04</td>
                                        <td>
                                            <a href="#setingsModal" class="settings" title="more details and settings" data-toggle="modal" data-target="#settingsModal"><i class="material-icons">&#xE8B8;</i></a>
                                            <a href="#deleteModal" class="delete" title="Delete" data-toggle="modal"><i class="material-icons">&#xE872;</i></a>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>

                        </div>
                       
                        
                    </div>
                </main>
                <!-- footer begin -->
        <?php require 'footer.html'; ?>

                <!-- footer end -->
            </div>
        </div>


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


<!-- comment settings modal -->
<div class="modal fade bd-example-modal-xl" id="settingsModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl ">
      
    <div class="modal-content p-2">
        <div class="modal-header">
      </div>

      <div class="modal-body">
          <div class="card">
              <div class="card-header">
                Comment Settings
              </div>
              <div class="card-body">
                  <p>Username : Evan</p>
                  <p>email: evan@mail.com</p>
                  <p>website: evan.co.ke</p>
                  <p>status: visible</p>
                  <p>Date: 2020/07/04</p>
                  <h5>Comment</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est sed pariatur in. Culpa quae fugit corporis mollitia ullam dolores dicta maiores temporibus recusandae suscipit tempore, officiis vero aliquam non ad.</p>
              </div>
              <div class="card-footer d-flex justify-content-around">
                  <button type="button" class="btn btn-success" title="set visible to users">Show</button>
                                            <button type="button" class="btn btn-warning" title="hide from users">Hide</button>
                                            <a href="#deleteModal" class="delete text-danger" title="Delete" data-toggle="modal"><i class="material-icons">&#xE872;</i></a>
              </div>
          </div>
      </div>
      

    </div>
  </div>
</div>
<!-- comment settings modal end -->
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="./js/post.js"></script>
    </body>
</html>
