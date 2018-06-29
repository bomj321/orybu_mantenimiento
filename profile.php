<?php session_start();
include('Connect.php');
$email=$_SESSION['uemail'];
if($email =="")
{
header("Location:membership.php");
}
include('head.php');
include('topbar.php');
include('middlebar.php');
?>
<?php
 $sql="SELECT * FROM users Where email='$email'"; 
$stmt=mysqli_query($connection,$sql);
if($stmt == false) {
trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $connection->error, E_USER_ERROR);
}
$nr=mysqli_num_rows($stmt);    
$row=$stmt->fetch_assoc();
$userId=$row['user_id'];
?>
       
        
        <!-- start section -->
        <section class="section white-background">
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
                                    <?php 
                                    $sql="SELECT * FROM cart2 WHERE email='$email'";

                                    $stmt=mysqli_query($connection,$sql);
                                    if($stmt == false) {
                                    trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $connection->error, E_USER_ERROR);
                                    }
                                    $nr=mysqli_num_rows($stmt);
                                    ?>
                                    <a href="cart.php">My Cart <span class="text-primary">
                                    <?php echo $nr; ?></span></a>
                                </li>
                                <li class="active">
                                    <a href="buyerorders.php">My Order</a>
                                </li>
                             
                            </ul>
                        </div><!-- end widget -->
                        
                    </div><!-- end col -->
                    <!-- end sidebar -->
                    <div class="col-sm-9">
                        <div class="row">
                <div class="row">
                    <div class="col-sm-12">
                      <center> <h3>My PROFILE</h3>		
    </center>
 <?php


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
		<td></br><?php echo $row['countryName']; ?></td>
		
	
       

<td></br>
         <a    href="updateuser.php?user_id=<?php echo $row['user_id'];?>"><i class="fa fa-pencil fa-fw"></i></a></td>
  
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
</br>
</br>
</br>
</div>
</div>
           <div class="row">
                    <div class="col-sm-12">
                      <center> <h3>MEMBERSHIP</h3>		
    </center>
 <?php
/*INNER JOIN seller ON(membership.email = seller.email)*/


 $sql="SELECT * FROM  membership Where membership.email='$email'";
 
$stmt=mysqli_query($connection,$sql);
if($stmt == false) {
trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $connection->error, E_USER_ERROR);
}
$nr=mysqli_num_rows($stmt);

if ($nr > 0)
 {
  ?>
  <div class="table-responsive"> 
  <table class="table table-bordered" style="background-color:#f2f2f2;">
     <tr>
      
        <th>Serial No</th>
        <th>Membership Type</th>
         <th>Start Date</th>
        <th>End Date</th>
		   <th>Price</th>
		   <th>Email</th>
		  
      </tr>
    </thead>
   

	
<tbody>
  <?php
    while($row=$stmt->fetch_assoc())
    {
	?>

      <tr>
       <td></br><?php echo $row['membershipid']; ?></td>
       
        <td></br><?php echo $row['membershiptype']; ?></td>
        <td></br><?php echo $row['startdate']; ?></td>
  
        <td></br><?php echo $row['enddate']; ?></td>
   
        <td></br><?php echo $row['price']; ?></td>
		<td></br><?php echo $row['email']; ?></td>
	
       


  
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
</br>
</br>
</br>
</div>
</div>
<?php
 $sql="SELECT * FROM seller  Where email='$email'";
 
$stmt=mysqli_query($connection,$sql);
if($stmt == false) {
trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $connection->error, E_USER_ERROR);
}
$nr=mysqli_num_rows($stmt);
$row=$stmt->fetch_assoc();?>
<div class="row">
                    <div class="col-sm-12" >
<center><h2>COMPANY INFORMATION</h2></center>
<table class="table tabla_perfil table-responsive" style="background-color:#f2f2f2;">
                   
                     <tr>
    			<th>Name of the bank</th>
			
					<td><br><?php echo $row['bank']; ?></td>
					</tr>
					 <tr>
    			<th>SWITF/BIC Code </th>
			
					<td><br><?php echo $row['bank_code']; ?></td>
					</tr>
					 <tr>
    			<th>Number Bank</th>
			
					<td><br><?php echo $row['number_bank']; ?></td>
					</tr>
					
                    <tr>
    			<th> Serial No</th>
			
					<td><br><?php echo $row['sellerid']; ?></td>
					</tr>
					
					
					<tr>
			<th>	Email</th>
			
						<td></br><?php echo $row['email']; ?></td>
						</tr>
					<tr>
			<th>	Company Name</th>
			
					<td></br><?php echo $row['company_name']; ?></td>
			</tr>
				<tr>
			<th>	Company Legal Number</th>
			
					<td></br><?php echo $row['companyLegalNo']; ?></td>
			</tr>
					
					<tr>
			<th>	Street</th>
			
					<td></br><?php echo $row['street']; ?></td>
					</tr>
					<tr>
			<th>	ZipCode</th>
			
					<td></br><?php echo $row['zipCode']; ?></td>
					</tr>
			<tr>
			<th>	Phone Number</th>
			
					<td></br><?php echo $row['phoneNo']. ' '. $row['phoneSSN']. ' '. $row['phoneNumber']; ?></td>
					</tr>		
					<tr>		
					<tr>
			<th>	City</th>
			
					<td></br><?php echo $row['city']; ?></td>
					</tr>
					
					<tr>
			<th>	Country Name</th>
			
					<td></br><?php echo $row['countryName']; ?></td>
					</tr>
					<tr>
			<th>	Province</th>
			
					<td></br><?php echo $row['province']; ?></td>
					</tr>

					<tr>
			<th>	BusinessType</th>
			
					<td></br><?php echo $row['businessType']; ?></td>
					</tr>
					<tr>
			<th>	No Of Employee</th>
			
					<td></br><?php echo $row['noOfEmployee']; ?></td>
					</tr>
					<tr>
			<th>	Company Description</th>
			
					<td colspan="5"></br><?php echo $row['companyDescription']; ?></td>
					</tr>
					<tr>
			<th>	Company Logo</th>
					<?php
							$stri_logo=$row['companylogo'];							
							?>
					<?php
						 if(!empty($stri_logo)) {
						 ?>
    								<td><img style="height:100px; width:100px;" src="images/<?php echo $stri_logo; ?>" /></td>
    								
    					<?php
							}
							?>
				
				
				
				
					</tr>

					<tr>
			<th>	Company License</th>
					<?php
							$stri1=$row['companylicense'];
							$stri2=$row['companylicense2'];
							$stri3=$row['companylicense3'];
							$stri4=$row['companylicense4'];
							$stri5=$row['companylicense5'];	
							?>
					<?php
						 if(!empty($stri1)) {
						 ?>
    								<td><img style="height:100px; width:100px;" src="images/<?php echo $stri1; ?>" /></td>
    								
    					<?php
							}
							?>
						 
							
							
						<?php
						 if(!empty($stri2)) {
						 ?>
    								<td><img style="height:100px; width:100px;" src="images/<?php echo $stri2; ?>" /></td>
    					<?php
							}
							?>
						
							
						<?php
						 if(!empty($stri3)) {
						 ?>
						<td><img style="height:100px; width:100px;" src="images/<?php echo $stri3; ?>" /></td>
    					<?php
							}
							?>
														
						<?php
						 if(!empty($stri4)) {
						 ?>
						<td><img style="height:100px; width:100px;" src="images/<?php echo $stri4; ?>" /></td>
    					<?php
							}
							?>
						
							
						<?php
						 if(!empty($stri5)) {
						 ?>
						<td><img style="height:100px; width:100px;" src="images/<?php echo $stri5; ?>" /></td>
    					<?php
							}
							?>
					
					</tr>
					
					
			
		  </tr>	
		  <tr>
		  </br>
		  <tr >
		  <td colspan="6">
        		  <center>

         <a   class="btn btn-success" href="updatesellerprofile.php?email=<?php echo $row['email'];?>">UPDATE </a>
         </center>

		 </td>
		 </tr>
         </table>
		 </div>
		 
		 </div>
    
   
   
					   
					   
                    </div><!-- end col -->    
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
		
		<!-- Trigger the modal with a button -->
  
   
<?php 

include('footer.php');
?>

    