<?php session_start();
include('Connect.php');
 $email=$_SESSION['uemail'];
 $sql="SELECT * FROM users Where email='$email'";
 
$stmt=mysqli_query($connection,$sql);
if($stmt == false) {
trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $connection->error, E_USER_ERROR);
}
$nr=mysqli_num_rows($stmt);    
$row=$stmt->fetch_assoc();
 $userId=$row['user_id']; 

if(isset($_POST['save']))
	{

	 
 $query="SELECT * FROM seller Where email='$email'";
 
$stmtt=mysqli_query($connection,$query);
if($stmtt == false) {
trigger_error('Wrong SQL: ' . $query . ' Error: ' . $connection->error, E_USER_ERROR);
}
 $nr=mysqli_num_rows($stmtt);    
$rows=mysqli_fetch_array($stmtt);
 $totalproduct=$rows['limitTotalProduct']; 

 $producttopList=$rows['limitTopList']; 
 $productshowcase=$rows['limitShowCase']; 

	   /////////////////////////////
	   		$payment = $_POST['payment'];
	        $catid = $_POST['catid'];// item name
			$subcatid = $_POST['subcatid'];// item name
		    $title = $_POST['title'];// item name
			$keyword = $_POST['keyword'];	
	 		$catid = $_POST['catid'];// item name
		    $title = $_POST['title'];// item name
			$keyword = $_POST['keyword'];
			$slctedkeyword=$_POST['selectedkeyword'];
			$dropcountry = $_POST['dropcountry'];//dropcountry
			$port=$_POST['port'];
			$wquantity=$_POST['wquantity'];
			$dropweight =$wquantity.' '.$_POST['dropweight'];			
			$vquantity=$_POST['vquantity'];
			$dropvolum=$vquantity.' '.$_POST['dropvolum'];
			$dquantity=$_POST['dquantity'];
			$dquantity2=$_POST['dquantity2'];
			$dquantity3=$_POST['dquantity3'];
			$dquantity4=$_POST['dropdimension'];
			$cquantity=$_POST['cquantity'];			
			$dropcapacity=$cquantity.' '.$_POST['dropcapacity'];
			$equantity=$_POST['equantity'];
			$dropenergy= $equantity.' '.$_POST['dropenergy'];
			$rotation=$_POST['rotation'];
			$elobration=$_POST['elobration'];
			$use=$_POST['use'];
		    $size=$_POST['size'];
			$packaging=$_POST['packaging'];
			$productType = $_POST['productType'];
			$productType2 = $_POST['productType'];

			if ($productType = 'Eco Friendly' or $productType = 'Innovation') {
				$productType = 'Normal Product';
			}
			//$showcaseid=$_POST['showcaseid'];
			//$showtoplist=$_POST['showtoplist'];

			$description = $_POST['description'];
			$fob=$_POST['fobprice'];
			$fob_unit=$_POST['dropminimum'];
			$quantity=$_POST['oquantity'];
			$oquantity=$quantity.' '.$_POST['dropminimum2'];	
			$showcaseid=$_POST['showcaseid'];
			$showtoplist=$_POST['showtoplist'];	
			$delivery=$_POST['delivery_details'];				
	    	$description = $_POST['description'];// item name			
			$subcatid = $_POST['subcatid'];// item name
			if($_POST['showcaseid'] !="")
			{
			}
			else if($productstatus =="")
			{
			 $productstatus=1;
			}
			if($_POST['showtoplist'] !="")
			{
			}
		//$productType = $_POST['productType'];// item name
			
			///SUBIR IMAGENES
		$target_dir = "images/";

	if($_FILES["imagenes_logo"]["name"] !="" AND !empty($_FILES["imagenes_logo"]["name"]) AND (strpos($_FILES["imagenes_logo"]["type"],'gif') || strpos($_FILES["imagenes_logo"]["type"],'jpeg') || strpos($_FILES["imagenes_logo"]["type"],'png') || strpos($_FILES["imagenes_logo"]["type"],'jpg')))
{
		  $target_file = $target_dir . basename($_FILES["imagenes_logo"]["name"] );
		  $images=$_FILES['imagenes_logo']['name'];
		  $filelocation = $target_dir.$images;
          $temp = $_FILES['imagenes_logo']['tmp_name'];
		  move_uploaded_file($temp, $filelocation);
}
	
	if($_FILES["imagenes_action1"]["name"] !="" AND !empty($_FILES["imagenes_action1"]["name"]) AND (strpos($_FILES["imagenes_action1"]["type"],'gif') || strpos($_FILES["imagenes_action1"]["type"],'jpeg') || strpos($_FILES["imagenes_action1"]["type"],'png') || strpos($_FILES["imagenes_action1"]["type"],'jpg')))
{
		 	$target_file = $target_dir . basename($_FILES["imagenes_action1"]["name"]);
			$image1=$_FILES['imagenes_action1']['name'];
			$filelocation = $target_dir.$image1;
			$temp1 = $_FILES['imagenes_action1']['tmp_name'];
			move_uploaded_file($temp1, $filelocation);
}	
	if($_FILES["imagenes_action2"]["name"] !="" AND !empty($_FILES["imagenes_action2"]["name"]) AND (strpos($_FILES["imagenes_action2"]["type"],'gif') || strpos($_FILES["imagenes_action2"]["type"],'jpeg') || strpos($_FILES["imagenes_action2"]["type"],'png') || strpos($_FILES["imagenes_action2"]["type"],'jpg')))
{

			$target_file = $target_dir . basename($_FILES["imagenes_action2"]["name"]);
			$image2=$_FILES['imagenes_action2']['name'];
			$filelocation = $target_dir.$image2;
			$temp2 = $_FILES['imagenes_action2']['tmp_name'];
}	        move_uploaded_file($temp2, $filelocation);
	
	if($_FILES["imagenes_action3"]["name"] !="" AND !empty($_FILES["imagenes_action3"]["name"]) AND (strpos($_FILES["imagenes_action3"]["type"],'gif') || strpos($_FILES["imagenes_action3"]["type"],'jpeg') || strpos($_FILES["imagenes_action3"]["type"],'png') || strpos($_FILES["imagenes_action3"]["type"],'jpg')))
{
		
			$target_file = $target_dir . basename($_FILES["imagenes_action3"]["name"]);
			$image3=$_FILES['imagenes_action3']['name'];
			$filelocation = $target_dir.$image3;
			$temp3 = $_FILES['imagenes_action3']['tmp_name'];
			move_uploaded_file($temp3, $filelocation); 
 }	
	if($_FILES["imagenes_action4"]["name"] !="" AND !empty($_FILES["imagenes_action4"]["name"]) AND (strpos($_FILES["imagenes_action4"]["type"],'gif') || strpos($_FILES["imagenes_action4"]["type"],'jpeg') || strpos($_FILES["imagenes_action4"]["type"],'png') || strpos($_FILES["imagenes_action4"]["type"],'jpg')))
{

			$target_file = $target_dir . basename($_FILES["imagenes_action4"]["name"]);
			$image4=$_FILES['imagenes_action4']['name'];
			$filelocation = $target_dir.$image4;
			$temp4 = $_FILES['imagenes_action4']['tmp_name'];
			move_uploaded_file($temp4, $filelocation); 		
 }
	if($_FILES["imagenes_action5"]["name"] !="" AND !empty($_FILES["imagenes_action5"]["name"]) AND (strpos($_FILES["imagenes_action5"]["type"],'gif') || strpos($_FILES["imagenes_action5"]["type"],'jpeg') || strpos($_FILES["imagenes_action5"]["type"],'png') || strpos($_FILES["imagenes_action5"]["type"],'jpg')))
{
			$target_file = $target_dir . basename($_FILES["imagenes_action5"]["name"]);
			$image5=$_FILES['imagenes_action5']['name'];
			$filelocation = $target_dir.$image5;
			$temp5 = $_FILES['imagenes_action5']['tmp_name'];
			move_uploaded_file($temp5, $filelocation); 
 }

	
			 
		 ////////////////////////////////////////////////

			  			 //$query="INSERT INTO products(catid,subcatid,ntitle,keywords,selectedkeyword,country,port,weight,volume,dimension,capacity,energypower,rotationspeed,elaboration,puse,psize,packing,certification,price,miniorder,fulldescription,image,producttoplist,productType,productType2, productaction,user_id,delivery_details)VALUES('$catid','$subcatid','$title','$keyword','$slctedkeyword','$dropcountry','$port','$dropweight','$dropvolum','$dropdimension','$dropcapacity','$dropenergy','$rotation','$elobration','$use','$size','$packaging','$fileimage1','$fobprice','$dropminimum','$description','$image1,$image2,$image3,$image4','$showtoplist','$productType','$productType2','$productstatus','$userId','$delivery_details')";

			$query="INSERT INTO products(email,catid,subcatid,ntitle,keywords,selectedkeyword,country,port,weight,volume,dimension,dimension2,dimension3,dimension4,capacity,energypower,rotationspeed,elaboration,puse,psize,packing,certification,price,price_unit,miniorder,fulldescription,image,image2,image3,image4,image5,producttoplist,productType,productType2,productaction,user_id,delivery_details, payment)VALUES
			('$email','$catid','$subcatid','$title','$keyword','$slctedkeyword','$dropcountry','$port','$dropweight','$dropvolum','$dquantity','$dquantity2','$dquantity3','$dquantity4','$dropcapacity','$dropenergy','$rotation','$elobration','$use','$size','$packaging','$images','$fob','$fob_unit','$oquantity','$description','$image1','$image2', '$image3','$image4','$image5','$showtoplist','$productType','$productType2','$productstatus','$userId','$delivery', '$payment')";
			
	
		 
	
		$result = $connection->prepare($query);
			if($result === false) {
		trigger_error('Wrong SQL: ' . $query . ' Error: ' . $conn->error, E_USER_ERROR);
		echo "Insercion no exitosa";
	}
	
		

			if($result->execute())
			{
			if($_POST['showcaseid'] !="")
			{
			 $limitShowCase=$productshowcase-1;
			  $showcase="UPDATE seller  SET limitShowCase='".$limitShowCase."'  WHERE (email='$email')";
			 mysqli_query($connection,$showcase);
				 $result1 = $connection->prepare($showcase);
				 if($result1 === false) {
			trigger_error('Wrong SQL: ' . $showcase . ' Error: ' . $connection->error, E_USER_ERROR);
			}
			$result1->execute();
			}
			if($producttoplist =='1')
			{
			 $limitTopList=$producttopList-1;
			  $toplist="UPDATE seller  SET limitTopList='".$limitTopList."'  WHERE (email='$email')";
			 mysqli_query($connection,$toplist);
				 $result2 = $connection->prepare($toplist);
				 if($result2 === false) {
			trigger_error('Wrong SQL: ' . $toplist . ' Error: ' . $connection->error, E_USER_ERROR);
			}
			$result2->execute();
			}
			 $limitTotalProduct=$totalproduct-1;
			  $totalproduct="UPDATE seller  SET limitTotalProduct='".$limitTotalProduct."'  WHERE (email='$email')";
			 mysqli_query($connection,$totalproduct);
				 $result3 = $connection->prepare($totalproduct);
				 if($result3 === false) {
			trigger_error('Wrong SQL: ' . $totalproduct . ' Error: ' . $connection->error, E_USER_ERROR);
			}
			$result3->execute();
			?>
			<script>
				alert("Producto Agregado");
				window.location.href="suppliers.php";
			</script>
			
			<?php

			}
	
			else
			{
			?>
			 <script >
				 window.location.href="suppliers.php";
         </script>
		<?php	}
		}
	
	?>