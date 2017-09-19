<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Contact Us</title>
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
	<div class="well well-small">
	<h1>Visit us</h1>
	<hr class="soften"/>	
	<div class="row-fluid">
		<div class="span8 relative">
		<iframe style="width:100%; height:350px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Newbury+Street,+Boston,+MA,+United+States&amp;aq=1&amp;oq=NewBoston,+MA,+United+States&amp;sll=42.347238,-71.084011&amp;sspn=0.014099,0.033023&amp;ie=UTF8&amp;hq=Newbury+Street,+Boston,+MA,+United+States&amp;t=m&amp;ll=42.348994,-71.088248&amp;spn=0.001388,0.006276&amp;z=18&amp;iwloc=A&amp;output=embed"></iframe>

		<div class="absoluteBlk">
		<div class="well wellsmall">
		<h4>Contact Details</h4>
		<h5>
			2601 Mission St.<br/>
			San Francisco, CA 94110<br/><br/>
			 
			info@mysite.com<br/>
			﻿Tel 123-456-6780<br/>
			Fax 123-456-5679<br/>
			web:wwwmysitedomain.com
		</h5>
		</div>
		</div>
		</div>
		
		<div class="span4">
		<h4>Email Us</h4>
			
		<form class="form-horizontal" action="contact.php" method="post">
        <fieldset>
          <div class="control-group">
           
              <input type="text" placeholder="name (required)" name="name" required class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="email" placeholder="email (required)" name="email" required class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="subject" name="subject" class="input-xlarge"/>
          
          </div>
          <div class="control-group">
              <input type="text" style="width: 270px; height: 60px" name="comment" required placeholder="Tell us what you think (required)">
           		
          </div>

            <button class="shopBtn" name="feebackBtn" type="submit">Send email</button>

        </fieldset>
      </form>
			
			
			<?php
				
				if(isset($_POST['feebackBtn'])){
					
					if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment'])){
					
					$subject = $_POST['subject'];
					$comment = $_POST['comment'];
					
//					mail("1995varuni@gmail.com", $subject, $comment);
					
					$sql = "INSERT INTO feedback (name, email, subject, comment) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['subject']."', '".$_POST['comment']."')";
						
					if ($conn->query($sql) === TRUE) {
						echo '<script>alert(Emailed successfully!)</script>';
 					} 

					}else{
						echo '<script>alert("Please fill all the required fields")</script>';
					}
				}
			
			?>
			
			
		</div>
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
