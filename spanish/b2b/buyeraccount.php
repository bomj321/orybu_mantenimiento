<?php session_start();
include('Connect.php');
include('head.php');
/*$sql = "SHOW COLUMNS FROM products";
$result = mysqli_query($connection,$sql);
while($row = mysqli_fetch_array($result)){
echo $row['Field']."<br>";
}
*/
?>
    <body>
            <?php
	include('topbar.php');
	include('middlebar.php');
	include('navh.php');
	 ?>
	 <!-- end topBar -->



        <!-- start section -->
        <section class="section white-backgorund">
            <div class="container">
                <div class="row">
                    <!-- start sidebar -->
                    <div class="col-sm-3">
                        <div class="widget">
                            <h3>Account Navigation</h3>

                            <ul class="list list-unstyled">
                                <li>
                                    <a href="buyeraccount.php">My Account</a>
                                </li>
                                <li>
                                      <a href="cart.php">My Cart <span class="text-primary">(<?php echo "".sizeof($_SESSION['cart'])."";?>)</span></a>
                                </li>
                                <li class="active">
                                    <a href="buyerorders.php">My Order</a>
                                </li>

                            </ul>
                        </div><!-- end widget -->

                        <div class="widget">
						<?php $query="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) Limit 2,3 ";
                           $result=mysqli_query($connection,$query);
						   $row=mysqli_fetch_array($result);

							    $myString = $row['image'];
								$productType=$row['productType'];
								$cl = explode(',', $myString);
			   ?>
                            <h6 class="subtitle">New Collection</h6>
                            <figure>
                                <a href="javascript:void(0);">
                                    <img  style="height: 301px; width:250px;" src="../../images/<?php echo $cl[0];?>" alt="><?php echo $row['ntitle']; ?>">
                                </a>
                            </figure>
                        </div><!-- end widget -->

                    </div><!-- end col -->
                    <!-- end sidebar -->
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-12 text-left">
                                <h2 class="title">My Account</h2>
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <hr class="spacer-5"><hr class="spacer-20 no-border">

                        <div class="row">
                  <?php
 $email=$_SESSION['uemail'];

 $sql="SELECT * FROM users  Where email='$email'";

$stmt=mysqli_query($connection,$sql);
if($stmt == false) {
trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $connection->error, E_USER_ERROR);
}
$nr=mysqli_num_rows($stmt);

if ($nr > 0)
 {
  ?>
  <div class="table-responsive">
  <table class="table table-bordered" style="background-color:#f2f2f2">
     <tr>

        <th>ID</th>
        <th>First Name</th>
         <th>Last Name</th>
        <th>Email</th>
		   <th>Password</th>
		 <th>Country NAme</th>

         <th>Action</th>


      </tr>
    </thead>



<tbody>
  <?php
    while($row=$stmt->fetch_assoc())
    {
	?>

      <tr>
       <td></br><?php echo $row['user_id']; ?></td>

        <td></br><?php echo $row['firstName']; ?></td>
        <td></br><?php echo $row['lastName']; ?></td>

        <td></br><?php echo $row['email']; ?></td>

        <td></br><?php echo $row['password']; ?></td>
		<td></br><?php echo $row['countryName']; ?></td>




<td></br>
         <a    href="updatebuyeraccount.php?user_id=<?php echo $row['user_id'];?>"><i class="fa fa-pencil fa-fw"></i></a></td>

      </tr>

 <?php
	}
?>
</tbody>

</table>
</div>

<?php
}
else{
  ?>
   <th></th>
<?php
}
?>

                        </div><!-- end row -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end section -->
     <?php
	 include('footer.php');
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
