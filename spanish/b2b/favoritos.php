<?php session_start();
    if(!isset($_SESSION['uemail'])):
        header('location:singlelogin.php');
    endif;
require 'Connect.php';
$email = $_SESSION['uemail']; //email del usuario logueado
$usuario="SELECT * FROM users where email='$email'";
$datos_usuario=mysqli_query($connection,$usuario);
$datos=mysqli_fetch_array($datos_usuario);
$id_user=$datos['user_id'];//id del usuario logueado
?>
<body>
    <?php
        include('head.php');
        include('topbar.php');
        include('middlebar.php');
        include('navh.php');
         $chile='Chile';
               $query_chile="SELECT * FROM products WHERE country LIKE '%$chile%' ";
               $result_chile=mysqli_query($connection,$query_chile);      
               $row_chile= mysqli_num_rows($result_chile);
        
               $eeuu='United States of America';
               $query_eeuu="SELECT * FROM products WHERE country LIKE '%$eeuu%' ";
               $result_eeuu=mysqli_query($connection,$query_eeuu);      
               $row_eeuu= mysqli_num_rows($result_eeuu);
        
               $mexico='Mexico';
               $query_mexico="SELECT * FROM products WHERE country LIKE '%$mexico%' ";
               $result_mexico=mysqli_query($connection,$query_mexico);   
               $row_mexico= mysqli_num_rows($result_mexico);
        
               $china='China';
               $query_china="SELECT * FROM products WHERE country LIKE '%$china%' ";
               $result_china=mysqli_query($connection,$query_china);   
               $row_china= mysqli_num_rows($result_china);
        
               $france='France';
               $query_france="SELECT * FROM products WHERE country LIKE '%$france%' ";
               $result_france=mysqli_query($connection,$query_france);      
               $row_france= mysqli_num_rows($result_france);
        ///////////////////////CONSULTAS CANTIDAD///////////////////////////////
        
        
        
       ///////////////////////CONSULTAS CANTIDAD CATEGORIAs///////////////////////////////
               $Industrial=15;
               $query1="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Industrial."%' )";
               $result1=mysqli_query($connection,$query1);      
               $row1= mysqli_num_rows($result1);
               $fila1=mysqli_fetch_array($result1);
        
               $Clothing=14;
               $query2="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Clothing."%' )";
               $result2=mysqli_query($connection,$query2);      
               $row2= mysqli_num_rows($result2);
               $fila2=mysqli_fetch_array($result2);

        
               $Agriculture=17;
               $query3="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Agriculture."%' )";
               $result3=mysqli_query($connection,$query3);   
               $row3= mysqli_num_rows($result3);
               $fila3=mysqli_fetch_array($result3);

        
               $Technology=16;
               $query4="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Technology."%' )";
               $result4=mysqli_query($connection,$query4);   
               $row4= mysqli_num_rows($result4);
               $fila4=mysqli_fetch_array($result4);

        
               $Health=19;
               $query5="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Health."%' )";
               $result5=mysqli_query($connection,$query5);      
               $row5= mysqli_num_rows($result5);
               $fila5=mysqli_fetch_array($result5);
        
               $Home=20;
               $query6="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Home."%' )";
               $result6=mysqli_query($connection,$query6);      
               $row6= mysqli_num_rows($result6);
               $fila6=mysqli_fetch_array($result6);
        
               $Metallurgy=21;
               $query7="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Metallurgy."%' )";
               $result7=mysqli_query($connection,$query7);      
               $row7= mysqli_num_rows($result7);
               $fila7=mysqli_fetch_array($result7);
        
               $Office=22;
               $query8="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Office."%' )";
               $result8=mysqli_query($connection,$query8);      
               $row8= mysqli_num_rows($result8);
               $fila8=mysqli_fetch_array($result8);
          
               $Sport=23;
               $query9="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Sport."%' )";
               $result9=mysqli_query($connection,$query9);      
               $row9= mysqli_num_rows($result9);
               $fila9=mysqli_fetch_array($result9);
        
               $Shoes=24;
               $query10="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Shoes."%' )";
               $result10=mysqli_query($connection,$query10);      
               $row10= mysqli_num_rows($result10);
               $fila10=mysqli_fetch_array($result10);
        ///////////////////////CONSULTAS CANTIDAD CATEGORIAS///////////////////////////////
    ?>	   
                   
        <!-- start section -->
        <section class="section light-backgorund">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-2 text-left">
                        <div style="margin-top:-50px; height:20px;"class="content white-background">
                            <h6  style="margin-top:-10px; ">Mis Favoritos</h6>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->                        
                <div class="row">
                     <!-- start sidebar -->
          <div class="col-sm-3">
                      
                        <form  action="searchallproduct.php" method="GET">
             <div class="widget">
                            <div class="panel-group accordion" id="categoriesFilter">
                                <div class="panel">
                                   <div class="panel-heading" style="background-color: #EBEBEB; color: black;">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#categoriesFilter" href="#categoriesFilterCollapse">
                                                Pais
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="categoriesFilterCollapse" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <?php
//                      $sql="SELECT * FROM `categories`  ";
  //                          $rst=mysqli_query($connection,$sql);
                            ?>
                                                                <ul class="list list-unstyled">
                 <style type="text/css">
                                   input[type=checkbox].css-checkbox {
                                  position:absolute;
                                   z-index:-1000; 
                                   left:-1000px; 
                                   overflow: hidden;
                                    clip: rect(0 0 0 0);
                                     height:1px; width:1px; 
                                     margin:-1px; padding:0; 
                                     border:0;
                                            }

                                      input[type=checkbox].css-checkbox + label.css-label {
                                        padding-left:25px;
                                        height:20px; 
                                        display:inline-block;
                                        line-height:20px;
                                        background-repeat:no-repeat;
                                        background-position: 0 0;
                                        /*font-size:20px;*/
                                        vertical-align:middle;
                                        cursor:pointer;

                                      }

                                            input[type=checkbox].css-checkbox:checked + label.css-label {
                                              background-position: 0 -20px;
                                            }
                                            label.css-label {
                                        background-image:url(http://csscheckbox.com/checkboxes/u/csscheckbox_490b7ac6598bb6e25d0681c50e958cda.png);
                                        -webkit-touch-callout: none;
                                        -webkit-user-select: none;
                                        -khtml-user-select: none;
                                        -moz-user-select: none;
                                        -ms-user-select: none;
                                        user-select: none;
                                      }
                                  </style>
                                            <?php 
                                    if ($row_chile>0) {
                                     ?>
                                            <li style="color: #5FD6D3;">
                                                <div>
                                                  <div >
                                                    <input name="categorytitle[]" id="categorytitle[]" value="Chile"  type="checkbox" class="css-checkbox">
                                                    <label for="categorytitle[]" class="css-label"> Chile (<?php echo $row_chile; ?>)
                                                     
                                                    </label>
                                                </div>
                                            </li>


                                   <?php 
                                     }
                                    ?>


                                       <?php 
                                    if ($row_mexico>0) {
                                     ?>      
                                              <li style="color: #5FD6D3;">
                                                <div>
                                                    <input name="categorytitle[]"  value="Mexico"  id="categorytitle2[]" type="checkbox" class="css-checkbox">
                                                    <label for="categorytitle2[]" class="css-label"> Mexico (<?php echo $row_mexico; ?>)
                                                    
                                                    </label>
                                                </div>
                                                </li>
                                                  
                                         <?php 
                                     }
                                    ?>
                                       

                                       <?php 
                                    if ($row_eeuu>0) {
                                     ?> 

                                            <li style="color: #5FD6D3;">
                                                <div >
                                                    <input name="categorytitle[]"  value="United States of America"  id="categorytitle[]3" type="checkbox" class="css-checkbox">
                                                    <label for="categorytitle[]3" class="css-label">Estados Unidos (<?php echo $row_eeuu; ?>)
                                                    
                                                    </label>
                                                </div>
                                            </li>

                                                  <?php 
                                                }
                                                ?>

                                               <?php 
                                    if ($row_china>0) {
                                     ?> 


                                              <li style="color: #5FD6D3;">
                                                <div>
                                                    <input name="categorytitle[]"  value="China"  id="categorytitle[]4" type="checkbox" class="css-checkbox">
                                                    <label for="categorytitle[]4" class="css-label"> China (<?php echo $row_china; ?>)
                                                     
                                                    </label>
                                                </div>
                                            </li>

                                                <?php 
                                                }
                                                ?>

                                              <?php 
                                    if ($row_france>0) {
                                     ?> 

                                              <li style="color: #8DF5FC;">
                                                <div >
                                                    <input name="categorytitle[]"  value="France"  id="categorytitle[]5" type="checkbox" class="css-checkbox">
                                                    <label for="categorytitle[]5" class="css-label" > Francia (<?php echo $row_france; ?>)
                                                    
                                                    </label>
                                                </div>
                                            </li>

                                            <?php 
                                                }
                                                ?>     

                                        </ul>
                                        </div><!-- end panel-body -->
                     <input type="submit" name="filter" class="btn btn-success btn-block btn-md" value="BUSCAR">
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel -->

                            </div><!-- end accordion -->
                        </div><!-- end widget -->

            </form>
              <div class="widget">
                            <div class="panel-group accordion" id="tagsFilter">
                                <div class="panel">
                                    <div class="panel-heading" style="background-color: #EBEBEB; color: black;">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#tagsFilter" href="#tagsFilterCollapse">
                                                Categorias
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="tagsFilterCollapse" class="panel-collapse collapse in">
                                        <div class="panel-body">                                           
                                        <ul class="tags">
                                             <?php 
                                             if ($row1>0) {
                                            ?> 


                                            <li >
                                                <a style="color: #5FD6D3;" class="btn btn-white btn-xs" href="searchallproduct.php?title=<?php echo $fila1['title']; ?>"><?php echo $fila1['titulo']; ?> (<?php echo $row1; ?>)</a>
                                            </li>

                                                    <?php 
                                                }
                                                ?>  



                                                
                                            <?php 
                                             if ($row2>0) {
                                            ?> 
                                             <li >
                                                <a style="color: #5FD6D3;" class="btn btn-white btn-xs" href="searchallproduct.php?title=<?php echo $fila2['title']; ?>"><?php echo $fila2['titulo']; ?> (<?php echo $row2; ?>)</a>
                                            </li>
                                               <?php 
                                                }
                                                ?>


                                              <?php 
                                             if ($row3>0) {
                                            ?> 
                                             <li >
                                                <a style="color: #5FD6D3;" class="btn btn-white btn-xs" href="searchallproduct.php?title=<?php echo $fila3['title']; ?>"><?php echo $fila3['titulo']; ?> (<?php echo $row3; ?>)</a>
                                            </li>
                                               <?php 
                                                }
                                                ?> 

                                                 <?php 
                                             if ($row4>0) {
                                            ?> 
                                             <li >
                                                <a style="color: #5FD6D3;" class="btn btn-white btn-xs" href="searchallproduct.php?title=<?php echo $fila4['title']; ?>"><?php echo $fila4['titulo']; ?> (<?php echo $row4; ?>)</a>
                                            </li>
                                               <?php 
                                                }
                                                ?> 

                                                <?php 
                                             if ($row5>0) {
                                            ?> 
                                             <li >
                                                <a style="color: #5FD6D3;" class="btn btn-white btn-xs" href="searchallproduct.php?title=<?php echo $fila5['title']; ?>"><?php echo $fila5['titulo']; ?> (<?php echo $row5; ?>)</a>
                                            </li>
                                               <?php 
                                                }
                                                ?> 



                                                 <?php 
                                             if ($row6>0) {
                                            ?> 
                                             <li >
                                                <a style="color: #5FD6D3;" class="btn btn-white btn-xs" href="searchallproduct.php?title=<?php echo $fila6['title']; ?>"><?php echo $fila6['titulo']; ?> (<?php echo $row6; ?>)</a>
                                            </li>
                                               <?php 
                                                }
                                                ?> 

                                                 <?php 
                                             if ($row7>0) {
                                            ?> 
                                             <li >
                                                <a style="color: #5FD6D3;" class="btn btn-white btn-xs" href="searchallproduct.php?title=<?php echo $fila7['title']; ?>"><?php echo $fila7['titulo']; ?> (<?php echo $row7; ?>)</a>
                                            </li>
                                               <?php 
                                                }
                                                ?> 


                                                 <?php 
                                             if ($row8>0) {
                                            ?> 
                                             <li >
                                                <a style="color: #5FD6D3;" class="btn btn-white btn-xs" href="searchallproduct.php?title=<?php echo $fila8['title']; ?>"><?php echo $fila8['titulo']; ?> (<?php echo $row8; ?>)</a>
                                            </li>
                                               <?php 
                                                }
                                                ?> 

                                                 <?php 
                                             if ($row9>0) {
                                            ?> 
                                             <li >
                                                <a style="color: #5FD6D3;" class="btn btn-white btn-xs" href="searchallproduct.php?title=<?php echo $fila9['title']; ?>"><?php echo $fila9['titulo']; ?> (<?php echo $row9; ?>)</a>
                                            </li>
                                               <?php 
                                                }
                                                ?> 

                                                 <?php 
                                             if ($row10>0) {
                                            ?> 
                                             <li >
                                                <a style="color: #5FD6D3;" class="btn btn-white btn-xs" href="searchallproduct.php?title=<?php echo $fila10['title']; ?>"><?php echo $fila10['titulo']; ?> (<?php echo $row10; ?>)</a>
                                            </li>
                                               <?php 
                                                }
                                                ?>     
                                        </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel -->
                            </div><!-- end accordion -->
                        </div><!-- end widget -->

                    </div><!-- end col -->
                    <!-- end sidebar -->
                    <div class="col-sm-9">        
                        <div >
                            <?php 
                            $sql="SELECT * FROM `favorites` INNER JOIN `products` ON (favorites.id_product=products.pid) WHERE id_user = '{$id_user}' ";
                            $resultado = $connection->query($sql);
                            ?>  
                            <div class="row">
                                <?php while ($results = $resultado->fetch_all(MYSQLI_ASSOC) ) { 
                                    $myString = $results['image'];
                                    $cl = explode(',', $myString);
                                    ?>                 
                                <?php foreach($results as $resu): ?>
                                <div class="col-sm-3 col-md-3 mt-5"> 
                                    <h4><small><?php echo $resu['ntitle'];?></small></h4>                   
                                    <a href="Shopsingle.php?pid=<?php echo $resu['pid']; ?>">
                                        <img src="images/<?php echo $resu['image'];?>" class="img-thumbnail" style="width: 20rem;height: 20rem;">
                                    </a>                                    
                                    <center>
                                    <span class="amount text-primary">USD $ <?php echo $resu['price'];  ?></span>
                                    </br>
                                    <span class="amount text-default">Orden minima: <?php echo $resu['miniorder'];?></span>
                                    </br>
                                    <a href="#"></i>Contactar al vendedor</a> 
                                    </center>
                                </div>
                                <?php endforeach;?>
                                <?php }?>
                            </div><!-- row-->
                        </div><!-- content light-->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end content -->	  
	  </div>
	  </section>        
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