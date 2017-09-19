<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is an Online cloth shopping website named KLEIDER">
    <meta name="author" content="Varuni Punchihewa">
    <!-- Bootstrap styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
     <link rel="shortcut icon" href="assets/ico/android-icon-36x36.png" type="image/png">
  </head>
<body>
<!-- 
	Upper Header Section 
-->
<?php
	include_once 'db-connection.php';
?>

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

	<div class="span13">
    
	<h3> Admin</h3>
	<br>
	<div class="control-group">
		<div class="controls">
			<lable class="shopBtn">Add a New Product/ Update a Product</label>
		</div>
	</div>	
	<hr class="soft"/>
	
	<div class="row" >
		<div class="well">
		

		
		<form action="admin.php" method="post" enctype="multipart/form-data">
		<input type="submit" class="defaultBtn" name="newP" value="Add New Product"><br>
			<br>
			<span><input type="text" name="updateproductID">
			<input type="submit" class="defaultBtn" name="productUpdateBtn" value="search"><i class="fa fa-search" aria-hidden="true"></i></span>
			
 		</form>
 		
 		
			
			<?php 
				if(isset($_POST['productUpdateBtn'])){
					$updateproductID = $_POST['updateproductID'];
					echo '<script>alert($updateproductID)</script>';
					
					$sql1 = "SELECT * FROM product_details WHERE ProductID = '$updateproductID'";
					
					$result1 = mysqli_query($conn, $sql1);
						
						if(mysqli_num_rows($result1)>0){
						
							
							while($row1=mysqli_fetch_array($result1)){
				
			?>
			
		
			<form class="form-horizontal" id="addproduct" action="admin.php" method="post" enctype="multipart/form-data">
			
			<div class="control-group">
			<div class="controls">
			
			</div>
			</div>
			<hr class="soft"/>
			
			
			<div class="control-group">
				<label class="span2 control-label" for="productName">Product Name: </label>
					<div class="controls">
						<input type="text" name="productName" placeholder="product name" value="<?php echo $row1['Name']; ?>">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="productImage">Product Image: </label>
					<div class="controls">
						 <?php echo '<img src = "data: image/jpg;base64,'.base64_encode($row1['Image']).'" alt="Item Preview">'; ?>
					</div>
					<div class="controls">
						<input type="file" name="productImage" id="productImage" placeholder="product image">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="productPrice">Product Price: </label>
					<div class="controls">
						<input type="text" name="productPrice" placeholder="product price" value="<?php echo $row1['Price']; ?>">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="quantity">Quantity: </label>
					<div class="controls">
						<input type="text" name="quantity" placeholder="quantity" value="<?php echo $row1['Stock']; ?>">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="brand">Brand: </label>
					<div class="controls">
						<input type="text" name="brand" placeholder="brand" value="<?php echo $row1['Brand']; ?>">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="productDescription">Product Description: </label>
					<div class="controls">
						<input type="text" name="productDescription" placeholder="product description" value="<?php echo $row1['Description']; ?>">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="categoryID">Category ID: </label>
					<div class="controls">
						<input type="text" name="categoryID" placeholder="category ID" value="<?php echo $row1['CategoryID']; ?>">
						
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="productColor">Color: </label>
					<div class="controls">
						
       		<input type="text" name="productColor" title="seperate multiple colors using a comma" placeholder="color" value="<?php echo $row1['product_color']; ?>">
		
						
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="productSize">Sizes: </label>
					<div class="controls">
					
       		<input type="text" name="productSize" title="seperate multiple sizes using a comma" placeholder="size" value="<?php echo $row1['size']; ?>">
		
						
					</div>
			</div>
	
	
			
			<div class="control-group">
				<label class="span2 control-label" for="productMaterial">Material: </label>
					<div class="controls">
						<input type="text" name="productMaterial" placeholder="material" value="<?php echo $row1['product_material']; ?>">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="productUsage">Usage: </label>
					<div class="controls">
						<input type="text" name="productUsage" placeholder="usage" value="<?php echo $row1['product_usage']; ?>">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="productSeason">Season: </label>
					<div class="controls">
						<input type="text" name="productSeason" placeholder="season" value="<?php echo $row1['product_season']; ?>">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="productStyle">Style: </label>
					<div class="controls">
						<input type="text" name="productStyle" placeholder="style" value="<?php echo $row1['product_style']; ?>">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="clothCategory">Cloth category: </label>
				<div class="controls">
						<input type="text" name="clothCategory" placeholder="cloth category" value="<?php echo $row1['cloth_category']; ?>">
					</div>	
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="clothType">Cloth type: </label>
					<div class="controls">
						<input type="text" name="clothType" placeholder="cloth type" value="<?php echo $row1['cloth_type']; ?>">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="newin">New in : </label>
					<div class="controls">
					<input type="text" name="newin" placeholder="" value="<?php echo $row1['newin']; ?>">
						
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="sale">Sale: </label>
					<div class="controls">
					<input type="text" name="sale" placeholder="" value="<?php echo $row1['sale']; ?>">
						
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="searchKeys">Searching keywords: </label>
					<div class="controls">
						
       		<input type="text" name="searchKeys" title="seperate multiple search keywords using a comma" placeholder="" value="<?php echo $row1['search_keys']; ?>">
		
						
					</div>
			</div>
			<input type="hidden" name="productID" value="<?php echo $row1['ProductID']; ?>"> 
			<input class="defaultBtn span8" type="submit" name="updateProduct" id="updateProduct" value="Update">
			
			<input class="defaultBtn span8" type="submit" name="deleteProduct" id="deleteProduct" value="Delete">
			</form>
			
			
			
			<?php 
					}
				}
			}
			
			
//			add a new product
			
				
			if(isset($_POST['newP'])){ 
				?>
				<form action="admin.php" method="post" enctype="multipart/form-data">
				
					<div class="control-group">
				<label class="span2 control-label" for="productName">Product Name: </label>
					<div class="controls">
						<input type="text" name="productName" placeholder="product name">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="productImage">Product Image: </label>
					<div class="controls">
						<input type="file" name="productImage" id="productImage" placeholder="product image">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="productPrice">Product Price: </label>
					<div class="controls">
						<input type="text" name="productPrice" placeholder="product price">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="quantity">Quantity: </label>
					<div class="controls">
						<input type="text" name="quantity" placeholder="quantity">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="brand">Brand: </label>
					<div class="controls">
						<input type="text" name="brand" placeholder="brand">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="productDescription">Product Description: </label>
					<div class="controls">
						<input type="text" name="productDescription" placeholder="product description" >
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="categoryID">Category ID: </label>
					<div class="controls">
						<select name="categoryID">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
						
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="productColor">Color: </label>
					<div class="controls">
						
       		<input type="text" name="productColor" title="seperate multiple colors using a comma" placeholder="color">
		
						
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="productSize">Sizes: </label>
					<div class="controls">
					
       		<input type="text" name="productSize" title="seperate multiple sizes using a comma" placeholder="size">
		
						
					</div>
			</div>
	
	
			
			<div class="control-group">
				<label class="span2 control-label" for="productMaterial">Material: </label>
					<div class="controls">
						<input type="text" name="productMaterial" placeholder="material">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="productUsage">Usage: </label>
					<div class="controls">
						<input type="text" name="productUsage" placeholder="usage">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="productSeason">Season: </label>
					<div class="controls">
						<input type="text" name="productSeason" placeholder="season">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="productStyle">Style: </label>
					<div class="controls">
						<input type="text" name="productStyle" placeholder="style">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="clothCategory">Cloth category: </label>
					<div class="controls">
					<select name="clothCategory">
					<option>Women</option>
					<option>Men</option>	
					<option>Kids Girls</option>
					<option>Kids Boys</option>
					</select>
						
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="clothType">Cloth type: </label>
					<div class="controls">
						<input type="text" name="clothType" placeholder="cloth type">
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="newin">New in : </label>
					<div class="controls">
					<select name="newin">
						<option>Yes</option>
						<option>NULL</option>
					</select>
						
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="sale">Sale: </label>
					<div class="controls">
					<select name="sale">
						<option>Yes</option>
						<option>NULL</option>
					</select>
						
					</div>
			</div>
			
			<div class="control-group">
				<label class="span2 control-label" for="searchKeys">Searching keywords: </label>
					<div class="controls">
						
       		<input type="text" name="searchKeys" title="seperate multiple search keywords using a comma" placeholder="">
						
						
					</div>
			</div>
					
				
			<input class="defaultBtn span8" type="submit" name="addNewProduct" id="addNewProduct" value="Submit">
			</form>
			<?php 
			} 
			?>
			
			
			
			<?php
				if(isset($_POST['addNewProduct'])){
					
					echo '<script>alert("sss")</script>';
					
					$productName = $_POST['productName'];
					
					$productPrice = $_POST['productPrice'];
					$quantity = $_POST['quantity'];
					$brand = $_POST['brand'];
					$productDescription = $_POST['productDescription'];
					$categoryID = $_POST['categoryID'];
					$productColor = $_POST['productColor'];
					$productSize = $_POST['productSize'];
					$productMaterial = $_POST['productMaterial'];
					$productUsage = $_POST['productUsage'];
					$productStyle = $_POST['productStyle'];
					$clothCategory = $_POST['clothCategory'];
					$clothType = $_POST['clothType'];
					$newin = $_POST['newin'];
					$sale = $_POST['sale'];
					
					$pic= addslashes(file_get_contents($_FILES["productImage"]["tmp_name"]));
					

					
					
					$sql = "INSERT INTO product_details (Name, Image,Price,product_color,size,Stock,Brand,Description,CategoryID,product_material,product_season,product_style, product_usage, cloth_category, cloth_type, newin, sale,search_keys) VALUES ('".$_POST['productName']."','".$pic."','". $_POST['productPrice']."','". $_POST['productColor']."','". $_POST['productSize']."','". $_POST['quantity']."','". $_POST['brand']."','".$_POST['productDescription']."','". $_POST['categoryID']."','". $_POST['productMaterial']."','". $_POST['productSeason']."','". $_POST['productStyle']."','". $_POST['productUsage']."','". $_POST['clothCategory']."','". $_POST['clothType']."','". $_POST['newin']."','". $_POST['sale']."','". $_POST['searchKeys']."')";

 					if ($conn->query($sql) === TRUE) {
    					echo '<script>alert("New product inserted successfully")</script>';
 					} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
					}

				}
			
			if(isset($_POST['deleteProduct'])){
				$deleteID = $_POST['productID'];
				$sql3 = "DELETE FROM product_details WHERE ProductID = '$deleteID'";
				
				if ($conn->query($sql3) === TRUE) {
    echo '<script>alert($deleteID)</script>';
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
				
			}
			
			if(isset($_POST['updateProduct'])){
				
				$updateID = $_POST['productID'];
				
				
				if(isset($_POST['productImage'])){
					$pic= addslashes(file_get_contents($_FILES["productImage"]["tmp_name"]));
					$sql4 = "UPDATE product_details SET Name = '".$_POST['productName']."', Image = '".$pic."' , Price = '". $_POST['productPrice']."', product_color ='".$_POST['productColor']."',size = '". $_POST['productSize']."' ,Stock = '". $_POST['quantity']."',Brand = '". $_POST['brand']."',Description = '".$_POST['productDescription']."' ,CategoryID = '". $_POST['categoryID']."' ,product_material = '". $_POST['productMaterial']."',product_season = '". $_POST['productSeason']."',product_style = '". $_POST['productStyle']."', product_usage = '". $_POST['productUsage']."', cloth_category = '". $_POST['clothCategory']."', cloth_type = '". $_POST['clothType']."', newin = '". $_POST['newin']."', sale = '". $_POST['sale']."',search_keys = '". $_POST['searchKeys']."' WHERE ProductID = $updateID";
				}else{
					$sql4 = "UPDATE product_details SET Name = '".$_POST['productName']."', Price = '". $_POST['productPrice']."', product_color ='".$_POST['productColor']."',size = '". $_POST['productSize']."' ,Stock = '". $_POST['quantity']."',Brand = '". $_POST['brand']."',Description = '".$_POST['productDescription']."' ,CategoryID = '". $_POST['categoryID']."' ,product_material = '". $_POST['productMaterial']."',product_season = '". $_POST['productSeason']."',product_style = '". $_POST['productStyle']."', product_usage = '". $_POST['productUsage']."', cloth_category = '". $_POST['clothCategory']."', cloth_type = '". $_POST['clothType']."', newin = '". $_POST['newin']."', sale = '". $_POST['sale']."',search_keys = '". $_POST['searchKeys']."' WHERE ProductID = $updateID";
				}
				
				
//				$pic= addslashes(file_get_contents($_FILES["productImage"]["tmp_name"]));
				
				
				
				if ($conn->query($sql4) === TRUE) {
    echo '<script>alert("uuuuuuuu")</script>';
 } else {
     echo "Error: " . $sql4 . "<br>" . $conn->error;
 } 
			}
			
				
			?>
			
			
			
</div>
		
	<hr class="soft"/>	
	
			
					
		<!--	Manage Customers-->


<div class="well">		
	<div class="control-group">
		<div class="controls">
			<lable class="shopBtn">Manage Customers</label>
		</div>
	</div>
	<hr class="soft"/>
	
	<table class="table" id="task-table">
						<thead>
							<tr>
								
								<th>Customer ID</th>
								<th>Customer Name</th>
								<th>Email</th>
								<th>Password</th>
								<th></th>
								
							</tr>
						</thead>
						<tbody>
							
							<?php
							
								$sql7 = "SELECT * FROM login  WHERE usertype = 'Customer'";
								$result7 = mysqli_query($conn,$sql7);
							
							if(mysqli_num_rows($result7)>0){
						
							
							while($row7=mysqli_fetch_array($result7)){
							?>
							
							<tr>
							<form action="" method="post">
								<td><?php echo $row7['userID']; ?></td>
								<td><?php echo $row7['username']; ?></td>
								<td><?php echo $row7['email']; ?></td>
								<td><?php echo $row7['password']; ?></td>
								
								<td><button class="btn btn-mini btn-danger" type="submit" onClick="window.location.reload()"><a href="admin.php?action=delete&removeid=<?php echo $row7['userID']; ?>"><span class="icon-remove"></span></button></td>
								
								</form>
							</tr>
							
							<?php 
							}
							}
							
							if(isset($_GET["action"])){
								if($_GET["action"] == "delete"){
									
								$sql8 = "DELETE FROM login WHERE userID = '".$_GET['removeid']."'";
								$conn->query($sql8);
								}
							}
							
							
							?>
						
			</tbody>
	</table>

</div>		
	
	
<!--	order report-->


<div class="well">		
	<div class="control-group">
		<div class="controls">
			<lable class="shopBtn">Order Report</label>
		</div>
	</div>
	<hr class="soft"/>
	
	<table class="table" id="task-table">
						<thead>
							<tr>
								
								<th>Customer email</th>
								<th>Product ID</th>
								<th>Product name</th>
								<th>Product price</th>
								<th>Quantity ordered</th>
								<th>Ordered Date</th>
							</tr>
						</thead>
						<tbody>
							
							<?php
							
								$sql5 = "SELECT * FROM order_details";
								$result5 = mysqli_query($conn,$sql5);
							
							if(mysqli_num_rows($result5)>0){
						
							
							while($row5=mysqli_fetch_array($result5)){
							?>
							
							<tr>
								<td><?php echo $row5['useremail']; ?></td>
								<td><?php echo $row5['ProductID']; ?></td>
								<td><?php echo $row5['ProductName']; ?></td>
								<td><?php echo $row5['ProductPrice']; ?></td>
								<td><?php echo $row5['QtyOrdered']; ?></td>
								<td><?php echo $row5['OrderedDate']; ?></td>
							</tr>
							
							<?php 
							}
							}
							?>
						
			</tbody>
	</table>

</div>
	<hr class="soft"/>
		
		
<!--	transaction report-->
		
<div class="well">		
	<div class="control-group">
		<div class="controls">
			<lable class="shopBtn">Transaction Report</label>
		</div>
	</div>
	<hr class="soft"/>
	
	<table class="table" id="task-table">
						<thead>
							<tr>
								
								<th>First name</th>
								<th>Last name</th>
								<th>Email</th>
								<th>Billing address</th>
								<th>Postal code</th>
								<th>Phone number</th>
								<th>Payment Type</th>
								<th>Credit card No</th>
								<th>CSC</th>
								<th>Expire Date</th>
								<th>Total price</th>
								<th>Date</th>
							</tr>
						</thead>
						<tbody>
							
							<?php
							
							$sql6 = "SELECT * FROM transaction_details";
							$result6 = mysqli_query($conn,$sql6);
							
							if(mysqli_num_rows($result6)>0){
						
							
							while($row6=mysqli_fetch_array($result6)){
							
							if($row6['payment_type'] == 1){
								$row6['payment_type'] = 'Visa';
							}else if($row6['payment_type'] == 2){
								$row6['payment_type'] = 'Master Card';
							}else if($row6['payment_type'] == 3){
								$row6['payment_type'] = 'American Express';
							
								
							
							
							?>
							
							<tr>
								<td><?php echo $row6['firstname']; ?></td>
								<td><?php echo $row6['lastname']; ?></td>
								<td><?php echo $row6['email']; ?></td>
								<td><?php echo $row6['billing_address']; ?></td>
								<td><?php echo $row6['postalcode']; ?></td>
								<td><?php echo $row6['phonenumber']; ?></td>
								<td><?php echo $row6['payment_type']; ?></td>
								
								
								<td><?php echo $row6['creditcard_number']; ?></td>
								<td><?php echo $row6['csc']; ?></td>
								<td><?php echo $row6['expiredate']; ?></td>
								<td><?php echo $row6['totalprice']; ?></td>
								<td><?php echo $row6['date']; ?></td>
							</tr>
							
							<?php 
							}
								}
							}
							?>
						
			</tbody>
	</table>

</div>		
	
	<hr class="soft"/>
		

<!--customer feedback report-->

<div class="well">		



			
	<div class="control-group">
		<div class="controls">
			<lable class="shopBtn">Customer Feedback</label>
		</div>
	</div>
	<hr class="soft"/>
			
			
					<table class="table" id="task-table">
						<thead>
							<tr>
								<th>Customer name</th>
								<th>Customer email</th>
								<th>Subject</th>
								<th>Comment</th>
							</tr>
						</thead>
						<tbody>
			
			<?php
	
				$sql2 = "SELECT * FROM feedback";
				
				$result2 = mysqli_query($conn, $sql2);
						
						if(mysqli_num_rows($result2)>0){
						
							
							while($row2=mysqli_fetch_array($result2)){
	
	
			?>
			
				<tr>
								<td><?php echo $row2['name']; ?></td>
								<td><?php echo $row2['email']; ?></td>
								<td><?php echo $row2['subject']; ?></td>
								<td><?php echo $row2['comment']; ?></td>
							</tr>
							<?php
							}
								}
							?>
						</tbody>
					</table>
				</div>
				
				
				
				
				
				
				
				
			</div>
			
			
			
			
			
	


	
	<hr class="soft"/>
		
		
			
		
	
</div>

</div>
<!-- 
Clients 
-->
<?php include_once 'footer.php'; ?>
</div><!-- /container -->

<?php include_once 'copyright.php'; ?>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
    
    
    <script>  
 $(document).ready(function(){  
      $('#addNewProduct').click(function(){  
           var image_name = $('#productImage').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#productImage').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#productImage').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
    
  </body>
</html>
