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
        <section class="section white-backgorund">
            <div class="container">
                <div class="row">
                    <!-- start sidebar -->
                    <div class="col-sm-3">
                        <div class="widget">
                            <h3>Navegación de la Cuenta</h3>
                            
                            <ul class="list list-unstyled">
                                <li>
                                    <a href="buyeraccount.php">Mi Cuenta</a>
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
                                    <a href="cart.php">Mi Carrito <span class="text-primary">
                                    <?php echo $nr; ?></span></a>
                                </li>
                                <li class="active">
                                    <a href="buyerorders.php">Mis Pedidos</a>
                                </li>
                            </ul>
                        </div><!-- end widget -->
                        
                    </div><!-- end col -->
                    <!-- end sidebar -->
                    <div class="col-sm-9">
                        <div class="row">
                <div class="row">
                    <div class="col-sm-12">
                      <center> <h3>Mi Perfil</h3>		
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
        <th>Nombre</th>
         <th>Apellido</th>
        <th>Email</th>
		 <th>País</th>      
         <th>Editar</th>   
         
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
                      <center> <h3>Membresia</h3>		
    </center>
 <?php

/*INNER JOIN seller ON(membership.email = seller.email)*/

 $sql="SELECT * FROM  membership  Where membership.email='$email'";
 
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
      
        <th>Serial No</th>
        <th>Tipo de Membresia</th>
         <th>Comienzo</th>
        <th>Finalización</th>
		   <th>Precio</th>
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
$row=$stmt->fetch_assoc()?>
<div class="row">
                    <div class="col-sm-12" >
<center><h2>Información de la Compañia</h2>
</center>



<table class="table tabla_perfil table-responsive" style="background-color:#f2f2f2;">
   
   <tr>
    			<th >Número del Banco</th>
			
					<td><br><?php echo $row['bank']; ?></td>
					</tr>
					 <tr>
    			<th>Código SWITF/BIC  </th>
			
					<td><br><?php echo $row['bank_code']; ?></td>
					</tr>
					 <tr>
    			<th>Número del Banco</th>
			
					<td><br><?php echo $row['number_bank']; ?></td>
					</tr>
					
                    <tr>
    			<th>Serial No</th>
			
					<td><br><?php echo $row['sellerid']; ?></td>
					
					<tr>
			<th>	Email</th>
			
						<td></br><?php echo $row['email']; ?></td>
						</tr>
					<tr>
			<th>	Nombre</th>
			
					<td></br><?php echo $row['company_name']; ?></td>
			</tr>
				<tr>
			<th>	Número Legal</th>
			
					<td></br><?php echo $row['companyLegalNo']; ?></td>
			</tr>
					
					<tr>
			<th>	Calle</th>
			
					<td></br><?php echo $row['street']; ?></td>
					</tr>
					<tr>
			<th>	Codigo Postal</th>
			
					<td></br><?php echo $row['zipCode']; ?></td>
					</tr>
			<tr>
			<th>	Numero Telefonico</th>
			
					<td></br><?php echo $row['phoneNo']. ' '. $row['phoneSSN']. ' '. $row['phoneNumber']; ?></td>
					</tr>		
					<tr>
			<th>	Ciudad</th>
			
					<td></br><?php echo $row['city']; ?></td>
					</tr>
					
					<tr>
			<th>	Nombre del País</th>
			
					<td></br><?php echo $row['countryName']; ?></td>
					</tr>
					<tr>
			<th>	Provincia</th>
			
					<td></br><?php echo $row['province']; ?></td>
					</tr>
						
					<tr>
			<th>	Tipo de Negocio</th>
			
					<td></br><?php echo $row['businessType']; ?></td>
					</tr>
					<tr>
			<th>	Número de Empleados</th>
			
					<td></br><?php echo $row['noOfEmployee']; ?></td>
					</tr>
					<tr>
			<th>	Descripción de la Compañia</th>
			
					<td colspan="5"></br><?php echo $row['companyDescription']; ?></td>
					</tr>
					<tr>
			<th>	Logo de la Compañia</th>
			
					<?php
							$stri_logo=$row['companylogo'];							
							?>
					<?php
						 if(!empty($stri_logo)) {
						 ?>
    								<td><img style="height:100px; width:100px;" src="../../images/<?php echo $stri_logo; ?>" /></td>
    								
    					<?php
							}
							?>
					</tr>
					<tr>
			<th>	Licencia de la Compañia</th>
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
    								<td><img style="height:100px; width:100px;" src="../../images/<?php echo $stri1; ?>" /></td>
    								
    					<?php
							}
							?>
						 
							
							
						<?php
						 if(!empty($stri2)) {
						 ?>
    								<td><img style="height:100px; width:100px;" src="../../images/<?php echo $stri2; ?>" /></td>
    					<?php
							}
							?>
						
							
						<?php
						 if(!empty($stri3)) {
						 ?>
						<td><img style="height:100px; width:100px;" src="../../images/<?php echo $stri3; ?>" /></td>
    					<?php
							}
							?>
														
						<?php
						 if(!empty($stri4)) {
						 ?>
						<td><img style="height:100px; width:100px;" src="../../images/<?php echo $stri4; ?>" /></td>
    					<?php
							}
							?>
						
							
						<?php
						 if(!empty($stri5)) {
						 ?>
						<td><img style="height:100px; width:100px;" src="../../images/<?php echo $stri5; ?>" /></td>
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

         <a   class="btn btn-success" href="updatesellerprofile.php?email=<?php echo $row['email'];?>">ACTUALIZAR</a>
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

    