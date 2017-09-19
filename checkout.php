<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Check Out</title>
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
 <?php include_once 'navBar.php';  ?>
<!-- 
Body Section 
-->
	<div class="row">

    
	<div class="span9">
   
	<h3>CHECK OUT</h3>	
	<hr class="soft"/>
	<div class="well">
	<form class="form-horizontal" action="checkout.php" method="post">
		<h3>Your Billing Information</h3>
		<div class="control-group">
		<label class="control-label">Title </label>
		<div class="controls">
		<select class="span2" name="title">
			<option value="">-</option>
			<option value="1">Mr.</option>
			<option value="2">Mrs</option>
			<option value="3">Miss</option>
		</select>
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="Fname">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="Fname" placeholder="First Name" required>
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="Lname">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="Lname" placeholder="Last Name" required>
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="Email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="Email" placeholder="Email" required>
		</div>
	  </div>	
		<div class="control-group">
		<label class="control-label" for="Country">Country <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="Country" placeholder="Country" required> 
		</div>
	  </div>
		
		<div class="control-group">
		<label class="control-label" for="Address">Billing Address <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="Address" placeholder="Address" required>
		</div>
	  </div>
		
		<div class="control-group">
		<label class="control-label" for="City">City </label>
		<div class="controls">
		  <input type="text" name="City" placeholder="City">
		</div>
	  </div>
		<div class="control-group">
		<label class="control-label" for="postalcode">Postal Code <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="postalcode" placeholder="postal code" pattern="[0-9]{1,8}" maxlength="8" required>
		</div>
	  </div>
		<div class="control-group">
		<label class="control-label" for="phonenumber">Phone Number <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="phonenumber" placeholder="phone number" pattern="[0-9]{10}" maxlength="10" required>
		</div>
	  </div>
		<div class="control-group">
		<label class="control-label" for="payment">Payment Type <sup>*</sup></label>
		<div class="controls">
		  <select class="span3" name="payment" required>
			  <option value="">-</option>
			<option  value="1">Visa</option>
			<option value="2">Master Card</option>
			<option value="3">American Express</option>
			
		</select>
		</div>
	  </div>
		<div class="control-group">
		<label class="control-label" for="creditcard">Credit card number <sup>*</sup></label>
		<div class="controls">
		 <input type="tel" name="creditcard" placeholder="credit card number" pattern="[0-9]{13,16}" maxlength="16" required>
		</div>
			<label class="control-label" for="csc">CSC <sup>*</sup></label>
		<div class="controls">
		 <input class="span1" name="csc" type="text" pattern="[0-9]{3}" placeholder="" title="enter 3 digits of csc value on the back of your credit card" required maxlength="3">
		</div>
	  </div>
		<div class="control-group">
		<label class="control-label" for="expiredate">Expiration Date <sup>*</sup></label>
		<div class="controls">
		  <input type="date" name="expiredate" min="2017-12-01" required>
			
		</div>
	  </div>
		
		
		
	<div class="control-group">
		<div class="controls">
		 <input type="submit" name="completeTrans" value="Place My Order" class="exclusive shopBtn">
		</div>
	</div>
	</form>
</div>


<?php
		if(isset($_POST['completeTrans'])){
			$time = date("Y-m-d H:i:s");
			
			$sql = "INSERT INTO transaction_details (firstname,lastname,email,billing_address,postalcode,phonenumber,	payment_type,creditcard_number,csc,expiredate,totalprice,date) VALUES ('".$_POST['Fname']."','".$_POST['Lname']."','".$_POST['Email']."','".$_POST['Address']."','".$_POST['postalcode']."','".$_POST['phonenumber']."','".$_POST['payment']."','".$_POST['creditcard']."','".$_POST['csc']."','".$_POST['expiredate']."','".$_SESSION['totalPrice']."','".$time."')";
			
			if ($conn->query($sql) === TRUE) {
    					echo '<script>alert("Order placed Successfully\nThank You!")</script>'; 
		
		
		//			update the database
		
		
				foreach($_SESSION["shopping_cart"] as $keys => $values) {
		
				$sql2 = "UPDATE product_details SET Stock = (Stock - '".$values['item_quantity']."') WHERE ProductID = '".$values['item_id']."'";
				 $conn->query($sql2);
				 echo '<script>alert("DB updated")</script>'; 
			
			 }
				
				
				
//	add into order detail
				
				foreach($_SESSION["shopping_cart"] as $keys => $values) {
					
				$sql3 = "INSERT INTO order_details (useremail,ProductID,ProductName,ProductPrice,QtyOrdered,OrderedDate) VALUES ('".$_SESSION['userEmail']."','".$values['item_id']."','".$values['item_name']."','".$values['item_price']."','".$values['item_quantity']."','".$time."')";
					if ($conn->query($sql3) === TRUE) {
				
					}else{
						echo "Error: " . $sql3 . "<br>" . $conn->error;
					}
				}
				
			
				
		
				
					
			unset($_SESSION["shopping_cart"]);
		?>
		
		
						<script type="text/javascript">
         
            				function Redirect() {
								window.location="index.php";
            				}
          
            				setTimeout('Redirect()', 10);
       
      					</script>
		
		
 					<?php 
			}
						
						else {
							echo "Error: " . $sql . "<br>" . $conn->error;
							}
			

			
			 
			} 
			
			
		
			
		
		
?>



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
