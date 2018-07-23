<?php session_start();
include('Connect.php');
$pid=$_GET['pid']; 
$nuevo_precio=$_GET['precio_nuevo']; 
$cantidad_nuevo=$_GET['cantidad_nuevo']; 
$email=$_SESSION['uemail'];
$_SESSION['pid']=$pid;

$query="SELECT * from products where pid=$pid";
$res=mysqli_query($connection,$query);
$row=mysqli_fetch_array($res);
$myString = $row['image'];
$cl = explode(',', $myString);
$_SESSION['pid']=$pid; 
$_SESSION['image']=$cl[0];

$_SESSION['ntitle']=$row['ntitle']; 
$_SESSION['price']=$row['price'];
$_SESSION['fulldesc']=$row['fulldescription'];

//Variables
$email = $_SESSION['uemail'];
$pid = $_SESSION['pid'];
$image = $cl[0];
$title = $_SESSION['ntitle'];
if (!empty($nuevo_precio) AND isset($nuevo_precio) AND is_numeric($nuevo_precio)) {
	$price=$nuevo_precio;

}elseif(is_NAN($nuevo_precio)){
	echo' 
						  <script>
									alert("IS NOT A NUMBER");  //not showing an alert box.
									 window.location.href="chat2.php";
						 </script>
							';
}else{
	$price = $_SESSION['price'];
}





if (!empty($cantidad_nuevo) AND isset($cantidad_nuevo) AND is_numeric($cantidad_nuevo)) {
	$quantity=$cantidad_nuevo;
	
}elseif(is_NAN($quantity) OR empty($quantity)){
	echo' 
						  <script>
									alert("IS NOT A NUMBER");  //not showing an alert box.
									 window.location.href="chat2.php";
						 </script>
							';
	$quantity = 1;						
}



if (!empty($quantity) AND isset($quantity) AND is_numeric($quantity) AND !empty($price) AND isset($price) AND is_numeric($price)) {
	$totalprice= $quantity * $price;
}else{
	$totalprice=$price;
}

$description = $_SESSION['fulldesc'];
$orderstatus = 'Incomplete';
//Variables


//INSERT INTO
 $insert2 = "INSERT INTO cart2(pid,image,title,price,description,email,orderstatus,quantity,totalprice) VALUES(".$pid.", '".$image."','".$title."', ".$price.", '".$description."','".$email."','".$orderstatus."',".$quantity.",".$totalprice.");";
         $resultado3 = $connection->query($insert2);
//INSERT INTO
if(!$resultado3){
 echo 'error </br>' ;
  echo $email .'</br>';
  echo $pid.'</br>';
  echo $image.'</br>';
  echo $title.' titulo</br>';
  echo $price.' precio</br>';
  echo $description.'</br>';
}
$cart = array (
'pid'  =>$_SESSION['pid'],
'p_image' => $_SESSION['image'],
'p_title' => $_SESSION['ntitle'],
'p_fulldesc' => $_SESSION['fulldesc'],
'p_price' => $_SESSION['price']
);

$_SESSION['cart'][] = $cart;

?>
<script> 
window.location.href="cart.php";  </script>