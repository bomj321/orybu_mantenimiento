<?php session_start();
require 'Connect.php';
error_reporting(0);
include('head.php');
 $email=$_SESSION['uemail'];
 $usertype=$_SESSION['utype'];
 	
$sql="SELECT * FROM seller  WHERE email='$email'";
$stmt=mysqli_query($connection,$sql);
if($stmt == false) {
trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $connection->error, E_USER_ERROR);
}
$rowcount=mysqli_num_rows($stmt);
$row = mysqli_fetch_array($stmt);
if($rowcount>0){
	      $name_bank= $row['bank'];
	      $bank_code= $row['bank_code'];
	      $number_bank= $row['number_bank'];
	
	      $companyName= $row['company_name'];
          $companyLegalNo= $row['companyLegalNo'];
		  $street= $row['street'];
		  $city= $row['city'];
		  $province= $row['province'];
		  $zipCode= $row['zipCode'];
		  $countryName= $row['countryName'];
		  $businessType= $row['businessType'];
		  $noOfEmployee= $row['noOfEmployee'];
		  $companyDescription= $row['companyDescription'];
		  $companylogo= $row['companylogo'];
		  $myString = $row['companylicense'];
		  $myString2 = $row['companylicense2'];
	      $myString3 = $row['companylicense3'];
	      $myString4 = $row['companylicense4'];
	      $myString5 = $row['companylicense5'];

	
}else{
	      $name_bank= "";
	      $bank_code= "";
	      $number_bank= "";
	      $companyName= "";
          $companyLegalNo= "";
		  $street= "";
		  $city= "";
		  $province= "";
		  $zipCode= "";
		  $countryName= "";
		  $businessType= "";
		  $noOfEmployee= "";
		  $companyDescription= "";
		  $companylogo= "";
		  $myString = "";
		  $myString2 = "";
	      $myString3 = "";
	      $myString4 = "";
	      $myString5 = "";
	
	
}
   
	include('topbar.php');
		include('middlebar.php');
	  include('navh.php');  
?>   
<style>
    #selectedFiles img {
        max-width: 125px;
        max-height: 125px;
        float: left;
        margin-bottom:10px;
    }
</style>
<?php

if(isset($_POST['btn_save_updates']))
	{
	      $name_bank= $_POST['bank_name'];
	      $bank_code= $_POST['bank_code'];
	      $number_bank= $_POST['bank_number'];
	      $companyName= $_POST['companyName'];
	      $companyLegalNo= $_POST['companyLegalNo'];
		  $street= $_POST['street'];
		  $city= $_POST['city'];
		  $province= $_POST['province'];
		  $zipCode= $_POST['zipCode'];
		  $countryName= $_POST['selectcountryName'];
		  $businessType= $_POST['businessType'];
		  $noOfEmployee= $_POST['noOfEmployee'];
	 	  $companyDescription= $_POST['companyDescription'];
		  
		
	/*
	
	
							
							*/
		
		
	  if($rowcount==0){
		  
		/*$sqllicense ="INSERT INTO seller(email,company_name,street,city,zipCode,province,businessType,noOfEmployee,companyDescription,companylogo,countryName,companylicense,companylicense2,companylicense3,companylicense4,companylicense5,phoneNo,companyLegalNo,limitTopList,limitTotalProduct,limitShowCase) VALUES ('$email','$companyName','$street','$city','$zipCode','$province','$businessType','$noOfEmployee','$companyDescription','$images','$countryName','$image1,$image2,$image3,$image4,$image5','$phone','$companyLegalNo','$limitTopList','$limitTotalProduct','$limitShowCase')"; */ 
		  
		 $limitTopList=7;
	     $limitTotalProduct=38;
	     $limitShowCase=5; 
		 $sqllicense ="INSERT INTO seller(email,company_name,street,city,zipCode,province,businessType,noOfEmployee,companyDescription,countryName,bank, 	bank_code,number_bank,phoneNo,companyLegalNo,limitTopList,limitTotalProduct,limitShowCase) VALUES ('$email','$companyName','$street','$city','$zipCode','$province','$businessType','$noOfEmployee','$companyDescription','$countryName',$name_bank,$bank_code,$number_bank,'$phone','$companyLegalNo','$limitTopList','$limitTotalProduct','$limitShowCase')";   
		 
		  /*$sqllicense="INSERT INTO seller email='".$email."', company_name ='".$companyName ."',street='".$street ."',city='".$city ."',zipCode='". $zipCode."',province='". $province."',businessType='".$businessType ."',noOfEmployee='".$noOfEmployee ."',companyDescription='". $companyDescription."',countryName='".$countryName ."',companyLegalNo='".$companyLegalNo."' ";*/
		 mysqli_query($connection,$sqllicense); 
		  	

	 }else{
		$sqllicense="UPDATE seller  SET company_name ='".$companyName ."',street='".$street ."',city='".$city ."',zipCode='". $zipCode."',province='". $province."',businessType='".$businessType ."',noOfEmployee='".$noOfEmployee ."',companyDescription='". $companyDescription."',countryName='".$countryName ."',companyLegalNo='".$companyLegalNo."',bank='".$name_bank."',bank_code='".$bank_code."',number_bank='".$number_bank."' WHERE email='$email'";
		mysqli_query($connection,$sqllicense); 
		$stmtimages = $connection->prepare($sqllicense);		  
		
		  }

//////////////////////////////////////////////////////////////////////SUBIR IMAGENES////////////////////////////////////////////////////////////////
$target_dir = "images/";

	if($_FILES["imagenes_logo"]["name"] !="" AND !empty($_FILES["imagenes_logo"]["name"]))
{
		  $target_file = $target_dir . basename($_FILES["imagenes_logo"]["name"]);
		  $images=$_FILES['imagenes_logo']['name'];
		  $filelocation = $target_dir.$images;
          $temp = $_FILES['imagenes_logo']['tmp_name'];
		  move_uploaded_file($temp, $filelocation);
}
	
	if($_FILES["imagenes_action1"]["name"] !="" AND !empty($_FILES["imagenes_action1"]["name"]))
{
		 	$target_file = $target_dir . basename($_FILES["imagenes_action1"]["name"]);
			$image1=$_FILES['imagenes_action1']['name'];
			$filelocation = $target_dir.$image1;
			$temp1 = $_FILES['imagenes_action1']['tmp_name'];
			move_uploaded_file($temp1, $filelocation);
}	
	if($_FILES["imagenes_action2"]["name"] !="" AND !empty($_FILES["imagenes_action2"]["name"]))
{

			$target_file = $target_dir . basename($_FILES["imagenes_action2"]["name"]);
			$image2=$_FILES['imagenes_action2']['name'];
			$filelocation = $target_dir.$image2;
			$temp2 = $_FILES['imagenes_action2']['tmp_name'];
}	        move_uploaded_file($temp2, $filelocation);
	
	if($_FILES["imagenes_action3"]["name"] !="" AND !empty($_FILES["imagenes_action3"]["name"]))
{
		
			$target_file = $target_dir . basename($_FILES["imagenes_action3"]["name"]);
			$image3=$_FILES['imagenes_action3']['name'];
			$filelocation = $target_dir.$image3;
			$temp3 = $_FILES['imagenes_action3']['tmp_name'];
			move_uploaded_file($temp3, $filelocation); 
 }	
	if($_FILES["imagenes_action4"]["name"] !="" AND !empty($_FILES["imagenes_action4"]["name"]))
{

			$target_file = $target_dir . basename($_FILES["imagenes_action4"]["name"]);
			$image4=$_FILES['imagenes_action4']['name'];
			$filelocation = $target_dir.$image4;
			$temp4 = $_FILES['imagenes_action4']['tmp_name'];
			move_uploaded_file($temp4, $filelocation); 		
 }
	if($_FILES["imagenes_action5"]["name"] !="" AND !empty($_FILES["imagenes_action5"]["name"]))
{
			$target_file = $target_dir . basename($_FILES["imagenes_action5"]["name"]);
			$image5=$_FILES['imagenes_action5']['name'];
			$filelocation = $target_dir.$image5;
			$temp5 = $_FILES['imagenes_action5']['tmp_name'];
			move_uploaded_file($temp5, $filelocation); 
 } 	 ////////////////////////////////////////////////
	////////////////////////////////////////////////
	
  if(!empty($images)){
  	 $sql_logo="UPDATE seller  SET companylogo='".$images."' WHERE (email='$email')";
 mysqli_query($connection,$sql_logo);
  }	
	
	
  if(!empty($image1)){
  	 $sql2="UPDATE seller  SET companylicense='".$image1."' WHERE (email='$email')";
 mysqli_query($connection,$sql2);
  }
	

if(!empty($image2)){
  	 $sql3="UPDATE seller  SET companylicense2='".$image2."' WHERE (email='$email')";
 mysqli_query($connection,$sql3);
  }
	
if(!empty($image3)){
  	$sql4="UPDATE seller  SET companylicense3='".$image3."' WHERE (email='$email')";
 mysqli_query($connection,$sql4);
  }
	
if(!empty($image4)){
  	$sql5="UPDATE seller  SET companylicense4='".$image4."' WHERE (email='$email')";
 mysqli_query($connection,$sql5);
  }
	
if(!empty($image5)){
  	$sql6="UPDATE seller  SET companylicense5='".$image5."' WHERE (email='$email')";
 mysqli_query($connection,$sql6);
  }
//////////////////////////////////////////////////////////////////////SUBIR IMAGENES////////////////////////////////////////////////////////////////
	echo' 
						  <script>
									alert("Updated Your Company Information!");  //not showing an alert box.
									 window.location.href="profile.php";
						 </script>
							';

}
                       
?>
        <!-- start section -->
        <div class="container">
                <div class="row ">
                    <!-- start sidebar -->
      
     </br>
                      </br>
					  <div style="padding-left:200px">
                     <div class="col-sm-10 " style="background-color:#f7f7f7;">
 <form method="POST" enctype="multipart/form-data">
								  
					  </br>
                               <center>	</br>
                      </br>
                      <h2>Company Information </h2></center>
									<div class="form-group">
									</br>
									</br>
									<div class="form-group">
										<input type="text" name="bank_name" id="comanyName" tabindex="3" class="form-control"  value="<?php echo $name_bank ?>" placeholder="Bank Name">
									</div>
									
									<div class="form-group">
										<input type="text" name="bank_code" id="comanyName" tabindex="3" class="form-control"  value="<?php echo $bank_code ?>" placeholder="Bank Code">
									</div>
									
									<div class="form-group">
										<input type="text" name="bank_number" id="comanyName" tabindex="3" class="form-control"  value="<?php echo $number_bank ?>" placeholder="Number Bank">
									</div>
									
									
										<div class="form-group">
										<input type="text" name="companyName" id="comanyName" tabindex="3" class="form-control"  value="<?php echo $companyName ?>" placeholder="Company Information">
									</div>
										<div class="form-group">
										<input type="text" name="companyLegalNo" id="companyLegalNo" tabindex="3" class="form-control"  value="<?php echo $companyLegalNo ?>" placeholder="Company Legal No">
									</div>
						
                                               <input   type="text" name="street" tabindex="1" class="form-control"   value="<?php echo $street ?>" placeholder="Street">
									</div>
									</br>
						<div class="form-group">
										
					        <input  type="text" name="city" tabindex="1" class="form-control"   value="<?php echo $city ?>" placeholder="City">
							
										
						</div>
							<div class="form-group">
										
					        <input  type="text" name="province" tabindex="1" class="form-control"  value="<?php echo $province ?>" placeholder="Province">
							
										
						</div>
							<div class="form-group">
										
					        <input  type="text" name="zipCode" tabindex="1" class="form-control"   value="<?php echo $zipCode ?>" placeholder="Zip Code">
							
										
						</div>
										<div class="form-group">
					      
											    <select name="selectcountryName"  class="form-control input" placeholder="Country">
								  <option value="<?php echo $countryName ?>"><?php echo $countryName ?></option>
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
											 </select>
									</div>
									</br>
									</br>
									<h4>Describe your Company </h4>
									<div class="form-group">
										<select name="businessType"  class="form-control input">
								  <option value="<?php echo $businessType ?>"><?php echo $businessType ?></option>
                                             <option value="Manufacturer">Manufacturer</option>
                                             <option value="Distributor" >Distributor</option>
											  <option value="Trading Company" >Trading Company </option>
                                             <option value="Retailer" >Retailer</option>  <option value="other" >Other</option>      Trading Company                                       
											 </select>
									</div>
									<div class="form-group">
										
					        <input  type="text" name="noOfEmployee" tabindex="1" class="form-control"   value="<?php echo $noOfEmployee ?>" placeholder="Nro of Employee">
													
							</div>
							<div class="form-group">
										
					        <textarea  name="companyDescription" tabindex="1" class="form-control"   rows="4" cols="50" placeholder="Description">
							 <?php echo $companyDescription?>
							
							</textarea>	
						</div>
										<div class="form-group">
						 <?php
						 if(!empty($companylogo)) {
						 ?>
    								<img style="height:100px; width:100px;" src="images/<?php echo $companylogo; ?>" />
    								<input class="form-control" type="file"  name="imagenes_logo" id="files"/>	
    					<?php
							}else{
							?>
								<center><h4>No Logo</h4></center>
								<input class="form-control " type="file"  name="imagenes_logo" id="files" />
							
						<?php
						 }
						?> 
						 </div>
						
						
						<div class="form-group" style="border-style: solid;"> 						 
						 
						 <?php
						 if(!empty($myString)) {
						 ?>
    								<img style="height:100px; width:100px;" src="images/<?php echo $myString; ?>" />
    								<input class="form-control" type="file"  name="imagenes_action1"  id="files1"/>	
    					<?php
							}else{
							?>
								<center><h4>No Picture</h4></center>
								<input class="form-control" type="file"  name="imagenes_action1"  id="files1"/>
							
						<?php
						 }
						?> 
							
							
						<?php
						 if(!empty($myString2)) {
						 ?>
    								<img style="height:100px; width:100px;" src="images/<?php echo $myString2; ?>" />
    								<input class="form-control" type="file"  name="imagenes_action2"   id="files2"/>	
    					<?php
							}else{
							?>
								<center><h4>No Picture</h4></center>
								<input class="form-control" type="file"  name="imagenes_action2"  id="files2"/>
							
						<?php
						 }
						?> 
							
						<?php
						 if(!empty($myString3)) {
						 ?>
    								<img style="height:100px; width:100px;" src="images/<?php echo $myString3; ?>" />
    								<input class="form-control" type="file"  name="imagenes_action3"   id="files3"/>	
    					<?php
							}else{
							?>
								<center><h4>No Picture</h4></center>
								<input class="form-control" type="file"  name="imagenes_action3"  id="files3"/>
							
						<?php
						 }
						?> 
						
						<?php
						 if(!empty($myString4)) {
						 ?>
    								<img style="height:100px; width:100px;" src="images/<?php echo $myString4; ?>" />
    								<input class="form-control" type="file"  name="imagenes_action4"   id="files4"/>	
    					<?php
							}else{
							?>
								<center><h4>No Picture</h4></center>
								<input class="form-control" type="file"  name="imagenes_action4"  id="files4"/>
							
						<?php
						 }
						?> 
							
						<?php
						 if(!empty($myString5)) {
						 ?>
    								<img style="height:100px; width:100px;" src="images/<?php echo $myString5; ?>" />
    								<input class="form-control" type="file"  name="imagenes_action5"  id="files5"/>	
    					<?php
							}else{
							?>
								<center><h4>No Picture</h4></center>
								<input class="form-control" type="file"  name="imagenes_action5"  id="files5"/>
							
						<?php
						 }
						?> 																
							 
						  </div>
							
						<div class="col-sm-6 col-sm-offset-3">	
							<center style ="display: inline-block; text-align: center;"><button type="submit" name="btn_save_updates" class="btn btn-success" ><i class="fa fa-refresh" >
       						&nbsp; Update Profile</i>
        			</button>
           
       						
       						
						<a href="myorybue.php" type="button" class="btn" style=" color:black; background-color:whiter; border: 1px solid ;" ><i class="fa fa-times"></i> CANCEL</a>       
						<br>
						<br>
						<br>
         
        			</center>
						</div>		
							
								
						</form>	
						</div>
						
								<div class="col-sm-2">
									<div class="form-group">
											<h4>Uploaded Picture Preview Area </h4>
												<div id="selectedFiles1"></div>
												<div id="selectedFiles2"></div>
										</div>
								</div>		
						
						</div>
				  </div><!-- end row -->                
            </div><!-- end container -->
        </section>
        <!-- end section -->
  

           </div>
       <?php require'footer.php';  ?>
        <!-- end footer -->
        
        
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
				var html = "<img src=\"" + e.target.result + "\">" + f.name + "<br clear=\"left\"/>";
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
				var html = "<img src=\"" + e.target.result + "\">" + f.name + "<br clear=\"left\"/>";
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
				var html = "<img src=\"" + e.target.result + "\">" + f.name + "<br clear=\"left\"/>";
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
				var html = "<img src=\"" + e.target.result + "\">" + f.name + "<br clear=\"left\"/>";
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
				var html = "<img src=\"" + e.target.result + "\">" + f.name + "<br clear=\"left\"/>";
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
				var html = "<img src=\"" + e.target.result + "\">" + f.name + "<br clear=\"left\"/>";
				selDiv.innerHTML += html;				
			}
			reader.readAsDataURL(f); 
			
		});
		
		
	}
	</script>  
	
    </body>
</html>
    