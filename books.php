<?php
    session_start();
    if (isset($_SESSION['userid'])) {
    
?>


<?php 

require 'header.php';  

   
?>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Books</h2>
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="books.html">Books</a>
						</div>
					</div>
				</div>
            </div>
        </section>
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
                    <?php 
                        require 'backend/database.php';
                        $sql = "select * from books ";
                        $result=$conn->query($sql);
                        // $bookresult = $result->fetchAll();
                        // $statement = $conn->prepare($sql);
                        // $statement->execute();
                        // $result = $statement->fetchAll();
                        while ($row=$result->fetch_assoc()) {
                            $id = $row['id'];
                            $photo = $row['photo'];
                            $name = $row['name'];
                            $qty = $row['qty'];
                            
                                
                            

                //foreach ($result as $key => $value) {
                ?>
                    <div class="col-md-2 my-2">
                        <div class="grid_item wd100">
                            <div class="courses_item"> 
                                <img src="backend/<?php echo $photo ?>" alt="" class="img-fluid"><br><?php if ($qty==0) { ?> <h5>Book Unavailable</h5><?php }?>
                                <div class="hover_text">
                                    <a href="bookdetail.php?id=<?php echo $id; ?>"><h4><?php echo $name ?></h4></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    </div>
                    
                    
                    <div class="text-center mx-auto my-5">
                        <a class="main_btn" href="#">View More</a>
                    </div>
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

<?php
    }else{
      header('location: login.php');
    }
?>