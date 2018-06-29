
<?php
session_start();
error_reporting(0);
include 'Connect.php';
    
    
    $error =false;
 ?>
  <?php  if (isset($_POST['register-submit'])) {
	
	
		    $name_bank= $_POST['bank_name'];
	        $bank_code= $_POST['bank_code'];
	        $number_bank= $_POST['bank_number'];
		    $companyName= $_POST['companyName'];
		    $companyLegalNo= $_POST['companyLegalNo'];
			$p1=$_POST['p1'];
			$p2=$_POST['p2'];
			$p3=$_POST['p3'];
		
	$street= $_POST['street'];
		  $city= $_POST['city'];
		  $province= $_POST['province'];
		  $zipCode= $_POST['zipCode'];
		  $countryName= $_POST['selectcountryName'];
		  $businessType= $_POST['businessType'];
		  $noOfEmployee= $_POST['noOfEmployee'];
		  $companyDescription= $_POST['companyDescription'];
		  $email= $_SESSION['confemail'];
		  $confirmcode=$_SESSION['code'];
		  ///////////////////////////////////////////
		 	
	
	

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
	$limitTopList=7;
	$limitTotalProduct=38;
	$limitShowCase=5;
	 $q="INSERT INTO seller(email,company_name,street,city,zipCode,province,businessType,noOfEmployee,companyDescription,companylogo ,countryName,bank,bank_code,number_bank,companylicense,companylicense2,companylicense3,companylicense4,companylicense5,phoneNo,phoneSSN,phoneNumber,companyLegalNo,limitTopList,limitTotalProduct,limitShowCase) VALUES ('$email','$companyName','$street','$city','$zipCode','$province','$businessType','$noOfEmployee','$companyDescription','$images','$countryName','$name_bank','$bank_code','$number_bank','$image1','$image2','$image3','$image4','$image5','$p1',$p2,$p3,'$companyLegalNo','$limitTopList','$limitTotalProduct','$limitShowCase')";
   $qryresult=mysqli_query($connection,$q);
   if (!$qryresult) {
   
   	echo "Error en la Inserción de los Datos";
   }else{
   	
   	echo "
   			alert('Informacion e Imagenes Agregadas Correctamente');
				<script>
				window.location.href ='sendconfirmation2.php';
				</script>


   	";

   	
   }

    	
   
   
        }
        
		
		  
		  ?>
		
	
		
		
           		

