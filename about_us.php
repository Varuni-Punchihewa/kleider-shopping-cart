<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap shopping cart</title>
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
   <?php include_once 'navBar.php';  ?>
<!-- 
Body Section 
-->
	<hr class="soften">
	<div>
		<h1>About us</h1>
	</div>
	<hr class="soften">
	<div class="row">
		<div class="span8">
		  <h6>
			I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.
		  </h6>
		  <div class="img-store">
		  <img src="assets/img/clothing store/Urban-Clothing-Stores.jpg" alt="KLEIDER clothing store">
		  </div>
		  <p>
			It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.<br>
			<br>
			This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.
			<br><br>
			Sometimes I'm right and I can be wrong. My own beliefs are in my song. The butcher, the banker, the drummer and then, makes no difference what group I'm in. I am everyday people! Yeah. Yeah.<br>
		  </p>
		</div>
		<div class="span4">
			Monday - Friday<br/>
			09:00am - 09:00pm<br/>
			Saturday<br/>
			09:00am - 07:00pm<br/>
			Sunday<br/>
			12:30pm - 06:00pm<br/>
		</div>
	</div>

<!--
Footer
-->
 <?php include_once 'footer.php'; ?>
</div>
	
<!-- copyright -->

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