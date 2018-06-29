<?php session_start();
require 'Connect.php';
include 'head.php';
$email=$_SESSION['uemail'];


?>
<body>
<!-- start topBar -->

<?php include('topbar.php');
include('middlebar.php');
include('navh.php');
?>
<style type="text/css">
    .row{
        margin-top: 50px;
    }
</style>


        <!-- start section -->
       <section class="section white-backgorund">    
            <div class="container">
                <div class="row">
                    <div class="panel panel-success">
                        <div class="panel-heading"><center><h4>WIRE TRANFER INFORMATION</h4></center></div>
                            <div class="panel-body">                                

                            </div>
                    </div>   
                </div>
                             
            </div>
       </section>

        <!-- start footer -->
        <?php require 'footer.php'; ?>
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
        <script type="text/javascript" src="js/gmaps.js"></script>
        <script type="text/javascript" src="js/swiper.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
