<?php session_start();
require 'Connect.php';  
include('head.php');

 //include_once 'checkactiveusers.php';
if(isset($_SESSION['firstName'])){
	 ?>
	 <script>
	 window.location.href="artistchat.php";
	 </script>
	 <?php
 }
?>
	

    <body> 
        
        <!-- start topBar -->
       <?php require 'topbar.php';
        require 'middlebar.php';
		require 'navh.php';
		?>
        <!-- end topBar -->
        
        <!-- start navbar -->
        
        
        
        
        <!-- start section -->
        <section class="section white-backgorund">
            <div class="container">
                <div class="row">
				  <div class="col-sm-2">  </div> 
                    <!-- start sidebar -->
                   <!-- end col -->
                    <!-- end sidebar -->
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-12 text-left">
                                <h2 class="title">CHAT </h2>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        
                        <hr class="spacer-5"><hr class="spacer-20 no-border">
                    
                        <div class="row">
                            <div class="col-sm-12" style="background-color: #98AFC7">
                                
								<center>  <h1 class="title">Select User To Chat With</h1>
             </center>
            <div id="container1">
 <div id="chat_box1">
 <div id="chat_data1">
  <br>  <br>
 <?php

 
 $query = "SELECT * FROM users where `status`='online'";
	$result =(mysqli_query($connection, $query));
  while($row = mysqli_fetch_array($result))
  {
	  ?>
  <span style="color:black;font-size:15px"><?php echo $row['firstName']; ?>  </span>
  
  <?php 
  if($row['status']=="offline"){
  ?>
   (<span style="color:red;"><?php echo $row['status']; ?></span>)
  <?php }else{ ?>
   (<span style="color:green;"><?php echo $row['status']; ?></span>)
  <?php } ?>
    <span style="float:right;"><a class="button" style="background-color:#4ebd4e;color:white" href="userdetails.php?artistid=<?php echo $row['firstName']?>">Start Chat</a></span> 
	
   <br>
   <hr>
     <?php
	 
  }
  
	   ?>  <br>
       
            </div>
             </div>
            
            
								
                                <hr class="spacer-10 no-border">
                                
                              
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->
                </div><!-- end row -->                
            </div><!-- end container -->
        </section>
        <!-- end section -->
               
          <?php 
	   include ("footer.php");
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