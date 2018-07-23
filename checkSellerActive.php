<?php session_start();
$email= $_SESSION['uemail'];  
include 'Connect.php';

        $pid = $_REQUEST['pid'];
		 $productaction = $_REQUEST['productaction'];
		if($productaction==0)
		{

				 $sql_top = "SELECT limitShowCase  FROM seller WHERE email='$email'";
			             $result_top = mysqli_query($connection,$sql_top);
			             $row_top=mysqli_fetch_array($result_top);
			             $top_disponible= $row_top['limitShowCase'];


                        $row_nuevo =$top_disponible+1;
            		 	$sql_actualizar = "UPDATE seller SET limitShowCase='$row_nuevo'  WHERE email ='$email'";
            		 	mysqli_query($connection,$sql_actualizar);

            		 	$sql = "UPDATE products SET productaction  ='2' WHERE pid ='$pid' ";
			            mysqli_query($connection,$sql);



            // MENSAJE DE ERROR
            		 	 $stmt = $connection->prepare($sql);
						     if($stmt === false) {
						                trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $connection->error, E_USER_ERROR);
						            }
						 
							
									if($stmt->execute())
									{
									?>
									<script>
									alert("Show Case Changed");
									window.location.href ="suppliers.php";
									</script>
									<?php
									}
									else
									{
									?>
									<script>
									alert("Error In Changing");
									window.location.href ="suppliers.php";
									</script>
									<?php
									}
						// MENSAJE DE ERROR

		}
		
		else if($productaction==2)
		{

		     $sql_top = "SELECT limitShowCase FROM seller WHERE email='$email'";
             $result_top = mysqli_query($connection,$sql_top);
             $row_top=mysqli_fetch_array($result_top);
             $top_disponible= $row_top['limitShowCase'];

             if (($top_disponible-1)>=0) {
             			$fecha = date('Y-m-d');
						$nuevafecha = strtotime ( '+2 day' , strtotime ( $fecha ) ) ;
						$nuevafecha = date ( 'Y-m-d' , $nuevafecha );
            		 	$sql = "UPDATE products SET productaction='0', fecha_show_case= '$nuevafecha'  WHERE pid ='$pid'";
            		 	mysqli_query($connection,$sql);
            		 	

            		 	$row_nuevo =$top_disponible-1;
            		 	$sql_actualizar = "UPDATE seller SET limitShowCase='$row_nuevo'  WHERE email ='$email'";
            		 	mysqli_query($connection,$sql_actualizar);
            		 // MENSAJE DE ERROR
            		 	 $stmt = $connection->prepare($sql_actualizar);
						     if($stmt === false) {
						                trigger_error('Wrong SQL: ' . $sql_actualizar . ' Error: ' . $connection->error, E_USER_ERROR);
						            }
						 
							
									if($stmt->execute())
									{
									?>
									<script>
									alert("The product will be displayed for 2 days");
									window.location.href ="suppliers.php";
									</script>
									<?php
									}
									else
									{
									?>
									<script>
									alert("Error In Changing");
									window.location.href ="suppliers.php";
									</script>
									<?php
									}

						// MENSAJE DE ERROR
            		 }else{
            		 	 echo'
							    <script>
							    alert("Limit Exceed");
							    window.location.href="suppliers.php";
							    </script>
							   ';

            		 }

		   
		}
     
 	

?>