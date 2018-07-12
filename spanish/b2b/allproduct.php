<?php session_start();
require 'Connect.php'; 
error_reporting(0);

$id=$_GET['id'];

?>
<?php
include('head.php');
?>
   
    <body>
       <?php
include('topbar.php');
include('middlebar.php');
include('navh.php');

///////////////////////CONSULTAS CANTIDAD///////////////////////////////
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
        
        
        
       /* ///////////////////////CONSULTAS CANTIDAD CATEGORIAs///////////////////////////////
               $Industrial=15;
               $query1="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Industrial."%' )";
               $result1=mysqli_query($connection,$query1);      
               $row1= mysqli_num_rows($result1);
        
               $Clothing=14;
               $query2="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Clothing."%' )";
               $result2=mysqli_query($connection,$query2);      
               $row2= mysqli_num_rows($result2);
        
               $Agriculture=17;
               $query3="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Agriculture."%' )";
               $result3=mysqli_query($connection,$query3);   
               $row3= mysqli_num_rows($result3);
        
               $Technology=16;
               $query4="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Technology."%' )";
               $result4=mysqli_query($connection,$query4);   
               $row4= mysqli_num_rows($result4);
        
               $Health=19;
               $query5="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Health."%' )";
               $result5=mysqli_query($connection,$query5);      
               $row5= mysqli_num_rows($result5);
        
               $Home=20;
               $query6="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Home."%' )";
               $result6=mysqli_query($connection,$query6);      
               $row6= mysqli_num_rows($result6);
        
               $Metallurgy=21;
               $query7="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Metallurgy."%' )";
               $result7=mysqli_query($connection,$query7);      
               $row7= mysqli_num_rows($result7);
        
               $Office=22;
               $query8="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Office."%' )";
               $result8=mysqli_query($connection,$query8);      
               $row8= mysqli_num_rows($result8);
          
               $Sport=23;
               $query9="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Sport."%' )";
               $result9=mysqli_query($connection,$query9);      
               $row9= mysqli_num_rows($result9);
        
               $Shoes=24;
               $query10="SELECT * FROM products INNER JOIN categories ON(products.catid=categories.catid) WHERE (products.catid LIKE '%".$Shoes."%' )";
               $result10=mysqli_query($connection,$query10);      
               $row10= mysqli_num_rows($result10);
        ///////////////////////CONSULTAS CANTIDAD CATEGORIAS///////////////////////////////*/
	   ?>	   
                   
        <!-- start section -->
        <section class="section light-backgorund">
            <div class="container">
				 <div class="row">
			<div class="col-sm-3">
                    
                      
                        
                        <form  action="searchallproduct.php" method="GET">
                         <div class="widget">
                            <div class="panel-group accordion" id="categoriesFilter">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#categoriesFilter" href="#categoriesFilterCollapse">
                                                Country
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="categoriesFilterCollapse" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <?php
//                                          $sql="SELECT * FROM `categories`  ";
    //                                                  $rst=mysqli_query($connection,$sql);
                                                        ?>
                                                                <ul class="list list-unstyled">
                                        <?php
                                //      while($rowt=mysqli_fetch_array($rst)){ ?>
                                            <li>
                                                <div>
                                                    <input name="categorytitle[]"  value="Chile"  type="checkbox" >
                                                    <label> Chile (<?php echo $row_chile; ?>)
                                                     <?php
                                                        //echo $rowt['title'];?>
                                                    </label>
                                                </div>
                                            </li>
                                              <li>
                                                <div>
                                                    <input name="categorytitle[]"  value="Maxico"  type="checkbox" >
                                                    <label > Mexico (<?php echo $row_mexico; ?>)
                                                     <?php
                                                        //echo $rowt['title'];?>
                                                    </label>
                                                </div>
                                                </li>
                                                  <li>
                                                <div >
                                                    <input name="categorytitle[]"  value="United States of America"  type="checkbox" >
                                                    <label > Estados Unidos (<?php echo $row_eeuu; ?>)
                                                     <?php
                                                        //echo $rowt['title'];?>
                                                    </label>
                                                </div>
                                            </li>
                                              <li>
                                                <div>
                                                    <input name="categorytitle[]"  value="China"  type="checkbox" >
                                                    <label > China (<?php echo $row_china; ?>)
                                                     <?php
                                                        //echo $rowt['title'];?>
                                                    </label>
                                                </div>
                                            </li>
                                              <li>
                                                <div >
                                                    <input name="categorytitle[]"  value="France"  type="checkbox" >
                                                    <label > Francia (<?php echo $row_france; ?>)
                                                     <?php
                                                        //echo $rowt['title'];?>
                                                    </label>
                                                </div>
                                            </li>


                                            <?php
                                        //  }?>

                                        </ul>
                                        </div><!-- end panel-body -->
                                         <input type="submit" name="filter" class="btn btn-success btn-block btn-md" value="Buscar">
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel -->
                                
                            </div><!-- end accordion -->
                        </div><!-- end widget -->
                     
                        </form>
                            <div class="widget">
                            <div class="panel-group accordion" id="tagsFilter">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#tagsFilter" href="#tagsFilterCollapse">
                                                Categorias
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="tagsFilterCollapse" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <?php $query1="SELECT * FROM categories";
                                        $result1=mysqli_query($connection,$query1);
                                        ?>      
                                        <ul class="tags">
                                            <?php while($row=mysqli_fetch_array($result1)){ 
                                            ?>                                      
                                            
                                            <li>
                                                <a style="color: black;" class="btn btn-white btn-xs" href="searchallproduct.php?title=<?php echo $row['title']; ?>"><?php echo $row['titulo']; ?></a>
                                            </li>
                                            <?php
                                            }?>
                                        </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel -->
                            </div><!-- end accordion -->
                        </div><!-- end widget -->
                       </div><!-- end col -->
                    <!-- end sidebar -->
                    <div class="col-sm-9">
      	 
<!--Comienza a imprimir-->	 
<div class="row">
					<?php $query="SELECT * FROM users INNER JOIN products ON(users.user_id = products.user_id) INNER JOIN seller ON(users.email = seller.email) ORDER BY  pid DESC";
                        $result=mysqli_query($connection,$query);
			         ?>
                        </div><!-- end row -->
                    <?php
                        while( $row=mysqli_fetch_array($result)){ 
                        $myString = $row['image'];
                        $productType=$row['productType'];
                        $cl = explode(',', $myString);
					?>
				 
         <div class="col-sm-6 col-md-3" style="padding:3px">
                        	<?php
																	
							 
						

							if($productType =="Eco Friendly"){
									?>
										   <span> <img style="height:35px; width:35px;float:right;position: absolute;z-index: 1;"src="images/ecofriendly.png" />
                                       </span><?php
										}
										else if($productType =="Innovation"){
										?>
										   <span> <img style="height:35px; width:35px;float:right;position: absolute;z-index: 1; "src="images/innovation.png" />
                                       </span><?php
										}
										?>  
                                <figure>
								
                   <a href="Shopsingle.php?pid=<?php echo $row['pid'] ; ?>">                         		      
										 <img style="width: 100%;height: 20rem;" src="images/<?php echo $cl[0]; ?>" alt="" />
										
                                    </a>
                                </figure>
                            <div class="cat-item-style2">
                                <div class="title">
								 <?php echo '<h6><a href="Shopsingle.php?pid='.$row['pid'].'"> '.$row['ntitle'].'</a></h6>'; ?>
                                
                                </div><!-- end title -->
								<div class="price">
                                  <center><span class="amount text-primary">USD <?php echo $row['price']; ?></span></center>
                                  <center><span class="amount text-default">Min Order: <?php echo $row['miniorder']; ?></span></center>
                                  <center><span class="amount text-default">Nombre de la Compañia: <?php echo $row['company_name']; ?></span></center>
                                  <center><a href="chat2.php?sellerid=<?php echo $rows['user_id'];?>&pid=<?php echo $row['pid'];?>&name=<?php echo $row['firstName']?>"></i>Contactar Vendedor</a></center>
										    
                                </div>
                            </div><!-- end cat-item-style2 -->
                        <!-- end col -->
                   
                   <!-- end row -->
				  
				   </div>
				   <?php  } ?>
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