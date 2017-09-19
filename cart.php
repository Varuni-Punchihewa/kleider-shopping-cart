

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cart</title>
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



<?php
	
	if(!empty($_SESSION['userEmail'])){
				
					 if(isset($_POST['updateBtn'])){

	 				 if(isset($_POST["action"])){
      					if($_POST["action"] == "update"){
 
							$updateID = $_POST['updateid'];
							$newqty = $_POST['newqty'];
		  
           					foreach($_SESSION["shopping_cart"] as $keys => $values){

                				if($values["item_id"] == $updateID){ 

									
									$sql1="SELECT * FROM product_details WHERE ProductID='{$updateID}' ";
									 $result1 = mysqli_query($conn, $sql1);
									if(mysqli_num_rows($result1)>0){
										
										 $row1=mysqli_fetch_array($result1);
										if(($row1['Stock']-$newqty)>=0){
									
									$_SESSION["shopping_cart"][$keys]["item_quantity"] = $newqty;  
                     				echo '<script>alert("Item Updated")</script>';  
                     
											}else{
											echo '<script>alert("Can not add more. Stock is over!")</script>';
										}
									}
                					}  
           						}  
      						}  
					 	}
					 }
					  
					  
			    ?>

	<div class="row">
	<div class="span12">
<!--
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Check Out</li>
    </ul>
-->
	<div class="well well-small">
		<h1>Cart </h1>
	<hr class="soften"/>
	
	<?php
		
		
		
		if(isset($_POST["add_to_cart"])){ 
			
      		if(isset($_SESSION["shopping_cart"])){  
				
           		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
				
           		if(!in_array($_GET["proid"], $item_array_id)){
					
                	$count = count($_SESSION["shopping_cart"]);  
					
                	$item_array = array(  
                     'item_id'=>$_GET["proid"],  
                     'item_name'=>$_POST["hidden_name"],  
                     'item_price'=>$_POST["hidden_price"],  
                     'item_quantity'=>$_POST["quantity"]  
                	);  
                	$_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                //echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'=>$_GET["proid"],  
                'item_name'=>$_POST["hidden_name"],  
                'item_price'=>$_POST["hidden_price"],  
                'item_quantity' =>$_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 } 
		
		
		
 if(isset($_GET["action"])){  
	 
      if($_GET["action"] == "delete"){
		  
           foreach($_SESSION["shopping_cart"] as $keys => $values){
			   
                if($values["item_id"] == $_GET["sid"]){ 
					
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     //echo '<script>window.location="index.php"</script>';  
                }  
           }  
      }  
 } 
		
		?>
	
	<table class="table table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Unit price</th>
                  <th>Qty </th>
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
            
                
                 
                  <?php
					
					if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?> 
                          
                   <tr> 
                 
                  <td>
                  <?php
					$dbImageID = $values["item_id"];
								   
					$sql = "SELECT Image FROM product_details WHERE ProductID = '$dbImageID' ";
                    $result = mysqli_query($conn, $sql);
					$row=mysqli_fetch_array($result);
                  
                  echo '<img width="100" src = "data: image/jpg;base64,'.base64_encode($row['Image']).'" alt="Item Preview">';
					  ?></td>
                  
                  <td>Items name : <?php echo $values["item_name"]; ?></td>
                  
                 
                 
                  <td>Rs. <?php echo $values["item_price"]; ?></td>
                  
                  <td>
                 
					
					
				<form action="" method="post">
					<input class="span1" style="max-width:40px" placeholder="1" id="appendedInputButtons" name="newqty" size="16" type="number" min = "0" value="<?php echo $values["item_quantity"]; ?>">
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="updateid" value="<?php echo $values["item_id"];?>">
					  <div class="input-append">
						<button class="btn btn-mini" type="submit" name="updateBtn">
							Update
						</button> 
					
						
						<button class="btn btn-mini btn-danger" type="button"><a href="cart.php?action=delete&sid=<?php echo $values["item_id"]; ?>"><span class="icon-remove"></span></button>
					</div>
				</form>
				
				
				
				
				
				</td>
                 
                  <td> Rs. <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                 
                </tr>
                  <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
								   
                               }  
                          ?>  

                <tr>
                  <td colspan="6" class="alignR">Total Product Price:	</td>
                  <td> Rs. <?php echo number_format($total, 2); ?></td>
                </tr>
                 <?php  
                          }  
                          ?>  
				</tbody>
            </table><br/>
		
		
          
			<table class="table table-bordered">
			<table class="table table-bordered">
			<tbody>
                <tr><td><h5>ESTIMATE YOUR SHIPPING & TAXES</h5></td></tr>
                 <tr> 
				 <td>
					<form class="form-horizontal" action="cart.php" method="post">
					  <div class="control-group">
						<label class="span2 control-label" for="inputCountry">Country</label>
						<div class="controls">
						  <select name="CountryOption">
						  	 <?php 
						$sql2="SELECT * FROM shipping_prices";

						 $result2 = mysqli_query($conn, $sql2);

						if(mysqli_num_rows($result2)>0){

							while($row2=mysqli_fetch_array($result2)){ ?>

						  <option><?php echo $row2['Country'] ?> </option>
						<?php 	
							}
						} ?>
						  </select>
						</div>
					  </div>
					  
					  
					   
					  
					  <div class="control-group">
						<label class="span2 control-label" for="inputAddress">Address</label>
						<div class="controls">
						  <input type="text" name="inputAddress" placeholder="Your shipping address">
						</div>
					  </div>
					  <div class="control-group">
						<div class="controls">
						  <button type="submit" class="shopBtn">Click to check the price</button>
						</div>
					  </div>
					</form> 
					<?php
					if(isset($_POST['CountryOption'])){ ?>
						<div class="control-group">
						<label class="span2 control-label" for="shippingPrice">Shipping Price  (Rs.) </label>
						<div class="controls">
						  <input type="text" name="shippingPrice" value="<?php 
							$country = $_POST['CountryOption'];						   
							$sql3 = "SELECT Price FROM shipping_prices WHERE Country = '$country'";	
							$result3 = mysqli_query($conn, $sql3);
							if(mysqli_num_rows($result3)>0){
								$row3=mysqli_fetch_array($result3);
								echo $row3['Price'];
													   
						 ?>">
						</div>
					  </div>
					 
					 
					 <div class="control-group">
						<label class="span2 control-label" for="totalShipping">Total price with the shipping price</label>
						<div class="controls">
						  
							<?php $ship = $total + $row3['Price'];
							$_SESSION['totalPrice']= $ship;
							?>
							
							<input type="text" name="totalShipping" value="<?php echo $ship; ?>">
						</div>
					  </div>
					 
					<?php
							}
					}
					?>
				  </td>
				  </tr>
              </tbody>
            </table>	
            </table>		
	<a href="products.html" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
	<a href="checkout.php" class="shopBtn btn-large pull-right">Check Out <span class="icon-arrow-right"></span></a>	
		

		
		

		
	

<?php
		
		
		
		
	}else{
		echo "<script> alert ('Please log in first!')</script>";
		?>
		<script type="text/javascript">
         
            function Redirect() {
               window.location="login.php";
            }
            
          
            setTimeout('Redirect()', 1);
       
      </script>
	<?php
	}
	
	?>
	

	
	
</div>
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
  </body>
</html>
