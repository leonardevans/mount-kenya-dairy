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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

         <!-- ckeditor to replace the textarea -->
        <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>

        <style>
                        .require {
                color: #666;
            }
            label small {
                color: #999;
                font-weight: normal;
            }

            .card img{
                max-width:100%;
                height: auto;
            }
        </style>

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
                        <ol class="breadcrumb mt-4">
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                        
                <div class="jumbotron">
                    <div class="row mb-1 bg-primary p-3">
                        <div class="col-sm-9">
                            <h4>Products Management</h4>
                    </div>
                        <div class="col-sm-3">
                        <a href="#addModal" data-toggle="modal" class="btn btn-light"  title="add new product"><i class="fas fa-plus"></i> <span>Add New</span></a>
                    </div>
                    </div>
                    <table class="table table-striped table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date created</th>
                                        <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td><img src="../img/hero-17.jpg" class="avatar" alt="Avatar">Milk</td>
                                        
                                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, quas consequuntur veniam ipsa accusamus fugit minus culpa totam necessitatibus neque tenetur, dolor tempore sed sit officia amet saepe molestias nostrum!</td>
                                        <td><span class="status text-warning">&bull;</span>Hidden</td>
                                        <td>2020/07/04</td>
                                        <td class="d-flex justify-content-between align-items-center">
                                            <a href="#editModal" class="edit" title="Edit" data-toggle="modal"><i class="fas fa-pen"></i></a>
                                            <a href="#deleteModal" class="delete" title="Delete" data-toggle="modal"><i class="fas fa-trash"></i></a>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                </div>
                        
                    </div>
                </main>
                <!-- footer begin -->
        <?php require 'footer.html'; ?>

                <!-- footer end -->
            </div>
        </div>



        <!-- confirm delete Modal HTML -->
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


<!-- edit Product modal -->
<div class="modal fade bd-example-modal-xl" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl ">
      
    <div class="modal-content p-2">
        <div class="modal-header">
      </div>

      <div class="modal-body">
          <div class="card">
              <form action="">
              <div class="card-header bg-primary">
                Edit Product
              </div>
              <div class="card-body">
                  <div class="form-group">
                      <label for="product-name">Name</label>
                      <input id="product-name" class="form-control" type="text" name="product-name">
                  </div>
                  <div class="form-group">
                      <label for="description">Description</label>
                      <textarea id="description" class="form-control" name="description" rows="2" maxlength="150"></textarea>
                  </div>
                  <div class="row mb-2">
                      <div class="col-md-6">
                          <img class="img-fluid" src="../img/hero-17.jpg" alt="">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="main-image">Replace Image</label>
                            <input type="file" class="form-control-file" id="product-image" accept="image/*">
                      </div>
                  </div>
                  <label for="">Set status</label>
                  <div class="row">
                            <div class="form-check col-md-6">
                        <input class="form-check-input" type="radio" name="status" id="visible" value="visible">
                        <label class="form-check-label" for="visible">Visible</label>
                        </div>
                        <div class="form-check col-md-6">
                        <input class="form-check-input" type="radio" name="status" id="hide" value="hidden">
                        <label class="form-check-label" for="hide">hidden</label>
                        </div>
                        </div>
              </div>
              <div class="card-footer d-flex justify-content-around">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-success" title="Update">Update</button>
                                            
                                            <a href="#deleteModal" class="delete text-danger" title="Delete" data-toggle="modal"><i class="fas fa-trash"></i></a>
                                        </div>
        </form>
          </div>
      </div>
      

    </div>
  </div>
</div>
<!-- edit product modal end -->


<!-- add Product modal -->
<div class="modal fade bd-example-modal-xl" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl ">
      
    <div class="modal-content p-2">
        <div class="modal-header">
      </div>

      <div class="modal-body">
          <div class="card">
              <form action="">
              <div class="card-header bg-primary">
                Add Product
              </div>
              <div class="card-body">
                  <div class="form-group">
                      <label for="product-name">Name</label>
                      <input id="product-name" class="form-control" type="text" name="product-name">
                  </div>
                  <div class="form-group">
                      <label for="description">Description</label>
                      <textarea id="description" class="form-control" name="description" rows="2" maxlength="150"></textarea>
                  </div>
                      
                      <div class="form-group">
                          <label for="main-image">Image</label>
                            <input type="file" class="form-control-file" id="product-image" accept="image/*">
                      </div>
                  <label for="">Set status</label>
                  <div class="row">
                            <div class="form-check col-md-6">
                        <input class="form-check-input" type="radio" name="status" id="visible" value="visible">
                        <label class="form-check-label" for="visible">Visible</label>
                        </div>
                        <div class="form-check col-md-6">
                        <input class="form-check-input" type="radio" name="status" id="hide" value="hidden">
                        <label class="form-check-label" for="hide">hidden</label>
                        </div>
                        </div>
              </div>
              <div class="card-footer d-flex justify-content-around">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-success" title="Update">Add Product</button>
                                            
                                            <a href="#deleteModal" class="delete text-danger" title="Delete" data-toggle="modal"><i class="fas fa-trash"></i></a>
                                        </div>
        </form>
          </div>
      </div>
      

    </div>
  </div>
</div>
<!-- add product modal end -->


        <script>
        // ckeditor to replace the textareas

            ClassicEditor
            .create( document.querySelector( '#details-title' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#details-description' ) )
            .catch( error => {
                console.error( error );
            } );
            
            ClassicEditor
            .create( document.querySelector( '#details-more-description' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#new-quote' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
      
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

       
        
        
    </body>
</html>
