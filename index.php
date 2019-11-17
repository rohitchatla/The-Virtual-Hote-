<?php
require "header.php";
?>

<main>
	<div>
		<section>
		<?php
    if (isset($_SESSION['userUid'])) {
       echo '<p>you are logged in</p>
       
       <a href="home.php" style="position: normal; bottom: 50px; left: 12px;">press here</a>';
       echo "welcome=".$_SESSION['userUid'];
     }
    else{ 
      if(isset($_GET['error'])){
        if($_GET['error'] == "usernot")
          echo'<p> user does not exists</p>';
      
      if($_GET['error'] == "wrgpass")
          echo '<p>wrong password</p>';
        
        }
      
    	echo '<p>you are logged out</p>';
     }
     ?>
    
	


</section>	
</div>	
</main>

<?php
require "footer.php";
?>