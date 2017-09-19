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


<!-- Favicons -->
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
	if(isset($_GET['code'])){
		if($_GET['code']==1){
	$sql = "SELECT * FROM product_details WHERE newin = 'Yes' ";
		}
		if($_GET['code']==2){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Women' ";
		}
		if($_GET['code']==3){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Men' ";
		}
		if($_GET['code']==4){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Kids' ";
		}
		if($_GET['code']==5){
	$sql = "SELECT * FROM product_details WHERE sale = 'Yes' ";
		}
		if($_GET['code']==6){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Men' AND cloth_type = 'accessories' ";
		}
		if($_GET['code']==7){
	$sql = "SELECT * FROM product_details WHERE cloth_category = 'Women' AND cloth_type = 'accessories' ";
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
			<h4><?php echo $row['Name'] ?> </h4>
			<p>
			<?php echo $row['Description'] ?>
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> Rs. <?php echo $row['Price'] ?></h3>
		<br>
		
		<div class="btn-group">
	   <a href="product_details.php?pid=<?php echo $row['ProductID']; ?>" class="defaultBtn">VIEW</a>
		 
		  
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<?php }
		
	}
	}
	?>
	
<!--	search items-->


   <?php 
	if(isset($_POST['searchBtn'])){
		
	  if(isset($_POST['searchword'])){
		  $keyword = $_POST['searchword'];
		  
		  $sql1 = "SELECT * FROM product_details WHERE search_keys like '%$keyword%'";
		  
		  $result1 = mysqli_query($conn, $sql1);
						
		  if(mysqli_num_rows($result1)>0){
						
							
			while($row1=mysqli_fetch_array($result1)){ ?>
								
			<div class="row-fluid">	  
				<div class="span2">
				<?php echo '<img src = "data: image/jpg;base64,'.base64_encode($row1['Image']).'" alt="Item Preview">'; ?>
				</div>
				<div class="span6">
				<h4><?php echo $row1['Name'] ?> </h4>
				<p>
				<?php echo $row1['Description'] ?>
				</p>
				</div>
				<div class="span4 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> Rs. <?php echo $row1['Price'] ?></h3>
				<br>
		
				<div class="btn-group">
			   <a href="product_details.php?pid=<?php echo $row1['ProductID']; ?>" class="defaultBtn">VIEW</a>
		 
		  
		 		</div>
				</form>
				</div>
			</div>
	<hr class="soften">
						<?php	
							}
						}	
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