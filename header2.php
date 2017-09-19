

<header id="header">
    <div class="row">
      <div class="span4">
        <h1> <a class="logo" href="index.html"><img src="assets/img/Kleider.png" alt="KLEIDER shop logo"> </a> </h1>
      </div>
       
      <div class="span4"> 
    
      </div>
      <div class="span4 alignR">
       <p><?php 
		   	if(isset($_SESSION["loggedInUser"])){
				echo '<h3>HI </h3>'. '<h3>'.$_SESSION["loggedInUser"].'</h3>';
				
			}
		   
		   ?></p>
       <p><?php 
		   
		   if(isset($_SESSION['usertype'])){
			   if($_SESSION['usertype'] == "Admin"){
				   ?>
				   <button type="submit" class="defaultBtn"><a href="admin.php">Go to Admin Page</a></button>
				   
			  <?php }
					
				}
		   
		   ?>
       	
       	
       </p>
        <p><br>
          <strong> Hotline (24/7) :  0700 1234 5678 </strong><br>
          <br>
        </p>
      <button type="submit"> <a href="cart.php"><span class="btn btn-mini"><span class="icon-shopping-cart"></span></span></a></button>  <span class="btn btn-warning btn-mini">Rs.</span> <span class="btn btn-mini">$</span> <span class="btn btn-mini">&pound;</span> </div>
    </div>
  </header>
