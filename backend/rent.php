


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
          <h1 class="h3 mb-4 text-gray-800">Rent Page</h1>

          <div class="card o-hidden border-0 shadow-lg my-5 ">
              <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                  
                  <div class="col-lg-12">
                    <div class="p-5">
                      <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Choose Book Id!</h1>
                        
                      </div>
                      <form class="user" action="order.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="hidden" id="rent_id" value="">

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input type="text" class="form-control form-control-user" name="idname" required="required" id="book_id" placeholder="Enter Book Id ">
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">
                                <input type="date" class="form-control form-control-user" name="lentname" id="lentdate">
                            
                            </div>
                          </div>

                          
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <table class="table table-bordered ">
                                <thead>
                                  <th>Photo</th>
                                  <th>ID</th>
                                  <th>Name</th>                                  
                                  <th>LendPrice</th>
                                  
                                </thead>
                                
                                <tbody id="mytbody">
                                  
                                </tbody>

                              </table>                           
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">                              
                                <input type="date" class="form-control form-control-user" id="returndate" name="returnname" >                            
                            </div>
                            
                          </div>
                        </div>

                        

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input type="text" class="form-control form-control-user" name="username" id="user_id" placeholder="Enter user id">
                            </div> 
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                                  <input type="submit" class="form-control btn-info" id="lent" value="RENT">
                            </div>
                            
                          </div>
                        </div>                       
                                                                      
                      </form>  
                      </div>                  
                     
                    </div>
                  </div>
                </div>
              </div>
          </div>
        
        </div>
        <!-- /.container-fluid -->

      </div>
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
          <a class="btn btn-primary" href="login.html">Logout</a>
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
    showtable();
    
    $("#book_id").change(function(){

        var book_id= $(this).val();
        //alert(book_id);
        $.post('get_item_info.php',
          {book_id:book_id},
          function(data){
            console.log(data);
            var bookdata = JSON.parse(data);
            console.log(bookdata);
            var booklist = localStorage.getItem('booklist');
            console.log(booklist);

            if (!booklist) {
              booklist = '{"booklist":[]}';
            }

            var booklistobj = JSON.parse(booklist);
            booklistobj.booklist.push(bookdata);
            console.log(booklistobj);
            localStorage.setItem('booklist',JSON.stringify(booklistobj));
            // $('#book_id').val('');
            
            showtable();

           
          })
    })
    
    function showtable(){
      var booklist = localStorage.getItem('booklist');
      if (booklist) {
        var booklistobj = JSON.parse(booklist);
        var html=''; 
        $.each(booklistobj.booklist,function(i,v){
          if (v) {
            var book_id = v.id;
            var name = v.name;
            // var author = v.author_id;
            // var category = v.category_id;
            var photo = v.photo;
            var price = v.lendprice;
            //var quantity =v.qty;
            var description = v.description;
            
            // html=html+'<tr><td><img src="'+photo+'" width=100 height=100></td><td>'+name+'</td><td>'+author+'</td><td>'+category+'</td><td>'+price+'</td></tr>';
            html=html+'<tr><td><img src="'+photo+'" width=100 height=100></td><td>'+book_id+'</td><td>'+name+'</td><td>'+price+'</td></tr>';
          
          } 
        })
        
        $("#mytbody").html(html);
      }else{
        $('#mytbody').html('');
      }
      

    }

    ///Insert into Database 
    // $('.rent').click(function(){
    //   alert('clicked rent btn');
    //   var bookrent = localStorage.getItem('booklist');/// 'mylist' is array in table
    //   var lent
    //    if (bookrent) {
    //      var booklistorder = JSON.parse(bookrent);
    //      var booklistarr = booklistorder.booklist; ///Second mylist is array 
    //      console.log(booklistarr);
    //      $.post('order.php',{item:booklistarr},function(response){
    //        alert(response);
    //   //     if (response) {              ////if(response==success) nae wrie ya
    //   //     localStorage.clear();
    //   //       showtable();
    //   //     }

    //      })
    //    }
    // })

    // $('.rent').click(function(){
    //   //alert('click ok!');

    //   var booklist = localStorage.getItem('booklist');
    //     if (booklist) {
    //         var booklistobj = JSON.parse(booklist);
    //         var html=''; 
    //         $.each(booklistobj.booklist,function(i,v){
    //           if (v) {
             
    //             var qty =v.qty;
    //             var id = v.id;
                
    //             var quantity=booklist[i].qty--;
    //             alert(quantity);
    //             // $.post('rentqty.php',{quantity:quantity},function(response){
    //             //  alert(response);
    //             // })
    //           }                    

    // })


  </script>

  

  <script type="text/javascript">
    $('#lent').on('click',function () {
        var order = confirm('Are You Sure to order? ');
        if (order==true) {
          localStorage.clear();
          showtable();
            alert('Your Order Successfully complete');
        }
      })
  </script>

</body>

</html>


