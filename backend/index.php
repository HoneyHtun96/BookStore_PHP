<?php
    session_start();
    if (isset($_SESSION['userid'])) {
    
?>
  
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php 
        include('navbar.php');
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php 
            include('topbar.php');
        ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Books Page</h1>

          <div class="card o-hidden border-0 shadow-lg my-5 " id="divaddbook">
              <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                  
                  <div class="col-lg-12">
                    <div class="p-5">
                      <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create Books Name!</h1>

                        <?php

                          if (isset($_REQUEST['status'])) {

                            $status = $_REQUEST['status'];
                            if ($status==1) {

                              echo '<div class="alert alert-success">New Book Added Successfully!</div>';
                              
                            }else if ($status==2) {
                              echo '<div class="alert alert-danger">Delete Successfully!</div>';
                              # code...
                            }else{
                              echo '<div class="alert alert-info">Update Successfully!</div>';
                            }
                            
                          }
                        ?>

                      </div>
                      <form class="user" action="addbook.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input type="text" class="form-control form-control-user" name="book_name" id="book" required="required"  placeholder=" Enter name">
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Select Author</label>
                              <select class="form-control" name="author_id" id="book">
                                
                                <?php 

                                    include('database.php');
                                    $sql="select * from authors";
                                    $result=$conn->query($sql);
                                    //var_dump($result);          
                                    while ($row=$result->fetch_assoc()) {
                                      //print_r($row);
                                      $id=$row['id'];
                                      $name=$row['name'];
                                      echo "<option value=$id>$name</option>";
                                     
                                    }
                                ?>
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input type="text" class="form-control form-control-user" name="book_quantity" id="book" required="required"  placeholder=" Enter quantity">

                            </div>
                            
                          </div>  

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Select Category</label>
                              <select class="form-control" name="category_id">
                                
                                <?php 

                                    include('database.php');
                                    $sql="select * from categories";
                                    $result=$conn->query($sql);
                                    //var_dump($result);
                                    while ($row=$result->fetch_assoc()) {
                                      //print_r($row);
                                      $id=$row['id'];
                                      $name=$row['name'];
                                      echo "<option value=$id>$name</option>";
                                    
                                    }
                                ?>
                              </select>
                            </div>
                          </div>
                                                  
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input type="text" class="form-control form-control-user" name="book_price" id="book" required="required"  placeholder=" Enter price">                           
                            </div>
                          </div>

                          <div class="col-lg-6">                      
                              
                            <div class="form-group">
                              <textarea class="form-control" name="book_description" id="book"  placeholder="Book Description"></textarea> 
                            </div>
                          </div>
                        </div>
                          
                        <div class="row">                                      
                       
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input type="file" class="form-control " name="photo" required="required" >
                            </div>
                          </div>
                        </div>                         
                        
                        <div class="form-group">
                          <input type="submit" class="btn-info form-control col-4 offset-4" id="book" value="Add">
                        </div>
                                                 
                      </form>
                     
                     
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="card o-hidden border-0 shadow-lg my-5 " id="diveditbook">
              <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                  
                  <div class="col-lg-12">
                    <div class="p-5">
                      <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Edit Items Name!</h1>

                        <?php

                          if (isset($_REQUEST['status'])) {

                            $status = $_REQUEST['status'];
                            if ($status==1) {

                              echo '<div class="alert alert-success">New Item Added Successfully!</div>';
                              
                            }else if ($status==2) {
                              echo '<div class="alert alert-danger">Delete Successfully!</div>';
                              
                            }
                            
                          }
                        ?>

                      </div>

                      <form class="user" action="updatebook.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                          <input type="hidden" name="book_id" id="book_id" >
                            <input type="hidden" name="oldphotolink" id="oldphotolink">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input type="text" class="form-control form-control-user" name="name" id="uname" required="required"  placeholder=" Enter name">
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Select Author</label>
                              <select class="form-control" name="author_id" id="uauthor_id">
                                
                                <?php 

                                    include('database.php');
                                    $sql="select * from authors";
                                    $result=$conn->query($sql);
                                    //var_dump($result);          
                                    while ($row=$result->fetch_assoc()) {
                                      //print_r($row);
                                      $id=$row['id'];
                                      $name=$row['name'];
                                      echo "<option value=$id>$name</option>";
                                     
                                    }
                                ?>
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input type="text" class="form-control form-control-user" name="quantity" id="uquantity" required="required"  placeholder=" Enter quantity">

                            </div>
                            
                          </div>  

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Select Category</label>
                              <select class="form-control" name="category_id" id="ucategory_id">
                                
                                <?php 

                                    include('database.php');
                                    $sql="select * from categories";
                                    $result=$conn->query($sql);
                                    //var_dump($result);
                                    while ($row=$result->fetch_assoc()) {
                                      //print_r($row);
                                      $id=$row['id'];
                                      $name=$row['name'];
                                      echo "<option value=$id>$name</option>";
                                    
                                    }
                                ?>
                              </select>
                            </div>
                          </div>
                                                  
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input type="text" class="form-control form-control-user" name="price" id="uprice" required="required"  placeholder=" Enter price">                           
                            </div>
                          </div>

                          <div class="col-lg-6">                      
                              
                            <div class="form-group">
                              <textarea class="form-control" name="description" id="udescription"  placeholder="Book Description"></textarea> 
                            </div>
                          </div>
                        </div>
                          
                        <div class="row">                                      
                       
                          <div class="col-lg-6">
                            <div class="form-group" id="divshowoldphoto">
                              <img src="" id="img" width="100" height="100">
                              <button class="btn btn-danger" id="deletebtn">Delete</button>
                            </div>
                            <div class="form-group" id="divphotoupload">
                              <input type="file" class="form-control" name="photo">
                            </div>
                          </div>
                        </div>                         
                        
                        <div class="form-group">
                          <input type="submit" class="btn-info form-control col-4 offset-4" id="book" value="Update">
                        </div>
                                                 
                      </form>

                    </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Author</th>
                      <th>Category</th>
                      <th>Lendprice</th> 
                      <th>Quantity</th>
                      <th>Description</th>                       
                      <th>Photo</th>
                      <th>Edit</th>    
                      <th>Delete</th> 
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Author</th>
                      <th>Category</th>
                      <th>Lendprice</th> 
                      <th>Quantity</th>
                      <th>Description</th>                       
                      <th>Photo</th>
                      <th>Edit</th>    
                      <th>Delete</th>   
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                        include ('database.php');
                        
                        $sql="SELECT i.*,a.name as author_id,c.name as category_id FROM books i INNER JOIN authors a ON i.author_id=a.id INNER JOIN categories c ON i.category_id=c.id";
                        // $sql = "Select * from books";

                          $result=$conn->query($sql);
                          //var_dump($result);
                          if ($result->num_rows>0) {
                            $i=1;
                            while ( $row=$result->fetch_assoc()) {
                              //fetch_assoc() ka row takhu chin ko htoke pay tar
                              //print_r($row);

                              
                              $id=$row['id'];
                              $book_name = $row['name'];
                              $author_id = $row['author_id'];                              
                              $category_id = $row['category_id'];
                              $book_quantity = $row['qty'];
                              $book_price = $row['lendprice'];
                              $book_description = $row['description'];
                             
                              $photo = $row['photo'];
                            
                              //$name=$row['name'];

                              echo"<tr>
                                      <td>$id</td>
                                      <td>$book_name</td>
                                      <td>$author_id</td>
                                      <td>$category_id</td>
                                      
                                      <td>$book_price</td>                   
                                      <td>$book_quantity</td>
                                      <td>$book_description</td>
                                      <td><img src='$photo' width=100 height=100></td>
                                      <td><a href='#' data-id=$id class='btn btn-info edit'>Edit</a></td>
                                      <td>
                                          <form action='deletebook.php' method='POST' onsubmit='return confirm(\"Are you sure?\")' >
                                            <input type='hidden' name='book_id' value='$id'>
                                            <input type='submit' value='Delete' class='btn btn-danger'>
                                            </form>
                                      </td>
                                    </tr>";
                                    $i++;                              
                            }
                            
                          }

                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
 
  <script type="text/javascript">
    $("#diveditbook").hide();
    $("#divaddbook").show();
    $(".edit").click(function(){
    $("#diveditbook").show();
    $("#divaddbook").hide();
      var id=$(this).data('id');
      // alert(id);
      $.post('editbook.php',{id:id},function(data){
        // console.log(data);
         var jsondata=JSON.parse(data);
         console.log(jsondata);
        $("#book_id").val(jsondata.id);

        $("#uname").val(jsondata.name);
        $("#uauthor_id").val(jsondata.author_id);
        $("#ucategory_id").val(jsondata.category_id);
            
        $("#uprice").val(jsondata.lendprice);
        $("#uquantity").val(jsondata.qty);
        $("#udescription").val(jsondata.description);
        $("#divphotoupload").hide();
        $("#divshowoldphoto").show();
        $("#img").attr("src",jsondata.photo);

        $("#oldphotolink").val(jsondata.photo);
      });
    })

    $("#divshowoldphoto").on('click','#deletebtn',function(e){
        e.preventDefault();
        $("#divshowoldphoto").hide();
        $("#divphotoupload").show();
    })
  </script>


</body>

</html>

<?php
     }else{
       header('location: login.php');
     }
?>




