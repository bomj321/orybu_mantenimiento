<?php session_start();
include('Connect.php');
include('head.php');


?>

    <body>
     <!-- start topBar -->
     <?php include('topbar.php');  
	include('middlebar.php');
	 ?>
	 <!-- end topBar -->
        
        
     
    
       <?php include('navh.php');
	   ?>
        <!-- start section -->
        <section class="section white-backgorund">
	
		
		<?php 
	
		$qry1="SELECT * FROM aboutus WHERE elementname='startsellingelement1'"; 
       $res1=mysqli_query($connection,$qry1);
	   //echo $va=mysqli_num_rows($res1);
	   $rw=mysqli_fetch_array($res1);
	   $rw['description'];
		?>
            <div class="container">
			  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="title-wrap">
                            <h2 >Start Selling</h2>
                          
                        </div>
                    </div><!-- end col -->
                    
                   
                    
                    
                </div><!-- end row -->
                
                <div class="row">
                    <div class="col-sm-4">
                        
                        <h5><?php echo $rw['title'];?></h5>
                        <p><?php echo $rw['description'];?></p>
                        <?php
                        $sql="Select * from `images` Where id='31'";
                        $result=mysqli_query($connection,$sql);
                        $row=mysqli_fetch_array($result);
                        $image=$row['image'];
                        ?>
						<figure>
                            <img style="height:300px;" src="images/<?php echo $image;?>" alt="" />
                        </figure>
                    </div><!-- end col -->
			<?php
			$qry2="SELECT * FROM aboutus WHERE elementname='startsellingelement2'"; 
       $res2=mysqli_query($connection,$qry2);
	   //echo $va=mysqli_num_rows($res1);
	   $rw2=mysqli_fetch_array($res2);
	   $rw2['description'];
		?>
					  <div class="col-sm-4">
                        
                        <h5><?php echo $rw2['title'];?></h5>
                        <p><?php echo $rw2['description'];?></p>
                        <?php
                        $sql="Select * from `images` Where id='32'";
                        $result=mysqli_query($connection,$sql);
                        $row=mysqli_fetch_array($result);
                        $image=$row['image'];
                        ?>
						<figure>
                            <img style="height:300px;" src="images/<?php echo $image;?>" alt="" />
                        </figure>
                    </div><!-- end col -->
						<?php
			$qry3="SELECT * FROM aboutus WHERE elementname='startsellingelement3'"; 
       $res3=mysqli_query($connection,$qry3);
	   //echo $va=mysqli_num_rows($res1);
	   $rw3=mysqli_fetch_array($res3);
	   $rw3['description'];
		?>
					  <div class="col-sm-4">
                        
                        <h5><?php echo $rw3['title'];?></h5>
                        <p><?php echo $rw3['description'];?></p>
                        <?php
                        $sql="Select * from `images` Where id='33'";
                        $result=mysqli_query($connection,$sql);
                        $row=mysqli_fetch_array($result);
                        $image=$row['image'];
                        ?>
						<figure>
                            <img style="height:300px;" src="images/<?php echo $image;?>" alt="" />
                        </figure>
                    </div><!-- end col -->
                
       
               
         
                 
                </div><!-- end row -->
                <div class="row" style="margin-top: 40px;">
                    <div class="col-md-12">
                        <center>
                             <a type="button" class="btn btn-success btn-lg" href="product_add.php">UPLOAD PRODUCT</a>
                        </center>
                    </div>
                </div>
        
            </div><!-- end container -->
        </section>
        <!-- end section -->
       <?php include('footer.php');
?>        
        <!-- JavaScript Files -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/jquery.downCount.js"></script>
        <script type="text/javascript" src="js/nouislider.min.js"></script>
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/pace.min.js"></script>
        <script type="text/javascript" src="js/star-rating.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript" src="js/gmaps.js"></script>
        <script type="text/javascript" src="js/swiper.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        
    </body>
</html>