<?php


require 'backend/database.php';
require 'header.php'; 
require 'backend/database.php';
//require 'function.php';


   /* if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $tablename = 'books';
        $book = bookdetail($tablename,$id,$connection);
        print_r($book);
    }else{
        echo "Something went wrong!";
        exit();
    }*/
    
    

?>
        <!--================End Home Banner Area =================-->
        
        <!--================Courses Area =================-->
        <section class="courses_area p_120">
        	<div class="container">
    			<div class="row">
                    <div class="col-lg-12">
                        <blockquote class="generic-blockquote">
                            <h2>Featured Books</h2>
                            “Recently, the US Federal government banned online casinos from operating in America by  
                        </blockquote>
                    </div>
                </div>

        		<div class="row courses_inner my-5">
                    <div class="col-md-4 my-2">
                        <div class="grid_item wd100">

                            <?php 
                                require 'backend/database.php';
                                $id = $_REQUEST['id'];

                                $sql="SELECT i.*,a.name as author_id,c.name as category_id FROM books i INNER JOIN authors a ON i.author_id=a.id INNER JOIN categories c ON i.category_id=c.id where i.id=$id";
                                // $sql = "select * from books ";
                                $result=$conn->query($sql);
                                
                                while ($row=$result->fetch_assoc()) {

                                    $photo = $row['photo'];
                                    $description = $row['description'];
                                    $name = $row['name'];
                                    $author = $row['author_id'];
                                    $category = $row['category_id'];                                
                                    $qty = $row['qty'];
                                    
                                    $lendprice = $row['lendprice'];
                                                                  
                               
                            ?> 
                            <div class="courses_item">
                                <img src="backend/<?php echo $photo; ?>" alt="" class="img-fluid">                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 my-2">
                        <div class="grid_item wd100">
                            <div class="courses_item">
                                <form>
                                  <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Book Description</label>
                                    <div class="col-sm-9">
                                      <p class="h6 my-2"><?php echo $description; ?></p>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                      <p class="h6 my-2"><?php echo $name; ?> </p>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Author</label>
                                    <div class="col-sm-9">
                                      <p class="h6 my-2"><?php echo $author; ?> </p>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Category</label>
                                    <div class="col-sm-9">
                                      <p class="h6 my-2"><?php echo $category; ?> </p>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Quantity</label>
                                    <div class="col-sm-9">
                                      <p class="h6 my-2"><?php echo $qty; ?> </p>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Lend Price</label>
                                    <div class="col-sm-9">
                                      <p class="h6 my-2"><?php echo $lendprice; ?> </p>
                                    </div>
                                  </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
               <?php } ?>
                </div>

                <div class="row">
                    <div class="section-top-border">
                        <div class="row">
                            <div class="col-md-6 my-3">
                                <div class="single-defination">
                                    <h4 class="mb-20 text-center">Authors</h4>
                                    <a href="#" class="btn btn-outline-secondary">Loon Htar Htar</a>
                                    <a href="#" class="btn btn-outline-secondary">Juu</a>
                                    <a href="#" class="btn btn-outline-secondary">Nway Thit Nyein</a>
                                    <a href="#" class="btn btn-outline-secondary">Mg Thein Lwin</a>
                                    <a href="#" class="btn btn-outline-secondary">La Yaung Que Yint</a>
                                    <a href="#" class="btn btn-outline-secondary">Aa Kyi Taw</a>
                                    <a href="#" class="btn btn-outline-secondary">Su Myat Mon Mon</a>
                                    <a href="#" class="btn btn-outline-secondary">PONE NYA KHIN</a>
                                    <a href="#" class="btn btn-outline-secondary">PHAY MYINT</a>
                                </div>
                            </div>
                            <div class="col-md-6 my-3">
                                <div class="single-defination categories">
                                    <h4 class="mb-20 text-center">HISTORY</h4>
                                    <a href="#" class="btn btn-outline-secondary">Web Designer</a>
                                    <a href="#" class="btn btn-outline-secondary">POEM</a>
                                    <a href="#" class="btn btn-outline-secondary">Frameworks</a>
                                    <a href="#" class="btn btn-outline-secondary">NOVEL</a>
                                    <a href="#" class="btn btn-outline-secondary">Networking</a>
                                    <a href="#" class="btn btn-outline-secondary">Cyber Security</a>
                                    <a href="#" class="btn btn-outline-secondary">MODERN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
        </section>
        <!--================End Courses Area =================-->
        
        <!--================Pagkages Area =================-->
        <section class="packages_area p_120">
        	<div class="container">
        		<div class="row packages_inner">
        			<div class="col-lg-4">
        				<div class="packages_text">
        					<h3>Choose <br />Course Packages</h3>
        					<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="packages_item">
        					<div class="pack_head">
        						<i class="lnr lnr-graduation-hat"></i>
        						<h3>Premium</h3>
        						<p>For the individuals</p>
        					</div>
        					<div class="pack_body">
        						<ul class="list">
        							<li><a href="#">Secure Online Transfer</a></li>
        							<li><a href="#">Unlimited Styles for interface</a></li>
        							<li><a href="#">Reliable Customer Service</a></li>
        						</ul>
        					</div>
        					<div class="pack_footer">
        						<h4>£399.00</h4>
        						<a class="main_btn" href="#">Join Now</a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="packages_item">
        					<div class="pack_head">
        						<i class="lnr lnr-diamond"></i>
        						<h3>Exclusive</h3>
        						<p>For the individuals</p>
        					</div>
        					<div class="pack_body">
        						<ul class="list">
        							<li><a href="#">Secure Online Transfer</a></li>
        							<li><a href="#">Unlimited Styles for interface</a></li>
        							<li><a href="#">Reliable Customer Service</a></li>
        						</ul>
        					</div>
        					<div class="pack_footer">
        						<h4>£399.00</h4>
        						<a class="main_btn" href="#">Join Now</a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Pagkages Area =================-->
        
       


        <!--================ start footer Area  =================-->	
        <?php require 'footer.php'; ?>