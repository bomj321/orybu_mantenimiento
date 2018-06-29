<?php session_start();
$email= $_SESSION['uemail'];  
include 'Connect.php';

        $pid = $_REQUEST['pid'];
		 $producttoplist = $_REQUEST['producttoplist'];
		if($producttoplist==0)
		{
			 $sql_top = "SELECT limitTopList  FROM seller WHERE email='$email'";
             $result_top = mysqli_query($connection,$sql_top);
             $row_top=mysqli_fetch_array($result_top);
             $top_disponible= $row_top['limitTopList'];

            /* $sql_numero = "SELECT *  FROM products WHERE email='$email'";
             $result_numero = mysqli_query($connection,$sql_numero);

                 $sumador_total_limite=0;
            	 while($row_limite=mysqli_fetch_array($result_numero)){
             	 $total_limite=$row_limite['producttoplist'];
             	 $sumador_total_limite+=$total_limite;
            		 }*/


            	if (($top_disponible-1)>0) {
            		 	$sql = "UPDATE products SET producttoplist='1'  WHERE pid ='$pid'";
            		 	mysqli_query($connection,$sql);


            		 	$row_nuevo =$top_disponible-1;
            		 	$sql_actualizar = "UPDATE seller SET limitTopList='$row_nuevo'  WHERE email ='$email'";
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
									alert("Producto Mostrado en Lista Superior");
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
							    alert("Limite Excedido");
							    window.location.href="suppliers.php";
							    </script>
							   ';

            		 }
		}
		else if($producttoplist==1)
		{

			 

						 $sql_top = "SELECT limitTopList  FROM seller WHERE email='$email'";
			             $result_top = mysqli_query($connection,$sql_top);
			             $row_top=mysqli_fetch_array($result_top);
			             $top_disponible= $row_top['limitTopList'];


                        $row_nuevo =$top_disponible+1;
            		 	$sql_actualizar = "UPDATE seller SET limitTopList='$row_nuevo'  WHERE email ='$email'";
            		 	mysqli_query($connection,$sql_actualizar);

            		 	$sql = "UPDATE products SET producttoplist  ='0' WHERE pid ='$pid' ";
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
									alert("El Producto ya no es mostrado");
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

?>