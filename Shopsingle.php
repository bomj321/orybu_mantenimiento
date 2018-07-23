<?php session_start();
    if (!isset($_SESSION['uemail'])):
        header('location:singlelogin.php');
    endif;
require 'Connect.php';
$pid=$_GET['pid'];
$_SESSION['pid']=$pid;
$_SESSION['user_id'];
//Inserción a la db para las estadisticas de los usuarios
$date =  date('Y-m-d');// Tiempo
$chart="INSERT INTO chart_basic_user (id,id_pid,visited_at,visit) VALUES ('NULL','{$pid}','{$date}','1')";
mysqli_query($connection, $chart);

//Fin de Inserción a la db para las estadisticas de los usuarios

$stquery1="SELECT * FROM products where pid='$pid'";
$stres1=mysqli_query($connection, $stquery1);
$r1=mysqli_fetch_array($stres1);
$uzerid=$r1['user_id'];
$catid=$r1['catid'];
$subcatid=$r1['subcatid'];

//Inserción a la db para las estadisticas de los administradores
$chart_ad="INSERT INTO `chart_category_subcatego_admin` (id,id_catid,id_subcatid,visited_at,visit) VALUES ('NULL','{$catid}','{$subcatid}','{$date}','1')";
mysqli_query($connection, $chart_ad);
//Fin de Inserción a la db para las estadisticas de los administradores

$stquery2="SELECT * FROM users where user_id='$uzerid'";
$stres2=mysqli_query($connection, $stquery2);
while ($r2=mysqli_fetch_array($stres2)) {
    $sellerid=$r2['user_id'];
    $prodStat=$r2['productstat'];
    $prodStat++;
}
$upstquery="UPDATE users SET productstat='$prodStat' where user_id='$uzerid'";
mysqli_query($connection, $upstquery);

$query="SELECT * from products where pid=$pid";
$res=mysqli_query($connection, $query);
$row=mysqli_fetch_array($res);
$title =$row['ntitle'];
$price =$row['price'];
$port =$row['port'];
$miniorder =$row['miniorder'];
$delivery_details =$row['delivery_details'];
$payment =$row['payment'];
$myString = $row['image'];
$cl = explode(',', $myString);
require('head.php');
?>

    <body>
    <!-- start topBar -->
    <!-------------------------TRADUCTOR-->
 <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,fr,zh-TW', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL, multilanguagePage: true}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

 <!-------------------------TRADUCTOR-->


        <?php




         include('topbar.php');
        include('middlebar.php');
        include('navh.php');
        ?>

<!-- start section -->
<section class="section">
  
        
<div class="container">

    <div class="row">
        <div class="col-sm-4">
            <div class='carousel slide product-slider' data-ride='carousel' data-interval="false">
                <div class='carousel-inner'>
                    <div class='item active'>
                    <figure>
                    <img src="images/<?php echo $cl[0]; ?>" alt="" />
                    </figure>
                    </div><!-- end item -->
                    <div class='item'>
                    <figure>
                    <img src="images/<?php echo $cl[1];  ?>" alt="" />
                    </figure>
                    </div><!-- end item -->
                    <div class='item'>
                    <figure>
                    <img src="images/<?php echo $cl[2];  ?>" alt="" />
                    </figure>
                    </div><!-- end item -->
                    <div class='item'>
                    <figure>
                    <img src="images/<?php echo $cl[3];  ?>" alt="" />
                    </figure>
                    </div><!-- end item -->
                    <div class='item'>
                    <figure>
                    <img src="images/<?php echo $cl[4];  ?>" alt="" />
                    </figure>
                    </div><!-- end item -->
                    <div class='item'>
                    <figure>
                    <img src="images/<?php echo $cl[5];  ?>" alt="" />
                    </figure>
                    </div><!-- end item -->
                    <!-- Arrows -->
                    <a class='left carousel-control' href='.product-slider' data-slide='prev'>
                    <span class='fa fa-angle-left'></span>
                    </a>
                    <a class='right carousel-control' href='.product-slider' data-slide='next'>
                    <span class='fa fa-angle-right'></span>
                    </a>
                </div><!-- end carousel-inner -->
                <!-- thumbs -->
                <ol class='carousel-indicators mCustomScrollbar meartlab'>
                    <li data-target='.product-slider' data-slide-to='0' class='active'><img src='images/<?php echo $cl[0]; ?>' alt='' /></li>
                    <li data-target='.product-slider' data-slide-to='1' ><img src='images/<?php echo $cl[1]; ?>' alt='' /></li>
                    <li data-target='.product-slider' data-slide-to='2' ><img src='images/<?php echo $cl[2]; ?>' alt='' /></li>
                    <li data-target='.product-slider' data-slide-to='3' ><img src='images/<?php echo $cl[3]; ?>' alt='' /></li>
                    <li data-target='.product-slider' data-slide-to='4' ><img src='images/<?php echo $cl[4]; ?>' alt='' /></li>
                </ol><!-- end carousel-indicators -->
            </div><!-- end carousel -->
        </div><!-- end col -->
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center"><?php echo $title; ?></h2>
                    <ul class="list list-inline">
                        <h6 style="display:inline;">FOB Price:</h6> <li><p class="text-primary">$<?php echo $price; ?></p></li><br>
                        <h6 style="display:inline;">Minimum Order:</h6> <li><p class="text-primary"><?php echo $miniorder; ?></p></li><br>
                        <h6 style="display:inline;"> Delivery Detail:</h6> <li><p class="text-primary"><?php echo $delivery_details;?> after payment</p></li><br>
                        <h6 style="display:inline;">Port:</h6><li><p class="text-primary"><?php echo $port;?></p></li><br>
                        <h6 style="display:inline;">Payment method:</h6> <li><p class="text-primary"><?php echo $payment;?></p></li>
                    </ul>
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-sm-12">
                    <form action="mycartArry.php?pid=<?php echo $pid; ?>&precio_nuevo=<?php echo $price; ?>&cantidad_nuevo=1" method="post">
                        <hr class="spacer-15">
                        <ul class="list list-inline">
                            <li><a class="btn btn-success btn-md round" href="chat2.php?sellerid=<?php echo $sellerid;?>&pid=<?php echo $pid;?>"><i class="fa fa-chat mr-5"></i>CONTACT SUPPLIER</a></li>
                            <li><a class="btn btn-success btn-md round" href="add_favory.php?id=<?php echo $pid; ?>"><i class="fa fa-heart mr-5"></i>ADD MY FAVORITE</a></li>
                            <li><button type="submit"  class="btn btn-success btn-md round"><i class="fa fa-shopping-basket mr-5"></i>BUY NOW</button></li>
                        </ul>
                    </form>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end col -->
    </div><!-- end row -->
<!--HASTA AQUI-->
<?php	$pid =$_GET['pid'];
$sql="SELECT * FROM  products  INNER JOIN users ON(products.email=users.email) INNER JOIN seller ON(users.email=seller.email) INNER JOIN categories ON (products.catid=categories.catid) Where products.pid ='$pid'";

$result=mysqli_query($connection, $sql);
if ($result == false) {
    trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $connection->error, E_USER_ERROR);
}

$nr=mysqli_num_rows($result);
$rows=mysqli_fetch_array($result);
?>
<hr class="spacer-60">

<div class="row">
<div class="col-xs-12 col-sm-2">
<!-- Nav tabs -->
<ul class="nav nav-tabs style2 tabs-left">
<li class="active"><a href="#description" data-toggle="tab">	Product Details</a>
</li>
<li ><a href="#companyinfo" data-toggle="tab">Company Info</a>
</li>

<li ><a href="#reviews" data-toggle="tab">Product Description</a></li>
</ul>
</div><!-- end col -->
<div class="col-xs-12 col-sm-1">
</div>
<div class="col-xs-12 col-sm-9">
<!-- Tab panes -->
<div class="tab-content style2">
<div class="tab-pane active" id="description">
<h5>Additional Info</h5>

<hr class="spacer-15">

<div class="row">
<div class="col-sm-12 col-md-6">
        <dl class="dl-horizontal">
        <dt>Dimensions</dt>
        <?php 
        if (!empty($rows['dimension']) and !empty($rows['dimension2']) and !empty($rows['dimension3'])) {
            ?>    
        <dd><?php echo $rows['dimension']; ?> x <?php echo $rows['dimension2']; ?> x <?php echo $rows['dimension3']; ?> <?php echo $rows['dimension4']; ?></dd>

        <?php
        } else {
            ?>
        <dd>N/A</dd>
        
        <?php
        }
        
        ?>
        <dt>Materials</dt>
        <dd><?php echo $rows['elaboration']; ?></dd>
        <dt>Use</dt>
        <dd><?php echo $rows['puse']; ?></dd>
        <dt>Capacity</dt>
        <?php 
        if (!empty($rows['capacity'])) {
            ?>    
        <dd><?php echo $rows['capacity']; ?> </dd>

        <?php
        } else {
            ?>
        <dd>N/A</dd>
        
        <?php
        }

    ?>
        <dt>Energy Power</dt>
        <?php 
        if (!empty($rows['energypower'])) {
            ?>    
        <dd><?php echo $rows['energypower']; ?> </dd>

        <?php
        } else {
            ?>
        <dd>N/A</dd>
        
        <?php
        }
        
        ?>
        </dl>
</div><!-- end col -->
<div class="col-sm-12 col-md-6">
        <dl class="dl-horizontal">
        <dt>Weight</dt>
        <dd><?php echo $rows['weight']; ?></dd>
        <dt>Manufacturer</dt>
        <dd><?php echo $rows['country']; ?></dd>
        <dt>Payment</dt>
        <dd><?php echo $rows['payment']; ?></dd>
        <dt>Packing</dt>
        <dd><?php echo $rows['packing']; ?></dd>
        <dt>Rotation Speed</dt>
        <?php 
        if (!empty($rows['rotationspeed'])) {
            ?>    
        <dd><?php echo $rows['rotationspeed']; ?> </dd>

        <?php
        } else {
            ?>
        <dd>N/A</dd>
        
        <?php
        }
        
        ?>
        </dl>
       
</div><!-- end col -->

</div><!-- end row -->
</div><!-- end tab-pane -->

<div  class="tab-pane" id="companyinfo">
<h5>Company Name</h5>
<p><?php echo $rows['company_name']; ?>
</p>

<hr class="spacer-15">

<div class="row">
<div class="col-sm-12 col-md-6">
<dl class="dl-horizontal">
<dt>Seller Name</dt>
<dd><?php echo $rows['firstName']; ?>  <?php echo $rows['lastName']; ?></dd>
<dt>Country</dt>
<dd><?php echo $rows['countryName']; ?></dd>
<dt>Business Type</dt>
<dd><?php echo $rows['businessType']; ?></dd>
</dl>
</div><!-- end col -->
<div class="col-sm-12 col-md-6">
 <form class="form-inline">
  <div class="form-group">
    <label for="company">Company Description</label>    
    <textarea  style="border:none;" name="companyDescription"  rows="3"  class="form-control"   placeholder="Description"><?php echo $rows['companyDescription']; ?></textarea>
  </div>
</form>   
</div><!-- end col -->
</div><!-- end row -->
</div><!-- end tab-pane -->
<div class="tab-pane" id="reviews">
<div class="row">

<h5>Product Description</h5>
<hr class="spacer-15">
<p>
<?php echo $rows['fulldescription']; ?>
</p>



</div><!-- end row -->
</div><!-- end tab-pane -->
</div><!-- end tab-content -->
</div><!-- end col -->
</div><!-- end row -->


            </div><!-- end container -->
        </section>
        <!-- end section -->
    <?php
    include('footer.php');
    ?>

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
        
    </body>
</html>
