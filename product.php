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
  <div id="gototop"> </div>
  
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
<?php include_once 'sidebar.php';?>
    
<!--    list view-->
<div class="span9">
<div class="well well-small">
<?php
	
	if(isset($_GET['dress'])){
		if($_GET['dress'] == 1){
	$sql = "SELECT * FROM product_details WHERE cloth_type = 'spring dresses' AND newin = 'Yes' ";
		}
		if($_GET['dress'] == 2){
	$sql = "SELECT * FROM product_details WHERE cloth_type = 'summer dresses' AND newin = 'Yes' ";
		}
		if($_GET['dress'] == 3){
	$sql = "SELECT * FROM product_details WHERE cloth_type = 'autumn dresses' AND newin = 'Yes' ";
		}
		if($_GET['dress'] == 4){
	$sql = "SELECT * FROM product_details WHERE cloth_type = 'denim skirts' AND newin = 'Yes' ";
		}
		if($_GET['dress'] == 5){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Women' AND cloth_type = 'Tops' AND newin = 'Yes' ";
		}
		if($_GET['dress'] == 6){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Women' AND cloth_type = 'Tshirts' AND newin = 'Yes' ";
		}
		if($_GET['dress'] == 7){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Men' AND cloth_type = 'jackets' AND newin = 'Yes' ";
		}
		if($_GET['dress'] == 8){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Men' AND cloth_type = 'shorts' AND newin = 'Yes' ";
		}
		if($_GET['dress'] == 9){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Men' AND cloth_type = 'trousers' AND newin = 'Yes' ";
		}
		if($_GET['dress'] == 10){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Men' AND cloth_type = 'Tshirts' AND newin = 'Yes' ";
		}
		if($_GET['dress'] == 11){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Kid' AND cloth_type = 'jackets' AND newin = 'Yes' ";
		}
		if($_GET['dress'] == 12){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Kid' AND cloth_type = 'pants' AND newin = 'Yes' ";
		}
		if($_GET['dress'] == 13){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Kid' AND cloth_type = 'Tops' AND newin = 'Yes' ";
		}
		if($_GET['dress'] == 14){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Women' AND cloth_type = 'party dresses' ";
		}
		if($_GET['dress'] == 15){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Women' AND cloth_type = 'shirts & blouses' ";
		}
		if($_GET['dress'] == 16){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Women' AND cloth_type = 'skirts' ";
		}
		if($_GET['dress'] == 17){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Women' AND cloth_type = 'Tops' ";
		}
		if($_GET['dress'] == 18){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Women' AND cloth_type = 'trousers' ";
		}
		if($_GET['dress'] == 19){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Women' AND cloth_type = 'Tshirts' ";
		}
		if($_GET['dress'] == 20){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Men' AND cloth_type = 'jackets' ";
		}
		if($_GET['dress'] == 21){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Men' AND cloth_type = 'shorts' ";
		}
		if($_GET['dress'] == 22){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Men' AND cloth_type = 'trousers' ";
		}
		if($_GET['dress'] == 23){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Men' AND cloth_type = 'Tshirts' ";
		}
		if($_GET['dress'] == 24){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Kids Boys' AND cloth_type = 'jackets' ";
		}
		if($_GET['dress'] == 25){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Kids Boys' AND cloth_type = 'pants' ";
		}
		if($_GET['dress'] == 26){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Kids Boys' AND cloth_type = 'Tops' ";
		}
		if($_GET['dress'] == 27){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Kids Girls' AND cloth_type = 'jackets' ";
		}
		if($_GET['dress'] == 28){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Kids Girls' AND cloth_type = 'pants' ";
		}
		if($_GET['dress'] == 29){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Kids Girls' AND cloth_type = 'Tops' ";
		}
		if($_GET['dress'] == 30){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Women' AND cloth_type = 'spring dresses' AND sale = 'Yes' ";
		}
		if($_GET['dress'] == 31){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Women' AND cloth_type = 'summer dresses' AND sale = 'Yes' ";
		}
		if($_GET['dress'] == 32){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Women' AND cloth_type = 'autumn dresses' AND sale = 'Yes' ";
		}
		if($_GET['dress'] == 33){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Women' AND cloth_type = 'denim skirts' AND sale = 'Yes' ";
		}
		if($_GET['dress'] == 34){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Women' AND cloth_type = 'Tops' AND sale = 'Yes' ";
		}
		if($_GET['dress'] == 35){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Women' AND cloth_type = 'Tshirts' AND sale = 'Yes' ";
		}
		if($_GET['dress'] == 36){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Men' AND cloth_type = 'jackets' AND sale = 'Yes' ";
		}
		if($_GET['dress'] == 37){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Men' AND cloth_type = 'shorts' AND sale = 'Yes' ";
		}
		if($_GET['dress'] == 38){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Men' AND cloth_type = 'trousers' AND sale = 'Yes' ";
		}
		if($_GET['dress'] == 39){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Men' AND cloth_type = 'Tshirts' AND sale = 'Yes' ";
		}
		if($_GET['dress'] == 40){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Kid' AND cloth_type = 'jackets' AND sale = 'Yes' ";
		}
		if($_GET['dress'] == 41){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Kid' AND cloth_type = 'pants' AND sale = 'Yes' ";
		}
		if($_GET['dress'] == 42){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Kid' AND cloth_type = 'Tops' AND sale = 'Yes' ";
		}
		if($_GET['dress'] == 43){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Women' AND cloth_type = 'accessories' ";
		}
		if($_GET['dress'] == 44){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Men' AND cloth_type = 'accessories' ";
		}
		
		
		
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_array($result)){
			
		?>
	<div class="row-fluid">	  
		<div class="span2">
			<?php echo '<img src = "data: image/jpg;base64,'.base64_encode($row['Image']).'" alt="Item Preview">'; ?>
		</div>
		<div class="span6">
			<h5><?php echo $row['Name'] ?> </h5>
			<p>
			<?php echo $row['Description'] ?>
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> Rs. <?php echo $row['Price'] ?></h3>
		<br>
		<div class="btn-group">
		  <a href="product_details.php?pid=<?php echo $row['ProductID']; ?>" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<?php }
		
	}
	
	
	else{
	
	?>
	
	<div class="row-fluid">
	<h5>NO ITEMS TO DISPLAY!</h5>
		
	</div>
	
	<?php
		
	}
		
	
	}
	?>
	
	
	
</div>
</div>

<!--list view ends-->


</div>
<!-- 
Clients 
-->
<section class="our_client">
	<hr class="soften"/>
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