<?php  if(!isset($_SESSION))
    {
        session_start();
    } 
require 'Connect.php';


 ?>
 <!-------------------------TRADUCTOR-->
 <div id="google_translate_element">
     
 </div>
 <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'fr,zh-CN', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL, multilanguagePage: true}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

 <!-------------------------TRADUCTOR-->



  <div class="topBar inverse">
            <div class="container">
                <ul class="list-inline pull-left hidden-sm hidden-xs">
                    <li style="color:#878c94;"><span class="text-primary">¿Tienes una pregunta?</span> Envíenos un correo electrónico info@orybu.com</li>
                </ul>

                <ul class="topBarNav pull-right">
                     <li class="linkdown">
                        <a href="javascript:void(0);">
                            <i class="fa fa-usd mr-5"></i>
                            USD
                        </a>
                    </li>
                    <li class="linkdown" >
                        <a href="javascript:void(0);">
                           <img src="img/flags/flag-spain.jpg" class="mr-5" alt="">
                            <span class="hidden-xs">
                             Español
                                <i class="fa fa-angle-down ml-5"></i>
                            </span>
                        </a>
                        <ul class="w-100">
                            
                            <li><a href="../../"><img style="width: 15px" src="img/flags/eeuu.jpeg" class="mr-5" alt="">English</a>
							</li>
                        </ul>
                    </li>


			<?php
			if (isset($_SESSION['uemail'])) { ?>
			<?php
			$uemail =$_SESSION['uemail'];
		 	$sql="Select * from `users`Where email ='$uemail'";
							$result=mysqli_query($connection,$sql);
		 $nr = mysqli_num_rows($result);
			$r=mysqli_fetch_array($result);




			?>



					<li class="linkdown">
                        <a href="javascript:void(0);">
                            <i class="fa fa-user mr-5"></i>
                            <span class="hidden-xs">
                                Hola.  <?php echo $r['firstName'];   ?>
                                <i class="fa fa-angle-down ml-5"></i>
                            </span>
                        </a>
						<?php
				 $userType = $_SESSION['utype'];
						if($userType == 'supplier')
						{
					?>
                        <ul class="w-150">

							<li><a href="myorybue.php">Mi Orybu</a></li>
							<li><a href="suppliers.php" class="top">Administrar productos</a></li>
                            <li><a href="product_add.php">Subir Producto</a></li>
                            <li><a href="chat2.php">Mis Chats</a></li>
                            <li><a href="adminchat.php?admin=63">Contacta al Admin</a></li>
							<li><a href="mysorders.php">Mis ordenes</a></li>
							<li><a href="favoritos.php">Favoritos</a></li>
								<li >
					<a href="logoff.php">Cerrar sesión</a></li>

                        </ul>
                    </li>
					<?php
					}
					else if($userType == 'buyer')
					{
					?>
					   <ul class="w-150">
                             <li><a href="myorybue.php">Mi Orybu</a></li>
							<li><a href="buyeraccount.php">Mi cuenta</a></li>
							<li><a href="buyerorders.php">Mis ordenes</a></li>
										<li >
                        <li><a href="adminchat.php?admin=63">Contacta al Admin</a></li>
                            <li><a href="chat2.php">Mis Chats</a></li>
					       <li><a href="logoff.php">Cerrar sesión</a></li>


                        </ul>
					<?php
					}
					else if($userType == 'both')
					{
					?>
					   <ul class="w-150">
							<li><a href="myorybue.php">Mi Orybu</a></li>
							<li><a href="suppliers.php" class="top">Administrar productos</a></li>
                            <li><a href="product_add.php">Subir Producto</a></li>
                             <li><a href="chat2.php">Mis Chats</a></li>
                        <li><a href="adminchat.php?admin=63">Contacta al Admin</a></li>
                            <li><a href="buyerorders.php">Mis ordenes</a></li>
							<li><a href="favoritos.php">Favoritos</a></li>
							<li><a href="logoff.php">Cerrar sesión</a></li>
                        </ul>
					<?php
					}


				} else {	?>


				<li class="linkdown" >
                        <a href="javascript:void(0);">
                            <i class="fa fa-user mr-5"></i>
                            <span class="hidden-xs">
                                Hola.  Iniciar sesión
                                <i class="fa fa-angle-down ml-5"></i>
                            </span>
                        </a>
                        <ul class="w-150">
                            <li><a href="singlelogin.php">Iniciar sesión</a></li>
                            <li><a href="register.php">Crear una cuenta</a></li>
                        </ul>
                    </li>
				<?php	}  ?>
                </ul>
            </div><!-- end container -->
        </div>
