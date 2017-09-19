
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<title>Product Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="This is an Online cloth shopping website named KLEIDER">
	<meta name="author" content="Varuni Punchihewa">
	<!-- Bootstrap styles -->
	<link href="assets/css/bootstrap.css" rel="stylesheet"/>
	<!-- Customize styles -->
	<link href="style.css" rel="stylesheet"/>



	 

	<!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/ico/android-icon-36x36.png" type="image/png">
  </head>
<body>

<?php
	include_once 'db-connection.php';
?>
<!-- 
	Upper Header Section 
-->
<?php include_once 'upperHeader.php'; ?>

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>

<?php include_once 'header2.php'; ?>

<!--
Navigation Bar Section 
-->
<?php include_once 'navBar.php'; ?>
<!-- 
Body Section 
-->
	<div class="row">
	<?php include_once 'sidebar.php'; ?>
		<div class="span9">
	<div class="well well-small">
	<div class="row-fluid">
			<div class="span5">
			<div id="myCarousel" class="carousel slide cntr">

				  <div class="item active">
				   <a href="#">

				   <?php
					   if(isset($_GET['pid'])){

						   $productsId=$_GET['pid'];

							$sql="SELECT * FROM product_details WHERE ProductID='{$productsId}' ";
						   $result = mysqli_query($conn, $sql);

							if(mysqli_num_rows($result)>0){

						  $row=mysqli_fetch_array($result);

						   echo '<img src = "data: image/jpg;base64,'.base64_encode($row['Image']).'" alt="Item Preview">';
					   }
					   
					   ?>


					</a>
				  </div>


			</div>
			</div>
			<div class="span7">

				<label class="control-label"><h3><strong><?php echo $row['Name'] ?></strong></h3><?php echo "<br>Product ID [". $productsId."]"; ?></label>
					<hr class="soft"/>

				<form class="form-horizontal qtyFrm" action="cart.php?proid=<?php echo $productsId; ?>" method="post">

				  <div class="control-group">
					<label class="control-label"><span>Rs. <?php echo $row['Price'] ?></span></label>
					<div class="controls">
					<input type="number" class="span6" min="0" name="quantity" placeholder="Qty." value="1">
					<input type="hidden" name="hidden_name" value="<?php echo $row['Name'] ?>">
					<input type="hidden" name="hidden_price" value="<?php echo $row['Price'] ?>">
					<input type="hidden" name="hidden_id" value="<?php echo $row['ProductID']?>">

					</div>

				  </div>

				  <div class="control-group">
					<label class="control-label"><span>Color</span></label>
					<div class="controls">
					 <select class="span11" name="colorOption">
				  <?php 
						$sql2="SELECT * FROM product_details WHERE ProductID='{$productsId}' ";

						 $result2 = mysqli_query($conn, $sql2);

						if(mysqli_num_rows($result2)>0){

							$row2=mysqli_fetch_array($result2); 
							
						 	$colorsplit= preg_split("/,/", $row2['product_color']);
								foreach($colorsplit as $key => $value){
												
						 ?>

						  <option><?php echo $value; ?> </option>
						<?php 	
								}
						} ?>
						</select>
					</div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label"><span>Size</span></label>
					<div class="controls">
					 <select class="span11" name="sizeOption">
				  <?php 
						$sql5="SELECT * FROM product_details WHERE ProductID='{$productsId}' ";

						 $result5= mysqli_query($conn, $sql5);

						if(mysqli_num_rows($result5)>0){

							$row5=mysqli_fetch_array($result5);
								
						   $sizesplit = preg_split("/,/", $row5['size']);
						 	
								
										
									foreach($sizesplit as $key => $value){
												
		
	
	
						 
						 ?>
						  
						 

						  <option><?php echo $value; ?> </option>
						<?php 
							 
								
							}
						} 
						 ?>
						</select>
					</div>
				  </div>
				  
				  
				  <div class="control-group">
					<label class="control-label"><span>Materials</span></label>
					<div class="controls">
						 <?php echo $row['product_material'] ?> 
						<input type="hidden" name="hidden_material" value="<?php echo $row['product_material'] ?>">
	
					</div>
				  </div>
				  <h4><?php echo $row['Stock'] ?> items in stock</h4>
				  <input type="hidden" name="hidden_stock" value="<?php echo $row['Stock'] ?>">
				  <p><?php echo $row['Description'] ?>
				  <input type="hidden" name="hidden_description" value="<?php echo $row['Description'] ?>">
				  </p>
				  <input type="submit" class="shopBtn" name="add_to_cart" value="Add to Cart" > <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
				  
				  
				</form>
					
				
			</div>
			</div>
				<hr class="softn clr"/>


			<ul id="productDetail" class="nav nav-tabs">
			  <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
			  <li class=""><a href="#profile" data-toggle="tab">Related Products </a></li>
			  <li class=""><a href="#cat1" data-toggle="tab">Accessories</a>

			  </li>
			</ul>
			<div id="myTabContent" class="tab-content tabWrapper">
			<div class="tab-pane fade active in" id="home">
			  <h4>Product Information</h4>
				<table class="table table-striped">
				<tbody>

				<tr class="techSpecRow"><td class="techSpecTD1">Style:</td><td class="techSpecTD2">

				
						

							<?php echo $row['product_style'] ?>


							

				</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Season:</td><td class="techSpecTD2">
					
							<?php echo $row['product_season'] ?>  


							
				</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Usage:</td><td class="techSpecTD2">
					

							<?php echo $row['product_usage'] ?> 


							
				</td></tr>



				<tr class="techSpecRow"><td class="techSpecTD1">Brand:</td><td class="techSpecTD2"><?php echo $row['Brand'] ?></td></tr>
				</tbody>
				</table>


			</div>
			<div class="tab-pane fade" id="profile">
			<?php 
				
				$sql3 = "SELECT * FROM related_products WHERE Main_Item_ID ='{$productsId}'";
				$result3 = mysqli_query($conn, $sql3);

				if(mysqli_num_rows($result3)>0){

				while($row3=mysqli_fetch_array($result3)){
					$relatedID = $row3['Related_Item_ID'];
					$sql4 = "SELECT * FROM product_details WHERE ProductID ='{$relatedID}'";
					$result4 = mysqli_query($conn, $sql4);
					
					if(mysqli_num_rows($result4)>0){
						while($row4=mysqli_fetch_array($result4)){
						?>
						
			
			<div class="row-fluid">	  
			<div class="span2">
				 <?php echo '<img src = "data: image/jpg;base64,'.base64_encode($row4['Image']).'" alt="Item Preview">'; ?>
			</div>
			<div class="span6">
				<h5><?php echo $row4['Name']; ?> </h5>
				<p>
				<?php echo $row4['Description']; ?>
				</p>
			</div>
			<div class="span4 alignR">
			<form class="form-horizontal qtyFrm">
			<h3> Rs. <?php echo $row4['Price']; ?></h3>
			<br>
			<div class="btn-group">
			  <a href="product_details.php?pid=<?php echo $row4['ProductID']; ?>" class="defaultBtn">VIEW</a>
			  
			 </div>
				</form>
			</div>
		</div>
		<hr class="soft">
		
		<?php	
						}
					}
				}
				}

			?>
		
			
			
			</div>
			  <div class="tab-pane fade" id="cat1">
				<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
			  <br>
			  <br>
				
				  
				  <?php 
				
				$sql6 = "SELECT * FROM accessories WHERE mainID ='{$productsId}'";
				$result6 = mysqli_query($conn, $sql6);

				if(mysqli_num_rows($result6)>0){

				while($row6=mysqli_fetch_array($result6)){
					$relatedAccID = $row6['relatedID'];
					$sql7 = "SELECT * FROM product_details WHERE ProductID ='{$relatedAccID}'";
					$result7 = mysqli_query($conn, $sql7);
					
					if(mysqli_num_rows($result7)>0){
						while($row7=mysqli_fetch_array($result7)){
						?>
						
				  
			  <div class="row-fluid">	  
					<div class="span2">
						 <?php echo '<img src = "data: image/jpg;base64,'.base64_encode($row7['Image']).'" alt="Item Preview">'; ?>
					</div>
					<div class="span6">
						<h5><?php echo $row7['Name']; ?> </h5>
						<p>
						<?php echo $row7['Description']; ?>
						</p>
					</div>
					<div class="span4 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> Rs. <?php echo $row7['Price']; ?></h3>
					<br>
					<div class="btn-group">
					  
					  <a href="product_details.php?pid=<?php echo $row7['ProductID']; ?>" class="shopBtn">VIEW</a>
					 </div>
						</form>
					</div>
			</div>
			<hr class="soften"/>
				  
				<?php 
						}
					}
				}
				}
				?>
				  
				  
				  
			
			  </div>
			  

			</div>
<?php
					   }
		
				  ?>
</div>
</div>
</div> <!-- Body wrapper -->
<!-- 
Clients 
-->
<?php include_once 'footer.php'; ?>
</div>
<!-- /copyright -->

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