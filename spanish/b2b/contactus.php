<?php session_start();
include('Connect.php');
include('head.php');
?>
    <body>
     <!-- start topBar -->
     <?php include('topbar.php');
	include('middlebar.php');
	 ?>
	 <!-- end topBar -->
       <?php include('navh.php');
	   ?>

  <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

							$query="Select * from `users` Where userType='Admin'";
							$resultt=mysqli_query($connection,$query);
						$rows=mysqli_fetch_array($resultt);
					 $email =$rows['email'];


$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$to='info@orybu.com';
$uzername=$_POST['uzername'];
$email=$_POST['email'];
$msg=$_POST['msg'];
// More headers

$headers .= "From: <'$email'>" . "\r\n";
//$headers .= 'Cc: $email' . "\r\n";

$result=mail($to,$email,$msg,$headers);
if($result){
	$smsg = '<div class="alert alert-success" id="suc">Successfuly Sent !</div>';
    echo $smsg;
}

}
?>



        <!-- end section -->

        <!-- start section -->
        <section class="section white-backgorund">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-wrap">
                            <h2 class="title lines">Contactenos</h2>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row column-3">
                    <div class="col-sm-6 col-md-4">
                        <div class="icon-boxes style1">
                            <div class="icon">
                                <i class="fa fa-commenting-o text-warning"></i>
                            </div><!-- end icon -->
                            <div class="box-content">
                                <h6 class="thin">Necesita Ayuda?</h6>
                                <h5 class="text-warning">Usa nuestro Chat!</h5>
                            </div>
                        </div><!-- icon-box -->
                    </div><!-- end col -->
                    <div class="col-sm-6 col-md-4">
                        <div class="icon-boxes style1">
                            <div class="icon">
                                <i class="fa fa-phone text-info"></i>
                            </div><!-- end icon -->
                            <div class="box-content">
                                <h6 class="thin">Preguntas?</h6>
                                <h5 class="text-info">Llama + 56 9 57087442 !</h5>
                            </div>
                        </div><!-- icon-box -->
                    </div><!-- end col -->
                    <div class="col-sm-6 col-md-4">
                        <div class="icon-boxes style1">
                            <div class="icon">
                                <i class="fa fa-envelope-o text-success"></i>
                            </div><!-- end icon -->
                            <div class="box-content">
                                <h6 class="thin">o envianos un correo eléctronico</h6>
                                <h5 class="text-success">info@orybu.com</h5>
                            </div>
                        </div><!-- icon-box -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="spacer-40 no-border">

                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <form method="POST">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" id="name" class="form-control input-lg" placeholder="Nomnre" name="uzername">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="text" id="email" class="form-control input-lg" placeholder="E-mail" name="email">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message">Mensaje</label>
                                <textarea id="message" rows="6" class="form-control input-lg" placeholder="Mensaje" name="msg"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success round btn-lg" value="ENVIAR">
                            </div>
                        </form>
                    </div><!-- end col -->
                </div><!-- end row -->

            </div><!-- end container -->
        </section>
        <!-- end section -->

   <?php
   include("footer.php");
   ?>
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
$(document).ready(function(){


        $("#suc").fadeIn("8000");
        $("#suc").fadeOut("slow");
});
</script>

    </body>
</html>
