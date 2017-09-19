<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>KLEIDER</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="This is an Online cloth shopping website named KLEIDER">
<meta name="author" content="Varuni Punchihewa">
<!-- Bootstrap styles -->
<link href="assets/css/bootstrap.css" rel="stylesheet"/>
<!-- Customize styles -->
<link href="style.css" rel="stylesheet"/>
<!-- font awesome styles -->
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

<link rel="shortcut icon" href="assets/ico/android-icon-36x36.png" type="image/png">



</head>
<body>

<?php
	include_once 'db-connection.php';
?>


<?php include_once 'upperHeader.php'; ?>

<!--
Lower Header Section 
-->
<div class="container">
  <div id="gototop"> 
</div>
  
<!-- Header2 section -->
 
 <?php include_once 'header2.php'; ?>
 
  <!--
Navigation Bar Section 
-->
 
 <?php include_once 'navBar.php';  ?>
  <!-- 
Body Section 
-->
  <div class="row">
   
<!--   sidebar-->
   
    <?php include_once 'sidebar.php';?>
    
 
    
    <div class="span9">
      <div class="well np">
        <div id="myCarousel" class="carousel slide homCar">
          <div class="carousel-inner">
            <div class="item active"> <img style="width:100%" src="assets/img/grouped img/mens-yoga-tshirt-karma-el.jpg" alt="men's t-shirts"> 
             
            </div>
            <div class="item"> <img style="width:100%" src="assets/img/grouped img/kamali-dress-collage.jpg" alt="women's party dresses"> 
              
            </div>
            <div class="item"> <img style="width:100%" src="assets/img/grouped img/2015-social-blog-product-0806-1-700x300.jpg" alt="men's t-shirts"> 
              
            </div>
            <div class="item"> <img style="width:100%" src="assets/img/grouped img/skrts-and-jackets.png" alt="skirts and jackets"> 
               
            </div>
            <div class="item"> <img style="width:100%" src="assets/img/grouped img/om-leggings-el.jpg" alt="leggings with a print"> 
              
            </div>
            <div class="item"> <img style="width:100%" src="assets/img/grouped img/john-scott-yoga-surya-b-tshirt-women-el.jpg" alt="women's yogha t-shirts"> 
              
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a> <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a> </div>
      </div>
      <!--
New Products
-->
      <div class="well well-small">
        <h3>New Products </h3>
        <hr class="soften"/>
        <div class="row-fluid">
          <div id="newProductCar" class="carousel slide">
            <div class="carousel-inner">
              <div class="item active">
                <ul class="thumbnails">
                <?php
						$sql = "SELECT ProductID,Image FROM product_details WHERE newin = 'Yes' LIMIT 4 ";
					
						$result = mysqli_query($conn, $sql);
						
						if(mysqli_num_rows($result)>0){
						
							
							while($row=mysqli_fetch_array($result)){
								
								?>
								
                  <li class="span3">
                    <div class="thumbnail"> <a class="zoomTool" href="product_details.php?pid=<?php echo $row['ProductID']; ?>"add to cart"><span class="icon-search"></span> QUICK VIEW</a> <a href="product_details.php" class="tag"></a> 

                  <?php echo '<img src = "data: image/jpg;base64,'.base64_encode($row['Image']).'" alt="Item Preview">'; ?>
  
                  
                  
                    </a> </div>
                  </li>
                  
                  <?php 
							}
						} 
				  ?>
                  
       
                </ul>
              </div>
              
              
               <div class="item">
                <ul class="thumbnails">
                <?php
						$sql = "SELECT ProductID,Image FROM product_details WHERE newin = 'Yes' ORDER BY productid DESC LIMIT 4 ";
					
						$result = mysqli_query($conn, $sql);
						$count = 0;
						if(mysqli_num_rows($result)>0){
						
							
							while($row=mysqli_fetch_array($result)){
								
								?>
								
                  <li class="span3">
                    <div class="thumbnail"> <a class="zoomTool" href="product_details.php?pid=<?php echo $row['ProductID']; ?>" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a> <a href="product_details.php" class="tag"></a> <a href="product_details.php">

                  <?php echo '<img src = "data: image/jpg;base64,'.base64_encode($row['Image']).'" alt="Item Preview">'; ?>
  
                  
                  
                    </a> </div>
                  </li>
                  
                  <?php 
							}
						} 
				  ?>
                  
       
                </ul>
              </div>
              
            </div>
            
            <a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a> <a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a> </div>
        </div>
        <div class="row-fluid">
          <ul class="thumbnails">
            <li class="span4">
              <div class="thumbnail"> <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>  <a href="#" class="tag"></a><a href="product_details.html"><img src="assets/img/New/shoe1.jpg" alt="men's shoes"></a>
                <div class="caption cntr">
                  <p>Men's Shoes</p>
                  <p><strong> $22.00</strong></p>
                  <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
                  <div class="actionList"> <a class="pull-left" href="#">Add to Wish List </a> <a class="pull-left" href="#"> Add to Compare </a> </div>
                  <br class="clr">
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail"> <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a> <a href="#" class="tag"></a> <a href="product_details.html"><img src="assets/img/New/heel2.jpg" alt="high heels"></a>
                <div class="caption cntr">
                  <p>High heels</p>
                  <p><strong> $22.00</strong></p>
                  <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
                  <div class="actionList"> <a class="pull-left" href="#">Add to Wish List </a> <a class="pull-left" href="#"> Add to Compare </a> </div>
                  <br class="clr">
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail"> <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a> <a href="#" class="tag"></a> <a href="product_details.html"><img src="assets/img/New/hb1.jpg" alt="red hand bag"></a>
                <div class="caption cntr">
                  <p>Hand bag</p>
                  <p><strong> $22.00</strong></p>
                  <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
                  <div class="actionList"> <a class="pull-left" href="#">Add to Wish List </a> <a class="pull-left" href="#"> Add to Compare </a> </div>
                  <br class="clr">
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
     
      <div class="well well-small">
        <h3> <a class="btn btn-mini pull-right" href="#" title="View more">View more <span class="icon-plus"></span></a> Popular Products</h3>
        <hr class="soften"/>
        <div class="row-fluid">
          <ul class="thumbnails">
            <li class="span4">
              <div class="thumbnail"> <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a> <a  href="product_details.html"><img src="assets/img/featured img/1156_SL_114-276x357.jpg" alt="kurhta"></a>
                <div class="caption">
                  <h5>Kurtha</h5>
                  <h4> <a class="defaultBtn" href="product_details.html" title="Click to view"><span class="icon-zoom-in"></span></a> <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a> <span class="pull-right">$22.00</span> </h4>
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail"> <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a> <a  href="product_details.html"><img src="assets/img/featured img/CHCBLBW01-276x357.jpg" alt="long sleeves T-sshirts"></a>
                <div class="caption">
                  <h5>Long sleeve T-shirts</h5>
                  <h4> <a class="defaultBtn" href="product_details.html" title="Click to view"><span class="icon-zoom-in"></span></a> <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a> <span class="pull-right">$22.00</span> </h4>
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail"> <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a> <a  href="product_details.html"><img src="assets/img/featured img/CHRAWN01-276x357.jpg" alt="jackets"/></a>
                <div class="caption">
                  <h5>Jackets</h5>
                  <h4> <a class="defaultBtn" href="product_details.html" title="Click to view"><span class="icon-zoom-in"></span></a> <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a> <span class="pull-right">$22.00</span> </h4>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="well well-small">
        <h3> <a class="btn btn-mini pull-right" href="#" title="View more">View more <span class="icon-plus"></span></a> Best selling Products</h3>
        <hr class="soften"/>
        <div class="row-fluid">
          <ul class="thumbnails">
            <li class="span4">
              <div class="thumbnail"> <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a> <a  href="product_details.html"><img src="assets/img/featured img/1156_SL_114-276x357.jpg" alt="kurhta"></a>
                <div class="caption">
                  <h5>Kurtha</h5>
                  <h4> <a class="defaultBtn" href="product_details.html" title="Click to view"><span class="icon-zoom-in"></span></a> <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a> <span class="pull-right">$22.00</span> </h4>
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail"> <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a> <a  href="product_details.html"><img src="assets/img/featured img/CHCBLBW01-276x357.jpg" alt="long sleeves T-sshirts"></a>
                <div class="caption">
                  <h5>Long sleeve T-shirts</h5>
                  <h4> <a class="defaultBtn" href="product_details.html" title="Click to view"><span class="icon-zoom-in"></span></a> <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a> <span class="pull-right">$22.00</span> </h4>
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail"> <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a> <a  href="product_details.html"><img src="assets/img/featured img/CHRAWN01-276x357.jpg" alt="jackets"/></a>
                <div class="caption">
                  <h5>Jackets</h5>
                  <h4> <a class="defaultBtn" href="product_details.html" title="Click to view"><span class="icon-zoom-in"></span></a> <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a> <span class="pull-right">$22.00</span> </h4>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- 
Footer
-->
  <?php include_once 'footer.php'; ?>
</div>
<!-- Copyright-->

<?php include_once 'copyright.php'; ?>

<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="assets/js/jquery.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/jquery.easing-1.3.min.js"></script> 
<script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script> 
<script src="assets/js/shop.js"></script>
</body>
</html>