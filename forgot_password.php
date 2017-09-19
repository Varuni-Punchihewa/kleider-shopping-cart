<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<title>Forgot Password</title>
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
	<h3> FORGOT YOUR PASSWORD</h3>	
	<hr class="soft"/>
	
	Please enter the e-mail address used to register. We will e-mail you your new password.<br/><br/><br/>
	
	
	<form class="form-inline">
		<label class="control-label" for="inputEmail">E-mail address</label>
		<input type="text" class="span4" placeholder="Email">			  
		<button type="submit" class="shopBtn block">Send My Password</button>
	</form>
</div>
</div>
</div>

<!--
Footer
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
