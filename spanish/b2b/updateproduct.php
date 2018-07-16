<?php session_start();
error_reporting(0);
include('Connect.php');
$email=$_SESSION['uemail'];
 $usertype=$_SESSION['utype']; 

$pid_session = $_GET['pid'];
$image= $_GET['image'];
$image_limpio= mysqli_real_escape_string($connection, $image);
$pid_borrar= $pid_session;
$pid_limpio= mysqli_real_escape_string($connection, $pid_borrar);

if (!empty($image_limpio) AND !empty($pid_limpio)) {
			if ($image_limpio=='1') {
				$vacio = "";				
				$sql2="UPDATE products  SET image='".$vacio."' WHERE (pid='$pid_limpio')";
 						mysqli_query($connection,$sql2);
 						header('Location: updateproduct.php?pid='.$pid_limpio);
			
							
			}elseif ($image_limpio=='2') {
				$vacio = "";				
				$sql2="UPDATE products  SET  image2='".$vacio."' WHERE (pid='$pid_limpio')";
				mysqli_query($connection,$sql2);
				 echo '
						<script>
									alert("Imagen Borrada");  //not showing an alert box.							
									 
						 </script>

				 ';	
				header('Location: updateproduct.php?pid='.$pid_limpio);
			}elseif ($image_limpio=='3') {
				$vacio = "";				
				$sql2="UPDATE products  SET image3='".$vacio."' WHERE (pid='$pid_limpio')";
				mysqli_query($connection,$sql2);	
				 echo '
						<script>
									alert("Imagen Borrada");  //not showing an alert box.							
									 
						 </script>

				 ';	
				header('Location: updateproduct.php?pid='.$pid_limpio);
			}elseif ($image_limpio=='4') {
				$vacio = "";				
				$sql2="UPDATE products  SET  image4='".$vacio."' WHERE (pid='$pid_limpio')";
				mysqli_query($connection,$sql2);	
				 echo '
						<script>
									alert("Imagen Borrada");  //not showing an alert box.							
									 
						 </script>

				 ';	
				header('Location: updateproduct.php?pid='.$pid_limpio);
			}elseif ($image_limpio=='5') {
				$vacio = "";				
				$sql2="UPDATE products  SET  image5='".$vacio."' WHERE (pid='$pid_limpio')";
				mysqli_query($connection,$sql2);
				 echo '
						<script>
									alert("Imagen Borrada");  //not showing an alert box.							
									 
						 </script>

				 ';		
				header('Location: updateproduct.php?pid='.$pid_limpio);
			}elseif($image_limpio=='certificacion'){
				$vacio = "";				
				$sql2="UPDATE products  SET certification='".$vacio."' WHERE (pid='$pid_limpio')";
				mysqli_query($connection,$sql2);	
				 echo '
						<script>
									alert("Imagen Borrada");  //not showing an alert box.							
									 
						 </script>

				 ';	
				header('Location: updateproduct.php?pid='.$pid_limpio);
			}
		}




include('head.php');?>
<?php
include('topbar.php');
include('middlebar.php');
include('navh.php');
//include('middlebar.php');
 $email=$_SESSION['uemail'];
 $usertype=$_SESSION['utype'];
 $_GET['pid'];
 $pid_session = $_GET['pid'];
?>
   
<?php


if(isset($_POST['btn_save_updates']))
	{
	  $pid =$pid_session;// item name
	  $ntitle = $_POST['ntitle'];// item name 
		 
			$price = $_POST['price'];// item name
	    	$fulldescription = $_POST['description'];// item name
			$catid = $_POST['catid'];// item name
				$subcatid = $_POST['subcatid'];// item name
					$quantity = $_POST['quantity'];// item name
			$color = $_POST['color'];// item name
		 
		
		
		
		     $productType =$_POST['productType'];
			  
			 $catid = $_POST['catid'];// item name
			 $subcatid = $_POST['subcatid'];// item name
		
	        $delivery_details= $_POST['delivery_details'];
			$payment= $_POST['payment'];
			$keyword = $_POST['keyword'];
			$selectedkeyword=$_POST['selectedkeyword'];
			$country = $_POST['dropcountry'];//dropcountry
			$port=$_POST['port'];
			$wquantity=$_POST['wquantity'];
			$weight =$wquantity.' '.$_POST['dropweight'];
			
			$vquantity=$_POST['vquantity'];
			$volume=$vquantity.' '.$_POST['dropvolum'];
			$dquantity=$_POST['dquantity'];
            $dquantity2=$_POST['dquantity2'];
            $dquantity3=$_POST['dquantity3'];
            $dquantity4=$_POST['dropdimension'];

			$cquantity=$_POST['cquantity'];
			
			$capacity=$cquantity.' '.$_POST['dropcapacity'];
			$equantity=$_POST['equantity'];
			$energy= $equantity.' '.$_POST['dropenergy'];
			$rotation=$_POST['rotation'];
			$elaboration=$_POST['elobration'];
			$use=$_POST['use'];
		    $size=$_POST['size'];
			$packing=$_POST['packaging'];
			$productType = $_POST['productType'];
			//$showcaseid=$_POST['showcaseid'];
			//$showtoplist=$_POST['showtoplist'];
            $description = $_POST['description'];
			$price=$_POST['fobprice'];
			$price_unit=$_POST['dropminimum'];
			$oquantity=$_POST['oquantity'];
			$miniorder=$oquantity.' '.$_POST['dropminimum2'];
	
	
$target_dir = "../../images/";	
if($_FILES["file1"]["name"] !="" AND !empty($_FILES["file1"]["name"]))
{
			$target_file = $target_dir . basename($_FILES["file1"]["name"]);
			$certification=$_FILES['file1']['name'];
			$fileimage1=$_FILES['file1']['name'];
			$filelocation = $target_dir.$image3;
			$tempfile1 = $_FILES['file1']['tmp_name'];
			move_uploaded_file($tempfile1, $filelocation); 
	
	 $sql="UPDATE products  SET ntitle='".$ntitle."' ,price='".$price."',price_unit='".$price_unit."',fulldescription='".$fulldescription."',catid='".$catid."' ,subcatid='".$subcatid."',productaction='".$productaction."',producttoplist='".$producttoplist."',productType='".$productType."', keywords='".$keyword."',selectedkeyword='".$selectedkeyword."',country='".$country."',port='".$port."',weight='".$weight."',volume='".$volume."',dimension='".$dquantity."',dimension2='".$dquantity2."',dimension3='".$dquantity3."',dimension4='".$dquantity4."',capacity='".$capacity."',energypower='".$energy."',rotationspeed='".$rotation."',elaboration='".$elaboration."',puse='".$use."',psize='".$size."',packing='".$packing."',certification='".$certification."',miniorder='".$miniorder."',delivery_details='".$delivery_details."',payment='".$payment."'  WHERE (pid='$pid')";
	mysqli_query($connection,$sql);
 }else{
 	
 	
			
	 $sql="UPDATE products  SET ntitle='".$ntitle."' ,price='".$price."',price_unit='".$price_unit."',fulldescription='".$fulldescription."',catid='".$catid."' ,subcatid='".$subcatid."',productaction='".$productaction."',producttoplist='".$producttoplist."',productType='".$productType."', keywords='".$keyword."',selectedkeyword='".$selectedkeyword."',country='".$country."',port='".$port."',weight='".$weight."',volume='".$volume."',dimension='".$dquantity."',dimension2='".$dquantity2."',dimension3='".$dquantity3."',dimension4='".$dquantity4."',capacity='".$capacity."',energypower='".$energy."',rotationspeed='".$rotation."',elaboration='".$elaboration."',puse='".$use."',psize='".$size."',packing='".$packing."',miniorder='".$miniorder."',delivery_details='".$delivery_details."',payment='".$payment."'  WHERE (pid='$pid')";
	mysqli_query($connection,$sql);
}		
			$showcaseid=$_POST['showcaseid'];
			$showtoplist=$_POST['showtoplist'];
			
			  
			if($_POST['showcaseid'] !="")
			{
			 $productstatus=$_POST['showcaseid'];
			}
			else if($productstatus =="")
			{
			 $productstatus=2;
			}
			if($_POST['showtoplist'] !="")
			{
			 $producttoplist=$_POST['showtoplist'];
			}
				 //////////////////////////////////////////
	
				$target_dir = "images/";
	if($_FILES["imagenes1"]["name"] !="" AND !empty($_FILES["imagenes1"]["name"]))
{
		 	$target_file = $target_dir . basename($_FILES["imagenes1"]["name"]);
			$image1=$_FILES['imagenes1']['name'];
			$filelocation = $target_dir.$image1;
			$temp1 = $_FILES['imagenes1']['tmp_name'];
			move_uploaded_file($temp1, $filelocation);
}	if($_FILES["imagenes2"]["name"] !="" AND !empty($_FILES["imagenes2"]["name"]))
{

			$target_file = $target_dir . basename($_FILES["imagenes2"]["name"]);
			$image2=$_FILES['imagenes2']['name'];
			$filelocation = $target_dir.$image2;
			$temp2 = $_FILES['imagenes2']['tmp_name'];
}	if($_FILES["imagenes3"]["name"] !="" AND !empty($_FILES["imagenes3"]["name"]))
{
		
			$target_file = $target_dir . basename($_FILES["imagenes3"]["name"]);
			$image3=$_FILES['imagenes3']['name'];
			$filelocation = $target_dir.$image3;
			$temp3 = $_FILES['imagenes3']['tmp_name'];
			move_uploaded_file($temp3, $filelocation); 
 }	if($_FILES["imagenes4"]["name"] !="" AND !empty($_FILES["imagenes4"]["name"]))
{

			$target_file = $target_dir . basename($_FILES["imagenes4"]["name"]);
			$image4=$_FILES['imagenes4']['name'];
			$filelocation = $target_dir.$image4;
			$temp4 = $_FILES['imagenes4']['tmp_name'];
			move_uploaded_file($temp4, $filelocation); 
 }if($_FILES["imagenes5"]["name"] !="" AND !empty($_FILES["imagenes5"]["name"]))
{

			$target_file = $target_dir . basename($_FILES["imagenes5"]["name"]);
			$image5=$_FILES['imagenes5']['name'];
			$filelocation = $target_dir.$image5;
			$temp5 = $_FILES['imagenes5']['tmp_name'];
			move_uploaded_file($temp5, $filelocation); 
 } 	 ////////////////////////////////////////////////
	////////////////////////////////////////////////
	
		
  if(empty($image1)){
  	 $sql2="UPDATE products  SET ntitle='".$ntitle."' ,price='".$price."' ,fulldescription='".$fulldescription."',catid='".$catid."' ,subcatid='".$subcatid."',productaction='".$productaction."',producttoplist='".$producttoplist."',productType='".$productType."'  WHERE (pid='$pid')";
 mysqli_query($connection,$sql2);
  }else{
  	 $sql2="UPDATE products  SET ntitle='".$ntitle."' ,price='".$price."' ,fulldescription='".$fulldescription."',image='".$image1."',catid='".$catid."' ,subcatid='".$subcatid."',productaction='".$productaction."',producttoplist='".$producttoplist."',productType='".$productType."'  WHERE (pid='$pid')";
      mysqli_query($connection,$sql2);
  }
	

if(empty($image2)){
  	 $sql3="UPDATE products  SET ntitle='".$ntitle."' ,price='".$price."' ,fulldescription='".$fulldescription."',catid='".$catid."' ,subcatid='".$subcatid."',productaction='".$productaction."',producttoplist='".$producttoplist."',productType='".$productType."'  WHERE (pid='$pid')";
 mysqli_query($connection,$sql3);
  }else{
  	 $sql3="UPDATE products  SET ntitle='".$ntitle."' ,price='".$price."' ,fulldescription='".$fulldescription."',image2='".$image2."',catid='".$catid."' ,subcatid='".$subcatid."',productaction='".$productaction."',producttoplist='".$producttoplist."',productType='".$productType."'  WHERE (pid='$pid')";
      mysqli_query($connection,$sql3);
  }
	
if(empty($image3)){
  	 $sql4="UPDATE products  SET ntitle='".$ntitle."' ,price='".$price."' ,fulldescription='".$fulldescription."',catid='".$catid."' ,subcatid='".$subcatid."',productaction='".$productaction."',producttoplist='".$producttoplist."',productType='".$productType."'  WHERE (pid='$pid')";
 mysqli_query($connection,$sql4);
  }else{
  	 $sql4="UPDATE products  SET ntitle='".$ntitle."' ,price='".$price."' ,fulldescription='".$fulldescription."',image3='".$image3."',catid='".$catid."' ,subcatid='".$subcatid."',productaction='".$productaction."',producttoplist='".$producttoplist."',productType='".$productType."'  WHERE (pid='$pid')";
      mysqli_query($connection,$sql4);
  }
	
if(empty($image4)){
  	 $sql5="UPDATE products  SET ntitle='".$ntitle."' ,price='".$price."' ,fulldescription='".$fulldescription."',catid='".$catid."' ,subcatid='".$subcatid."',productaction='".$productaction."',producttoplist='".$producttoplist."',productType='".$productType."'  WHERE (pid='$pid')";
 mysqli_query($connection,$sql5);
  }else{
  	 $sql5="UPDATE products  SET ntitle='".$ntitle."' ,price='".$price."' ,fulldescription='".$fulldescription."',image4='".$image4."',catid='".$catid."' ,subcatid='".$subcatid."',productaction='".$productaction."',producttoplist='".$producttoplist."',productType='".$productType."'  WHERE (pid='$pid')";
      mysqli_query($connection,$sql5);
  }
	
if(empty($image5)){
  	 $sql6="UPDATE products  SET ntitle='".$ntitle."' ,price='".$price."' ,fulldescription='".$fulldescription."',catid='".$catid."' ,subcatid='".$subcatid."',productaction='".$productaction."',producttoplist='".$producttoplist."',productType='".$productType."'  WHERE (pid='$pid')";
 mysqli_query($connection,$sql6);
  }else{
  	 $sql6="UPDATE products  SET ntitle='".$ntitle."' ,price='".$price."' ,fulldescription='".$fulldescription."',image5='".$image5."',catid='".$catid."' ,subcatid='".$subcatid."',productaction='".$productaction."',producttoplist='".$producttoplist."',productType='".$productType."'  WHERE (pid='$pid')";
      mysqli_query($connection,$sql6);
  }	

?>
                <script>
				        alert("Actualizado!");  //not showing an alert box.
		                window.location.href="suppliers.php";
				</script>
<?php
	}
?>


<script>
$(document).ready(function() {
  
       $('#catid').on('change',function()
	   {
    var domain_name = $(this).val();

	//alert(domain_name);
    var dataString = "domain_name="+domain_name;
    if(domain_name)
    {
      $.ajax({
        type:'POST',
        url:'subcategoryList.php',
        data: dataString,


        success:function(html) {
          $('#ShowSubcategory').html(html);
        }
      });

    }
  
    });

 
  }); 


</script>


	
	     <!-- start section -->
        <section class="section white-backgorund">
            <div class="container">
			 <!-- start Form -->
                  <form  method="POST" enctype="multipart/form-data" class="col-md-12 col-sm-12">
				  
			  <div class="row" style="padding-left:10px;">
			  </br>
				<center><h2>Actualizar Productos</h2>
			
				</center></br>
                    <div class="col-sm-12" style=" background-color:white;">
    

       			 <?php
 $pid=$pid_session;
 $sql="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (pid=$pid)";
 $rez=mysqli_query($connection,$sql);
 $rowz=mysqli_fetch_array($rez);
 ?>
		<div class="form-group col-sm-2">  </div>
				<div class="form-group col-sm-4">
				
				
	<?php  $membershipType ?>  
	
								 <?php

						$sql="SELECT * FROM categories";
						 $stmt=mysqli_query($connection,$sql);
						if($stmt == false) {
						trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
						}
						$nr=mysqli_num_rows($stmt);

						if ($nr > 0)
						 {
						  ?>
						 
					<select  class="form-control"  id="catid" name="catid" required>
					 <option  value="<?php echo $rowz['catid']; ?>"> <?php echo $rowz['title']; ?></option>
										 <?php
						while($row=$stmt->fetch_assoc())
						{
			
						
			?>
					  <option value="<?php echo $row['catid']; ?>"><?php echo $row['title']; ?></option>
					  <?php
					  }
					  ?>
				</select>
				 <?php
					  }
					  ?>
			</div>
			<div class="form-group col-sm-4" id="ShowSubcategory"> <select id="Show" class="form-control"> <option value=""> Selecciona Categoria Primero </option> </select></div>  
		<!--	<div class="form-group col-sm-4" id="Show">

            <select id="Show"> <option value=""> Select Category first </option> </select>			
            </div> 
			-->

			</div>  
			</div>  <!-- row  -->
				<hr>
				<div class="row">
			  
				<div class="col-sm-4" style="margin-left:200px;margin-top:0px;">
				
				<div class="form-group"><label>Titulo del Producto: <span class="text-danger">*</span></label></div> <br> 
                <div class="form-group"><label> Palabras Claves:<span class="text-danger">*</span></label> </div> <br> 
				<div class="form-group"><label>Palabras Claves Agreg. :<span class="text-danger">*</span></label></div> 
				</div>
				<div class="col-sm-4" style="margin-left:-200px;">
				<div class="form-group">
						<input type="text" class="form-control input-lg" required placeholder="Inserte titulo" name="ntitle" id="title" value="<?php echo  $rowz['ntitle'];?>">
				</div>
				<div class="form-group">
						<input type="text" class="form-control input-sm" required placeholder="Inserte Palabra Clave" name="keyword" id="keyword" value="<?php echo  $rowz['keywords'];?>">
				</div>
				<div class="form-group">
						<!--<input type="text" class="form-control" placeholder="Enter Quantity" name="quantity" id="quantity"> -->
						<textarea class="form-control" placeholder="Palabra Clave" required name="selectedkeyword" id="selectedkey"  > <?php echo  $rowz['selectedkeyword'];?> </textarea>
				</div>
				</div>
				<script>
// AJAX call for autocomplete 


</script>
				</div>
				<!-- END of ROW -->
		<div class="row"> 
			    <h4 style="margin-left:90px;"> Detalles:</h4> 
				<div class="col-sm-4" style="margin-left:200px;margin-top:0px;">
				<div class="row">
				<div class="form-group col-sm-6"><label> Pais: </label></div> 
               
				</div>
				<div class="form-group" style="margin-top:30px;"><label> Peso: <span class="text-danger">*</span></label></div>
				<div class="form-group" style="margin-top:30px;"><label> Volumen: </label></div> 
				<div class="form-group" style="margin-top:35px;"><label> Dimensiones: </label></div> 
				<div class="form-group" style="margin-top:30px;"><label> Capacidad: </label></div> 
				<div class="form-group" style="margin-top:35px;"><label> Fuente de poder: </label></div> 
				 
				<div class="form-group" style="margin-top:30px;"><label> Velocidad de Rotacion: </label></div> 
				<div class="form-group" style="margin-top:25px;"><label> Material de Elaboracion: <span class="text-danger">*</span></label></div> 
				<div class="form-group" style="margin-top:25px;"><label> Uso: <span class="text-danger">*</span></label></div> 
				<div class="form-group" style="margin-top:20px;"><label> Tamaño: </label></div> 
				<div class="form-group" style="margin-top:20px;"><label> Empaquetado: <span class="text-danger">*</span></label></div>
                <div class="form-group" style="margin-top:25px;"><label> Tipo de producto: </label></div>				
				<div class="form-group" style="margin-top:20px;"><label>Precio FOB: <span class="text-danger">*</span></label></div> 
				<div class="form-group" style="margin-top:20px;"><label>Orden Miníma: <span class="text-danger">*</span></label></div> 
				<div class="form-group" style="margin-top:25px;"><label>Detalles del Envio: <span class="text-danger">*</span></label></div>
				<div class="form-group" style="margin-top:20px;"><label>Metodo de Pago: <span class="text-danger">*</span></label></div>				
				
				
				 
			<!--	 -->
				</div>
				<div class="col-sm-4" style="margin-left:-200px;">
				<div class="row">
				<div class="form-group col-sm-6">
			<select class="form-control" id="unit" name="dropcountry">
                <option value="<?php echo $rowz['country'];?>">  <?php echo  $rowz['country'];?></option>
	                <option value="Chile">Chile</option>
					<option value="Afganistan">Afghanistan</option>
					<option value="Albania">Albania</option>
					<option value="Algeria">Algeria</option>
					<option value="American Samoa">American Samoa</option>
					<option value="Andorra">Andorra</option>
					<option value="Angola">Angola</option>
					<option value="Anguilla">Anguilla</option>
					<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
					<option value="Argentina">Argentina</option>
					<option value="Armenia">Armenia</option>
					<option value="Aruba">Aruba</option>
					<option value="Australia">Australia</option>
					<option value="Austria">Austria</option>
					<option value="Azerbaijan">Azerbaijan</option>
					<option value="Bahamas">Bahamas</option>
					<option value="Bahrain">Bahrain</option>
					<option value="Bangladesh">Bangladesh</option>
					<option value="Barbados">Barbados</option>
					<option value="Belarus">Belarus</option>
					<option value="Belgium">Belgium</option>
					<option value="Belize">Belize</option>
					<option value="Benin">Benin</option>
					<option value="Bermuda">Bermuda</option>
					<option value="Bhutan">Bhutan</option>
					<option value="Bolivia">Bolivia</option>
					<option value="Bonaire">Bonaire</option>
					<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
					<option value="Botswana">Botswana</option>
					<option value="Brazil">Brazil</option>
					<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
					<option value="Brunei">Brunei</option>
					<option value="Bulgaria">Bulgaria</option>
					<option value="Burkina Faso">Burkina Faso</option>
					<option value="Burundi">Burundi</option>
					<option value="Cambodia">Cambodia</option>
					<option value="Cameroon">Cameroon</option>
					<option value="Canada">Canada</option>
					<option value="Canary Islands">Canary Islands</option>
					<option value="Cape Verde">Cape Verde</option>
					<option value="Cayman Islands">Cayman Islands</option>
					<option value="Central African Republic">Central African Republic</option>
					<option value="Chad">Chad</option>
					<option value="Channel Islands">Channel Islands</option>
					<option value="Chile">Chile</option>
					<option value="China">China</option>
					<option value="Christmas Island">Christmas Island</option>
					<option value="Cocos Island">Cocos Island</option>
					<option value="Colombia">Colombia</option>
					<option value="Comoros">Comoros</option>
					<option value="Congo">Congo</option>
					<option value="Cook Islands">Cook Islands</option>
					<option value="Costa Rica">Costa Rica</option>
					<option value="Cote DIvoire">Cote D'Ivoire</option>
					<option value="Croatia">Croatia</option>
					<option value="Cuba">Cuba</option>
					<option value="Curaco">Curacao</option>
					<option value="Cyprus">Cyprus</option>
					<option value="Czech Republic">Czech Republic</option>
					<option value="Denmark">Denmark</option>
					<option value="Djibouti">Djibouti</option>
					<option value="Dominica">Dominica</option>
					<option value="Dominican Republic">Dominican Republic</option>
					<option value="East Timor">East Timor</option>
					<option value="Ecuador">Ecuador</option>
					<option value="Egypt">Egypt</option>
					<option value="El Salvador">El Salvador</option>
					<option value="Equatorial Guinea">Equatorial Guinea</option>
					<option value="Eritrea">Eritrea</option>
					<option value="Estonia">Estonia</option>
					<option value="Ethiopia">Ethiopia</option>
					<option value="Falkland Islands">Falkland Islands</option>
					<option value="Faroe Islands">Faroe Islands</option>
					<option value="Fiji">Fiji</option>
					<option value="Finland">Finland</option>
					<option value="France">France</option>
					<option value="French Guiana">French Guiana</option>
					<option value="French Polynesia">French Polynesia</option>
					<option value="French Southern Ter">French Southern Ter</option>
					<option value="Gabon">Gabon</option>
					<option value="Gambia">Gambia</option>
					<option value="Georgia">Georgia</option>
					<option value="Germany">Germany</option>
					<option value="Ghana">Ghana</option>
					<option value="Gibraltar">Gibraltar</option>
					<option value="Great Britain">Great Britain</option>
					<option value="Greece">Greece</option>
					<option value="Greenland">Greenland</option>
					<option value="Grenada">Grenada</option>
					<option value="Guadeloupe">Guadeloupe</option>
					<option value="Guam">Guam</option>
					<option value="Guatemala">Guatemala</option>
					<option value="Guinea">Guinea</option>
					<option value="Guyana">Guyana</option>
					<option value="Haiti">Haiti</option>
					<option value="Hawaii">Hawaii</option>
					<option value="Honduras">Honduras</option>
					<option value="Hong Kong">Hong Kong</option>
					<option value="Hungary">Hungary</option>
					<option value="Iceland">Iceland</option>
					<option value="India">India</option>
					<option value="Indonesia">Indonesia</option>
					<option value="Iran">Iran</option>
					<option value="Iraq">Iraq</option>
					<option value="Ireland">Ireland</option>
					<option value="Isle of Man">Isle of Man</option>
					<option value="Israel">Israel</option>
					<option value="Italy">Italy</option>
					<option value="Jamaica">Jamaica</option>
					<option value="Japan">Japan</option>
					<option value="Jordan">Jordan</option>
					<option value="Kazakhstan">Kazakhstan</option>
					<option value="Kenya">Kenya</option>
					<option value="Kiribati">Kiribati</option>
					<option value="Korea North">Korea North</option>
					<option value="Korea Sout">Korea South</option>
					<option value="Kuwait">Kuwait</option>
					<option value="Kyrgyzstan">Kyrgyzstan</option>
					<option value="Laos">Laos</option>
					<option value="Latvia">Latvia</option>
					<option value="Lebanon">Lebanon</option>
					<option value="Lesotho">Lesotho</option>
					<option value="Liberia">Liberia</option>
					<option value="Libya">Libya</option>
					<option value="Liechtenstein">Liechtenstein</option>
					<option value="Lithuania">Lithuania</option>
					<option value="Luxembourg">Luxembourg</option>
					<option value="Macau">Macau</option>
					<option value="Macedonia">Macedonia</option>
					<option value="Madagascar">Madagascar</option>
					<option value="Malaysia">Malaysia</option>
					<option value="Malawi">Malawi</option>
					<option value="Maldives">Maldives</option>
					<option value="Mali">Mali</option>
					<option value="Malta">Malta</option>
					<option value="Marshall Islands">Marshall Islands</option>
					<option value="Martinique">Martinique</option>
					<option value="Mauritania">Mauritania</option>
					<option value="Mauritius">Mauritius</option>
					<option value="Mayotte">Mayotte</option>
					<option value="Mexico">Mexico</option>
					<option value="Midway Islands">Midway Islands</option>
					<option value="Moldova">Moldova</option>
					<option value="Monaco">Monaco</option>
					<option value="Mongolia">Mongolia</option>
					<option value="Montserrat">Montserrat</option>
					<option value="Morocco">Morocco</option>
					<option value="Mozambique">Mozambique</option>
					<option value="Myanmar">Myanmar</option>
					<option value="Nambia">Nambia</option>
					<option value="Nauru">Nauru</option>
					<option value="Nepal">Nepal</option>
					<option value="Netherland Antilles">Netherland Antilles</option>
					<option value="Netherlands">Netherlands (Holland, Europe)</option>
					<option value="Nevis">Nevis</option>
					<option value="New Caledonia">New Caledonia</option>
					<option value="New Zealand">New Zealand</option>
					<option value="Nicaragua">Nicaragua</option>
					<option value="Niger">Niger</option>
					<option value="Nigeria">Nigeria</option>
					<option value="Niue">Niue</option>
					<option value="Norfolk Island">Norfolk Island</option>
					<option value="Norway">Norway</option>
					<option value="Oman">Oman</option>
					<option value="Pakistan">Pakistan</option>
					<option value="Palau Island">Palau Island</option>
					<option value="Palestine">Palestine</option>
					<option value="Panama">Panama</option>
					<option value="Papua New Guinea">Papua New Guinea</option>
					<option value="Paraguay">Paraguay</option>
					<option value="Peru">Peru</option>
					<option value="Phillipines">Philippines</option>
					<option value="Pitcairn Island">Pitcairn Island</option>
					<option value="Poland">Poland</option>
					<option value="Portugal">Portugal</option>
					<option value="Puerto Rico">Puerto Rico</option>
					<option value="Qatar">Qatar</option>
					<option value="Republic of Montenegro">Republic of Montenegro</option>
					<option value="Republic of Serbia">Republic of Serbia</option>
					<option value="Reunion">Reunion</option>
					<option value="Romania">Romania</option>
					<option value="Russia">Russia</option>
					<option value="Rwanda">Rwanda</option>
					<option value="St Barthelemy">St Barthelemy</option>
					<option value="St Eustatius">St Eustatius</option>
					<option value="St Helena">St Helena</option>
					<option value="St Kitts-Nevis">St Kitts-Nevis</option>
					<option value="St Lucia">St Lucia</option>
					<option value="St Maarten">St Maarten</option>
					<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
					<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
					<option value="Saipan">Saipan</option>
					<option value="Samoa">Samoa</option>
					<option value="Samoa American">Samoa American</option>
					<option value="San Marino">San Marino</option>
					<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
					<option value="Saudi Arabia">Saudi Arabia</option>
					<option value="Senegal">Senegal</option>
					<option value="Serbia">Serbia</option>
					<option value="Seychelles">Seychelles</option>
					<option value="Sierra Leone">Sierra Leone</option>
					<option value="Singapore">Singapore</option>
					<option value="Slovakia">Slovakia</option>
					<option value="Slovenia">Slovenia</option>
					<option value="Solomon Islands">Solomon Islands</option>
					<option value="Somalia">Somalia</option>
					<option value="South Africa">South Africa</option>
					<option value="Spain">Spain</option>
					<option value="Sri Lanka">Sri Lanka</option>
					<option value="Sudan">Sudan</option>
					<option value="Suriname">Suriname</option>
					<option value="Swaziland">Swaziland</option>
					<option value="Sweden">Sweden</option>
					<option value="Switzerland">Switzerland</option>
					<option value="Syria">Syria</option>
					<option value="Tahiti">Tahiti</option>
					<option value="Taiwan">Taiwan</option>
					<option value="Tajikistan">Tajikistan</option>
					<option value="Tanzania">Tanzania</option>
					<option value="Thailand">Thailand</option>
					<option value="Togo">Togo</option>
					<option value="Tokelau">Tokelau</option>
					<option value="Tonga">Tonga</option>
					<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
					<option value="Tunisia">Tunisia</option>
					<option value="Turkey">Turkey</option>
					<option value="Turkmenistan">Turkmenistan</option>
					<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
					<option value="Tuvalu">Tuvalu</option>
					<option value="Uganda">Uganda</option>
					<option value="Ukraine">Ukraine</option>
					<option value="United Arab Erimates">United Arab Emirates</option>
					<option value="United Kingdom">United Kingdom</option>
					<option value="United States of America">United States of America</option>
					<option value="Uraguay">Uruguay</option>
					<option value="Uzbekistan">Uzbekistan</option>
					<option value="Vanuatu">Vanuatu</option>
					<option value="Vatican City State">Vatican City State</option>
					<option value="Venezuela">Venezuela</option>
					<option value="Vietnam">Vietnam</option>
					<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
					<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
					<option value="Wake Island">Wake Island</option>
					<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
					<option value="Yemen">Yemen</option>
					<option value="Zaire">Zaire</option>
					<option value="Zambia">Zambia</option>
					<option value="Zimbabwe">Zimbabwe</option>						 
                         </select>
				</div>
				<div class="form-group col-sm-1" style="margin-right: 25px;">
					<label>Puerto<span class="text-danger">*</span></label></div>  
				
				<div class="form-group col-sm-4" style="padding-right:0px;">
				<input type="text" class="form-control input-sm" required placeholder="Puerto" name="port" id="port" value="<?php echo  $rowz['port'];?>">
				</div>
				</div>
				<div class="row">
				<?php $str=$rowz['weight']; $cl = explode(' ', $str);  ?>
				     <div class="form-group col-sm-8" style="padding-right:0px;">
						<input type="text" class="form-control" required placeholder="Inserte Peso" name="wquantity" id="wquantity" value="<?php echo $cl[0] ;?>"> 
						</div>
							<div class="form-group col-sm-4" style="padding-left:0px;">
							<select class="form-control" id="unit" name="dropweight">
								<option value="<?php echo $cl[1];?>"><?php echo $cl[1];?></option>
		                         <option value="kilogram">Kilogramo</option>  
                             <option value="Gramo">Gramo</option>  
							 <option value="Pieza">Pieza</option>  
							 <option value="Tonelada">Tonelada</option>
							 <option value="Metro Cubico">Metro Cubico</option>  
						     <option value="Envase de 20ft">Envase de 20ft</option> 
                             <option value="Envase de 40ft">Envase de 40ft</option>
                             <option value="Litro">Litro</option>		
                             <option value="Otros">Otros</option>								 
                         </select>
				         </div>
						 </div>
				<div class="row">
				        <div class="form-group col-sm-8" style="padding-right:0px;">
						<?php $str1=$rowz['volume']; $vcl = explode(' ', $str1);  ?>
						<input type="text" class="form-control" placeholder="Volumen" name="vquantity" id="quantity" value="<?php echo $vcl[0]; ?>"> 
						</div>
						<div class="form-group col-sm-4" style="padding-left:0px;">
						<select class="form-control " id="unit" name="dropvolum">
						     <option value="<?php echo $vcl[1]; ?>"><?php echo $vcl[1]; ?> </option>
	                          <option value="">Volumen</option>  
                             <option value="Metro Cúbico">Metro Cúbico</option>  
							 <option value="Pie Cubico">Pie Cúbico</option>  
							 <option value="Centimetro Cubico">Centimetro Cúbico</option>
							 <option value="Metro Cubico">Metro Cúbico</option>
                             <option value="Litro">Litro</option>		
                             <option value="Otros">Otros</option>
                         </select>
				         </div>
						 </div>
						 <div class="row">
						 
								<?php 
								$str2=$rowz['dimension'];
								$str22=$rowz['dimension2'];
								$str23=$rowz['dimension3'];
								$str24=$rowz['dimension4'];
								?>
								<div class="form-group col-sm-2" style="padding-right:0px;  ">
								<input type="text" class="form-control " placeholder="L" name="dquantity" id="quantity" value="<?php echo $str2;?>"> 
								</div>
								<div class="form-group col-sm-2" style="padding-right:0px; ">
								<input type="text" class="form-control " placeholder="Al" name="dquantity2" id="quantity" value="<?php echo $str22; ?>"> 
								</div>
								<div class="form-group col-sm-2" style="padding-right:0px; ">
								<input type="text" class="form-control " placeholder="An" name="dquantity3" id="quantity" value="<?php echo $str23; ?>"> 
								</div>
						<div class="form-group col-sm-4 col-sm-offset-2" style="padding-left:0px;">
								<!--<input type="text" class="form-control" placeholder="Enter Quantity" name="quantity" id="quantity"> -->
								<select class="form-control" id="unit" name="dropdimension" >
									<option value="<?php echo $str24; ?>"> <?php echo $str24; ?> </option>
									<option value="Pie">Pie</option>  
									<option value="Pulgada">Pulgada</option>  
									<option value="Centimetro">Centimetro</option> 
									<option value="Metro">Metro</option>
									<option value="Otro">Otro</option>
								</select>
						</div>
				</div>
				<div class="row">
				<div class="form-group col-sm-8" style="padding-right:0px;">
				<?php $st3=$rowz['volume']; $ccl = explode(' ', $st3);  ?>
						<input type="text" class="form-control" placeholder="Inserte Capacidad" name="cquantity" id="quantity" value="<?php echo $ccl[0]; ?>"> 
						 </div>
						 <div class="form-group col-sm-4" style="padding-left:0px;">
						 <select class="form-control input" id="unit" name="dropcapacity" >
						 <option value="<?php echo $ccl[1] ?>"><?php echo $ccl[1] ;?></option>
	                        <option value="Tonelada">Tonelada</option>  
                             <option value="Kilogramos">Kilogramos</option>  
							 <option value="Píe Cubico">Píe Cúbico</option>  
							 <option value="Metro Cubico">Metro Cúbico</option>
							 <option value="Libra">Libra</option>
                             <option value="Otros">Otros</option>
                         </select>
				</div>
				</div>
				<div class="row">
				<div class="form-group col-sm-8" style="padding-right:0px;">
				<?php $st4=$rowz['volume']; $ecl = explode(' ', $st4);  ?>
				<input type="text" class="form-control " placeholder="Inserte Fuente de Poder" name="equantity" id="quantity" value="<?php echo $ecl[0]; ?>">
				</div>
				<div class="form-group col-sm-4" style="padding-left:0px;">
						<!--<input type="text" class="form-control" placeholder="Enter Quantity" name="quantity" id="quantity"> -->
						 <select class="form-control " id="energy" name="dropenergy" >
						    <option value="<?php echo $ecl[1];?>"><?php echo $ecl[1] ;?></option>
	                         <option value="Voltio">Voltio</option>  
                             <option value="Ohmio">Ohmio</option>  
							 <option value="Vatios">Vatios</option>  
							 <option value="Amperio">Amperio</option>
                             <option value="Otros">Otros</option>								 
                         </select>
				</div>
				</div>
				<div class="form-group">
				
						<input type="text" class="form-control input"  placeholder="Velocidad de Rotacion" name="rotation" id="rot" value="<?php echo $rowz['rotationspeed'];?>">
				</div>
				<div class="form-group">
						<input type="text" class="form-control input" required placeholder="Material de Elaboracion" name="elobration" id="elobration" value="<?php echo $rowz['elaboration'];?>">
				</div>
				<div class="form-group">
						<input type="text" class="form-control input" required placeholder="Uso" name="use" id="use" value="<?php echo $rowz['puse']; ?>">
				</div>
				<div class="form-group">
						 <select class="form-control input" id="unit" name="size">
						   <option value="<?php echo $rowz['psize']; ?>"> <?php echo $rowz['psize']; ?> </option>
	                         <option value="Pequeño">Pequeño</option>  
                             <option value="Mediano">Mediano</option>  
							 <option value="Grande">Grande</option>  
							 <option value="Extra Grande">Extra Grande</option>
                             <option value="Otros">Otros</option>
                         </select>
				</div>
				<div class="form-group">
						 <select class="form-control" id="unit" required="true" name="packaging">
						    <option value="<?php echo $rowz['packing']; ?>"> <?php echo $rowz['packing']; ?> </option>
	                          <option value="Bolsa Plástica">Bolsa Plástica</option>  
                             <option value="Botella">Botella</option>  
							 <option value="Enlatado">Enlatado</option>  
							 <option value="Barril">Barril</option>
							 <option value="Carton">Carton</option>  
						     <option value="Caja de Madera">Caja de Madera</option>
                             <option value="Otros">Otros</option>
                         </select>	
						 </div>
					

					
						 
						 <div class="form-group ">
		
			<select  required class="form-control input" name="productType">
			<option  value="<?php echo $rowz['productType']; ?>"><?php echo $rowz['productType']; ?></option>
			<option value="Eco Friendly" >Eco Friendly </option>
			<option value="Innovation" >Innovacion</option>
			<option value="Normal Product" >Producto Normal</option>	
			</select>
			
			</div>	


			<div class="row">
				
			            <?php $stt8=$rowz['price_unit'];?>
						 <div class="input-group" style="margin-bottom:10px; width:93%; margin-left:15px;">  
  							<input type="text" class="form-control" placeholder="Precio" required="true" aria-describedby="basic-addon1" name="fobprice" value="<?php echo $rowz['price']; ?>"  required >
  							<span class="input-group-addon" id="basic-addon1">$</span>
  							<select class="form-control" id="unit" name="dropminimum">
						    <option value="<?php echo $stt8; ?>"><?php echo $stt8; ?></option> 
	                          <option value="Unidad">Unidad</option>  
                             <option value="Tonelada">Tonelada</option>  
							 <option value="Gramo">Gramo</option>  
							 <option value="Pulgada">Pulgada</option>
							 <option value="Onza">Onza</option>  
						     <option value="Galon">Galon</option>  
                             <option value="Pie">Pie</option>
                             <option value="Metro Cubico">Metro Cubico</option>
							 <option value="Pie Cubico">Pie Cubico</option> 
						     <option value="Envase de 20ft">Envase de 20ft</option>
							 <option value="Envase de 40ft">Envase de 40ft</option>
							<option value="Paletas">Paletas</option>	
							<option value="Carton">Carton</option>	
                            <option value="Otros">Otros</option>							 
                         </select>         	
							</div>
						 
						 
						 <?php $stt3=$rowz['miniorder']; $mcl = explode(' ', $stt3);  ?>




 						<div class="form-group col-md-8" style="padding-right:0px;">
						        <input class="form-control" type="text"  name="oquantity" value="<?php echo $mcl[0]; ?>" required="true" placeholder="Minimum order"/> 
						     </div>
						 <div class="form-group col-md-4" style="padding-left:0px;">
						 <select class="form-control " id="unit" name="dropminimum2">
				                        <option value="<?php echo $mcl[1];?>"><?php echo $mcl[1];?></option> 
				                         <option value="Unidad">Unidad</option>  
			                             <option value="Tonelada">Tonelada</option>  
										 <option value="Gramo">Gramo</option>  
										 <option value="Pulgada">Pulgada</option>
										 <option value="Onza">Onza</option>  
									     <option value="Galon">Galon</option>  
			                             <option value="Pie">Pie</option>
			                             <option value="Metro Cubico">Metro Cubico</option>
										 <option value="Pie Cubico">Pie Cubico</option> 
									     <option value="Envase de 20ft">Envase de 20ft</option>
										 <option value="Envase de 40ft">Envase de 40ft</option>
										<option value="Paletas">Paletas</option>	
										<option value="Carton">Carton</option>	
			                            <option value="Otros">Otros</option>								 
	                         </select>   
				        </div>


				</div>

					







						<div class="form-group">
								 <input type="text" class="form-control input-sm" required="true"  placeholder="Delivery Details" name="delivery_details" id="delivery_details" value="<?php echo $rowz['delivery_details']; ?>">
						 </div>	
						 <div class="form-group">
							<select class="form-control " id="payment" name="payment" required="true">
							    <option value="<?php echo $rowz['payment']; ?>"> <?php echo $rowz['payment']; ?> </option>
								<option value="Paypal">Paypal</option>  
								<option value="Transferencia Bancaria">Transferencia Bancaria</option>  
								<option value="Paypal y Transferencia Bancaria">Paypal y Transferencia Bancaria</option>  							 
							</select>   
						 </div> 

						 
						<div class="col-md-12">
							<center>
								<h6>Agregar Certificacion</h6>
							</center>
						</div>

						 <div class="form-group">
						 <?php
							$certification_verificacion= $rowz['certification'];; 
						 if(!empty($certification_verificacion)) {
						 ?>
    							<div class="input-group">
    								<img style="height:100px; width:100px; margin-right: 100px;" src="images/<?php echo $rowz['certification']; ?>" />
    								<input class="form-control" type="file"  name="file1" id="files"/>	
    								<a href="updateproduct.php?image=certificacion&pid=<?php echo $_GET['pid'];?>">Eliminar Certificacion</a>
    							</div>	
    					<?php
							}else{
							?>
								
								<input class="form-control " type="file"  name="file1" id="files" />
							
						<?php
						 }
						?> 
						 </div>

						 <div class="col-md-12">
							<center>
								<h5>Agregar las Imagenes de los Productos</h5>
							</center>
						</div>
						 
						<div class="form-group"> 
						  <?php
							$stri1=$rowz['image'];
							$stri2=$rowz['image2'];
							$stri3=$rowz['image3'];
							$stri4=$rowz['image4'];
							$stri5=$rowz['image5'];	
							?>
						 
						 <?php
						 if(!empty($stri1)) {
						 ?>
						 		<div class="input-group">
    								<img style="height:100px; width:100px; margin-right: 100px;" src="images/<?php echo $stri1; ?>" />
    								<input class="form-control" type="file"  name="imagenes1"  id="files1"/>
    								<a href="updateproduct.php?image=1&pid=<?php echo $_GET['pid'];?>">Eliminar Imagen</a>	
    							</div>	
    					<?php
							}else{
							?>
								<center><h6>Agregar Imagen #1</h6></center>
								<input class="form-control" type="file"  name="imagenes1"  id="files1"/>
							
						<?php
						 }
						?> 
							
							
						<?php
						 if(!empty($stri2)) {
						 ?>
						 		<div class="input-group">
    								<img style="height:100px; width:100px; margin-right: 100px;" src="images/<?php echo $stri2; ?>" />
    								<input class="form-control" type="file"  name="imagenes2"   id="files2"/>
    								<a href="updateproduct.php?image=2&pid=<?php echo $_GET['pid'];?>">Eliminar Imagen</a>
    							</div>		
    					<?php
							}else{
							?>
								<center><h6>Agregar Imagen #2</h6></center>
								<input class="form-control" type="file"  name="imagenes2"  id="files2"/>
							
						<?php
						 }
						?> 
							
						<?php
						 if(!empty($stri3)) {
						 ?>
						        <div class="input-group">
    								<img style="height:100px; width:100px; margin-right: 100px;" src="images/<?php echo $stri3; ?>" />
    								<input class="form-control" type="file"  name="imagenes3"   id="files3"/>
    								<a href="updateproduct.php?image=3&pid=<?php echo $_GET['pid'];?>">Eliminar Imagen</a>	
    							</div>	
    					<?php
							}else{
							?>
								<center><h6>Agregar Imagen #3</h6></center>
								<input class="form-control" type="file"  name="imagenes3"  id="files3"/>
							
						<?php
						 }
						?> 
						
						<?php
						 if(!empty($stri4)) {
						 ?>
						        <div class="input-group">
    								<img style="height:100px; width:100px; margin-right: 100px;" src="images/<?php echo $stri4; ?>" />
    								<input class="form-control" type="file"  name="imagenes4"   id="files4"/>
    								<a href="updateproduct.php?image=4&pid=<?php echo $_GET['pid'];?>">Eliminar Imagen</a>	
    							</div>	
    					<?php
							}else{
							?>
								<center><h6>Agregar Imagen #4</h6></center>
								<input class="form-control" type="file"  name="imagenes4"  id="files4"/>
							
						<?php
						 }
						?> 
							
						<?php
						 if(!empty($stri5)) {
						 ?>
						 		<div class="input-group">
    								<img style="height:100px; width:100px; margin-right: 100px;" src="images/<?php echo $stri5; ?>" />
    								<input class="form-control" type="file"  name="imagenes5"  id="files5"/>
    								<a href="updateproduct.php?image=5&pid=<?php echo $_GET['pid'];?>">Eliminar Imagen</a>
    							</div>		
    					<?php
							}else{
							?>
								<center><h6>Agregar Imagen #5</h6></center>
								<input class="form-control" type="file"  name="imagenes5"  id="files5"/>
							
						<?php
						 }
						?> 																
							 
						  </div>
						 
						  
						
						 
						 
						 
						 
				</div>	
	<style type="text/css">
	 #selectedFiles1 img{
	 	max-width: 400px;
                  margin-left: -30px;                  

              }    

    #selectedFiles2 img{	 
    max-width: 400px;	
                  margin-left: -30px;                  

              }              

</style>			

				<div class="row">		
					<div class="form-group col-sm-12">
											<center>
												<h5 style="text-align:center;">Area de Visualizacion Previa </h5>
												 <div id="selectedFiles1"></div>
												 <div id="selectedFiles2"></div>
						                   </center>	 
						 <div id="selectedFiles1"></div>
					</div>	
		
      			</div>						  
							
				
				</div>	
				<div class="row">
				<script src="editor.js"></script>
		<link href="editor.css" type="text/css" rel="stylesheet"/>
		<script>
			$(document).ready(function() {
				$("#txtEditor").Editor();
				$("#txtEditor").Editor("setText", "<?php echo $rowz['fulldescription']; ?>");
				
			});
				</script>

			<script>
			$(document).submit(function() {				
				$("#txtEditor").val($('.Editor-editor').html()); 
				
			});
				</script>
				<div class="form-group" style="margin-top:32px;margin-left:56px;"><h4><b> Descripcion:</b> </h4></div> 
 <div class="form-group col-sm-2"> </div>        
		<div class="form-group col-sm-8">
			    <textarea   class="form-control" placeholder="Enter Description" name="description" id="txtEditor" rows="4" col="6"><?php echo $rowz['fulldescription']; ?> </textarea>
				</div>	
                </div>				
				<!--<div class="form-group">
						<input type="text" class="form-control" placeholder="Enter Color" name="color" id="color">
				</div>  -->
				
				
			<!--	
			<div class="form-group">
			  <input class="form-control" type="file"  name="file2[]" multiple="multiple" required />
			</div>
		    -->
		
		  <center><button type="submit" name="btn_save_updates" class="btn btn-success" ><i class="fa fa-refresh" >
       &nbsp; Actualizar</i>
        </button>
		<a href="suppliers.php" type="button" class="btn" style=" color:black; background-color:#F0F0F0;"><i class="fa fa-times"></i> Cancelar</a>
       
           </br>
         
        </center>
        
         
        
	  </form>  
 <!-- END of FORM -->	  
       </div><!-- end col -->    
                <!-- end row -->
            </div><!-- end container -->
        </section>
		
		<!-- Trigger the modal with a button -->
<script>
	var selDiv = "";
		
	document.addEventListener("DOMContentLoaded", init, false);
	
	function init() {
		document.querySelector('#files').addEventListener('change', handleFileSelect, false);
		selDiv = document.querySelector("#selectedFiles1");
	}
		
	function handleFileSelect(e) {
		
		if(!e.target.files || !window.FileReader) return;
		
		selDiv.innerHTML = "";
		
		var files = e.target.files;
		var filesArr = Array.prototype.slice.call(files);
		filesArr.forEach(function(f) {
			if(!f.type.match("image.*")) {
				return;
			}
	
			var reader = new FileReader();
			reader.onload = function (e) {
				var html = "<img src=\"" + e.target.result + "\">" + "<br clear=\"left\"/>";
				selDiv.innerHTML += html;				
			}
			reader.readAsDataURL(f); 
			
		});
		
		
	}
	</script>
	<script>
	var selDiv = "";
		
	document.addEventListener("DOMContentLoaded", init1, false);
	
	function init1() {
		document.querySelector('#files1').addEventListener('change', handleFileSelect, false);
		selDiv = document.querySelector("#selectedFiles2");
	}
		
	function handleFileSelect(e) {
		
		if(!e.target.files || !window.FileReader) return;
		
		selDiv.innerHTML = "";
		
		var files = e.target.files;
		var filesArr = Array.prototype.slice.call(files);
		filesArr.forEach(function(f) {
			if(!f.type.match("image.*")) {
				return;
			}
	
			var reader = new FileReader();
			reader.onload = function (e) {
				var html = "<img src=\"" + e.target.result + "\">" +"<br clear=\"left\"/>";
				selDiv.innerHTML += html;				
			}
			reader.readAsDataURL(f); 
			
		});
		
		
	}
	</script>  
	
	<script>
	var selDiv = "";
		
	document.addEventListener("DOMContentLoaded", init1, false);
	
	function init1() {
		document.querySelector('#files2').addEventListener('change', handleFileSelect, false);
		selDiv = document.querySelector("#selectedFiles2");
	}
		
	function handleFileSelect(e) {
		
		if(!e.target.files || !window.FileReader) return;
		
		selDiv.innerHTML = "";
		
		var files = e.target.files;
		var filesArr = Array.prototype.slice.call(files);
		filesArr.forEach(function(f) {
			if(!f.type.match("image.*")) {
				return;
			}
	
			var reader = new FileReader();
			reader.onload = function (e) {
				var html = "<img src=\"" + e.target.result + "\">" +"<br clear=\"left\"/>";
				selDiv.innerHTML += html;				
			}
			reader.readAsDataURL(f); 
			
		});
		
		
	}
	</script>  
	
	<script>
	var selDiv = "";
		
	document.addEventListener("DOMContentLoaded", init1, false);
	
	function init1() {
		document.querySelector('#files3').addEventListener('change', handleFileSelect, false);
		selDiv = document.querySelector("#selectedFiles2");
	}
		
	function handleFileSelect(e) {
		
		if(!e.target.files || !window.FileReader) return;
		
		selDiv.innerHTML = "";
		
		var files = e.target.files;
		var filesArr = Array.prototype.slice.call(files);
		filesArr.forEach(function(f) {
			if(!f.type.match("image.*")) {
				return;
			}
	
			var reader = new FileReader();
			reader.onload = function (e) {
				var html = "<img src=\"" + e.target.result + "\">" +"<br clear=\"left\"/>";
				selDiv.innerHTML += html;				
			}
			reader.readAsDataURL(f); 
			
		});
		
		
	}
	</script>  
	
	<script>
	var selDiv = "";
		
	document.addEventListener("DOMContentLoaded", init1, false);
	
	function init1() {
		document.querySelector('#files4').addEventListener('change', handleFileSelect, false);
		selDiv = document.querySelector("#selectedFiles2");
	}
		
	function handleFileSelect(e) {
		
		if(!e.target.files || !window.FileReader) return;
		
		selDiv.innerHTML = "";
		
		var files = e.target.files;
		var filesArr = Array.prototype.slice.call(files);
		filesArr.forEach(function(f) {
			if(!f.type.match("image.*")) {
				return;
			}
	
			var reader = new FileReader();
			reader.onload = function (e) {
				var html = "<img src=\"" + e.target.result + "\">" + "<br clear=\"left\"/>";
				selDiv.innerHTML += html;				
			}
			reader.readAsDataURL(f); 
			
		});
		
		
	}
	</script>  
	
	<script>
	var selDiv = "";
		
	document.addEventListener("DOMContentLoaded", init1, false);
	
	function init1() {
		document.querySelector('#files5').addEventListener('change', handleFileSelect, false);
		selDiv = document.querySelector("#selectedFiles2");
	}
		
	function handleFileSelect(e) {
		
		if(!e.target.files || !window.FileReader) return;
		
		selDiv.innerHTML = "";
		
		var files = e.target.files;
		var filesArr = Array.prototype.slice.call(files);
		filesArr.forEach(function(f) {
			if(!f.type.match("image.*")) {
				return;
			}
	
			var reader = new FileReader();
			reader.onload = function (e) {
				var html = "<img src=\"" + e.target.result + "\">" + "<br clear=\"left\"/>";
				selDiv.innerHTML += html;				
			}
			reader.readAsDataURL(f); 
			
		});
		
		
	}
	</script>  
 <?php        

include('footer.php');
?>    