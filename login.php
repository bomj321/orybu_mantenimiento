<?php session_start(); 
include('Connect.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$email = mysqli_real_escape_string( $connection, $_POST['email']);
$password = mysqli_real_escape_string($connection, $_POST['password']);   
 
$confirmado_sql="SELECT * FROM users WHERE email='$email' AND password = '$password'";
$rsl_sql=mysqli_query($connection,$confirmado_sql);
$row_confirmado = mysqli_fetch_array($rsl_sql);
$confirmado=$row_confirmado['confirmed'];
$userstatus= $row_confirmado['userStatus']; 
$tipo_usuario= $row_confirmado['userType'];
$nr=mysqli_num_rows($rsl_sql); 
if($nr>0){
 
   if($confirmado==0){
    echo'
    <script>
    alert("Please check your confirmation email");
    window.location.href="logoff.php";
    </script>
   ';
   
 
 }elseif($userstatus==0){ 
  echo'
    <script>
    alert("Contact the admin, pending profile");
    window.location.href="logoff.php";
    </script>
   ';
 
}elseif($tipo_usuario=='buyer' || $tipo_usuario=='both' || $tipo_usuario=='supplier'){
    $usertype=$row_confirmado['userType'];
	$userstatus=$row_confirmado['userStatus'];
    $checkemail=$row_confirmado['email'];
	$name=$row_confirmado['firstName'];
    $_SESSION['fname']=$name;
    $checkpassword=$row_confirmado['email'];
      $userid= $row_confirmado['user_id'];     
      $_SESSION['user_id']= $userid;
      $_SESSION['firstName'] = $name;
      //PAIS
      $country = $row_confirmado['countryName'];
      $_SESSION['countryName'] = $country;
 
 $_SESSION['firstName']=$name;
	  $now= date("Y-m-d h:i:s");

	 $updatequery="update `users` set `status`='online', `lastactiveon`='$now' where `email`='$email' ";
	mysqli_query($connection,$updatequery);
 
         $_SESSION['uemail']=$email;
         $_SESSION['utype']=$usertype;		 
         header("location: index.php");
}
 

 }else{
   echo'
    <script>
    alert("Incorrect data, please insert them again");
    window.location.href="singlelogin.php";
    </script>
   ';
 }
mysqli_close($connection); 
}
   ?>