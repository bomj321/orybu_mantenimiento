<?php session_start();
error_reporting(0);
include('Connect.php');

$dropcat=$_SESSION['dropcat'];

$prod_name=$_SESSION['pname'];
$dropunit=$_SESSION['dropunit'];
$quantity=$_SESSION['quantity'];
$dtym=$_SESSION['dtym'];
$user =$_SESSION['uemail'];
$pais= $_SESSION['pais'];
$userid=$_SESSION['user_id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$desc=$_POST['description'];
$target_dir =$_SERVER['DOCUMENT_ROOT']."/joryan/ReqImages/";  
echo $target_dir;
$target_file = $target_dir . basename($_FILES["pimage"]["name"]);
$image=$_FILES['pimage']['name'];
$filelocation = $target_dir.$image;
$temp = $_FILES['pimage']['tmp_name'];
move_uploaded_file($temp, $filelocation);

// INSERTAR FECHA FINAL PARA USARLA Y ASI BORRAR LOS REGISTROS DE 2 DIAS O MAS ANTIGUOS A ESOS
  $date1 = $dtym;
  $date = date($date1);
  $mod_date = strtotime($date."+ 2 days");
  $fechafinal = date("Y-m-d",$mod_date);


$query = "INSERT INTO buyerrequests(buyer_id, BuyerName,prod_name,bmessage,image,catename,quantity,unit,dtym, tiempo,country) VALUES ('$userid','$user', '$prod_name','$desc' ,'$image','$dropcat','$quantity','$dropunit','$dtym', '$fechafinal', '$pais')";
 //echo $query;
 $result=mysqli_query($connection,$query);
 if($result){
	 echo '
      <script>
                    alert("Solicitado con éxito!");  //not showing an alert box.
                    window.location.href="breq.php";
        </script>  
   ';
 }
}
 ?>
<?php 
include('head.php');
?>
    <body>
     <!-- start topBar -->
     <?php include('topbar.php');
            include('middlebar.php');
            include('navh.php');
	?>
<div class="container">
<div class="row">
<div class="col-sm-8 col-sm-offset-2" style="margin-top:1rem;background-color:#D1F2EB;">
<div style="background-color:#D1F2EB;width:100%;padding:8px" >
<h2 class="title">Complete la Informaci&oacute;n</h2>  <br>
   <form method="POST" enctype="multipart/form-data">
                         <div class="form-group">
                          <label for="pimage">Imagen del Producto</label>
                          <input type="file" name="pimage"   required class="form-control input-lg">
                          </div>

                        <div class="form-group">
                          <label class="control-label" for="message" name="description">Descripci&oacute;n</label>
                          <textarea id="message" rows="5" class="form-control" required placeholder="Descripcion..." name="description"></textarea>
                       </div>
					 <div class="form-group">
                                <input type="submit"  class="btn btn-success round btn-md"  value="SOLICITAR">
                     </div>
	</form>
</div>
</div>
</div>
</div>
<br> <br>
<?php require 'footer.php' ?>
<script>
  $(document).ready(function(){
    setTimeout(function() {
    $('#suc').fadeOut('fast');
     }, 1000);
});
</script>

</body>
</html>
