<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login to KLEIDER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is an Online cloth shopping website named KLEIDER">
    <meta name="author" content="Varuni Punchihewa">
    <!-- Bootstrap styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
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
	include_once( "db-connection.php" );
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
<!--   sidebar-->
   
    <?php include_once 'sidebar.php';?>
	<div class="span9">
    
	<h3> Login</h3>	
	<hr class="soft"/>
	
	<div class="row">
		<div class="span4">
			<div class="well">
			<h5>NEW TO KLEIDER?</h5><br/>
			Enter your e-mail address and a password to create an account.<br/><br/>
			<form method="post">
		  	<input type="hidden" name="submitted" value="true">
			  <div class="control-group">
				<label class="control-label" for="inputEmail">E-mail address<sup>*</sup></label>
				<div class="controls">
				  <input class="span3"  type="email" name="email" placeholder="Enter your Email" required>
				</div>
			  </div>
			  
			  <div class="control-group">
				<label class="control-label" for="username">Username<sup>*</sup></label>
				<div class="controls">
				  <input class="span3"  type="text" name="username" placeholder="Enter your Username" required>
				</div>
			  </div>
			  
			  <div class="control-group">
				<label class="control-label" for="password1">Password<sup>*</sup></label>
				<div class="controls">
				  <input class="span3"  type="password" name="password1" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
				</div>
			  </div>
			  
			   <div class="control-group">
				<label class="control-label" for="password2">Re-enter your Password<sup>*</sup></label>
				<div class="controls">
				  <input class="span3"  type="password" name="password2" placeholder="Re-enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
				</div>
			  </div>
			  
			  <div class="controls">
			  <button type="submit" class="btn block" >Create Your Account</button>
			  </div>
			  
			  <?php
				
				if ( isset( $_POST[ 'submitted' ] ) ) {
				
					//echo "<script> alert ('Correct1!')</script>";
					$pass1 = $_POST['password1'];
					$pass2 = $_POST['password2'];
					$email = $_POST['email'];
					$username = $_POST['username'];
					
					
					
					//$veri_password = password_verify($pass1, $pass2);
					if(isset($pass1)){
					if($pass1 == $pass2){
								
								
						$sql = "INSERT INTO login(email, password, username, usertype) VALUES('$email', '$pass1', '$username', 'Customer')";
						$result = $conn->query( $sql ); 
						
						$_SESSION["loggedInUser"] = $username;
						$_SESSION['userEmail'] = $email;
						$_SESSION['usertype'] = "Customer";
				
				
				?>
						
						<script type="text/javascript">
         
            function Redirect() {
               window.location="index.php";
            }
            
           // document.write("You will be redirected to main page in 10 sec.");
            setTimeout('Redirect()', 1000);
       
      </script>
				
					<?php
					}
					if($pass1 != $pass2){
					echo "<script> alert ('PASSWORD IS NOT CORRECT!')</script>";
					}
					}
				}
				
			  ?>

			  
			</form>
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>ALREADY REGISTERED ?</h5>
			<form id="myForm" method="post">
		  <input type="hidden" name="submitted1" value="true">
			  <div class="control-group">
				<label class="control-label" for="inputEmail">Email<sup>*</sup></label>
				<div class="controls">
				  <input class="span3"  type="email" name="email1" placeholder="Enter your Email" required>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword">Password<sup>*</sup></label>
				<div class="controls">
				  <input type="password" name="pass" class="span3" placeholder="Enter your Password" required>
				</div>
			  </div>
			  <div class="control-group">
			  <div class="controls">
			  <div class="checkbox">
			  	<input type="checkbox"> Remeber Me
			  	</div>
			  	</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="defaultBtn" name="customersignin">Sign in as a Customer</button><br>
				  <button type="submit" class="defaultBtn" name="adminsignin">Sign in as Admin</button><br>
				  <a href="forgot_password.php">Forgot password?</a>
				</div>
			  </div>
			  
<!--		customer sign in -->
		  
			  <?php
				
				if(isset($_POST['customersignin'])){
				if ( isset( $_POST[ 'email1' ] ) ){
					$email = $_POST[ 'email1' ];
					$pass1 = $_POST[ 'pass' ];
					
					
					$sql1 = "SELECT username,password from login WHERE email = '$email'";
					
					$result1 = mysqli_query($conn, $sql1);
					
					$row1 = mysqli_fetch_assoc($result1);
					
					$password_from_DB = $row1['password'];
					$username_from_DB = $row1['username'];
					
					
					if($pass1 == $password_from_DB && $email == $row1['email'] ){
						
						echo "<script> alert('Logged in Successfully!')</script>"; 
						
						$_SESSION["loggedInUser"] = $username_from_DB;
						$_SESSION['userEmail'] = $email;
						$_SESSION['usertype'] = "Customer";
					
						
						echo "<script> alert('{$username_from_DB}')</script>";
				?>
						<script type="text/javascript">
         
            				function Redirect() {
								window.location="index.php";
            				}
          
            				setTimeout('Redirect()', 1000);
       
      					</script>
      <?php
					}
					else{
						echo "<script> alert('Incorrect Password or Email')</script>";
					}
				}
				}
			  ?>
			
<!--			  admin sign in -->
			    
			        
			  <?php
				
				if(isset($_POST['adminsignin'])){
				if ( isset( $_POST[ 'email1' ] ) ){
					$email = $_POST[ 'email1' ];
					$pass1 = $_POST[ 'pass' ];
					//$sql1 = "SELECT * from login";
					
					$sql1 = "SELECT username,password from login WHERE email = '$email'";
					
					$result1 = mysqli_query($conn, $sql1);
					
					$row1 = mysqli_fetch_assoc($result1);
					
					$password_from_DB = $row1['password'];
					$username_from_DB = $row1['username'];
					
					
					if($pass1 == $password_from_DB ){
						
						echo "<script> alert('Logged in Successfully!')</script>"; 
						
						$_SESSION["loggedInUser"] = $username_from_DB;
						$_SESSION['userEmail'] = $email;
						$_SESSION['usertype'] = "Admin";
						
						
						echo "<script> alert('{$username_from_DB}')</script>";
				?>
						<script type="text/javascript">
         
            				function Redirect() {
								window.location="index.php";
            				}
          
            				setTimeout('Redirect()', 1000);
       
      					</script>
      <?php
					}
					else{
						echo "<script> alert('Incorrect Password or Email')</script>";
					}
				}
				}
			  ?>
			  

			  
			  
			</form>
		</div>
		</div>
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
