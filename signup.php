<?php
require "header.php";
?>

<main>
<div class="divs">
	<section class="signupf">
	<h1>Sign up</h1>
	<?php
    if (isset($_GET['error'])) {
    	if($_GET['error'] == "emptyfield"){
    		echo '<p>signup error:fill in all fields</p>';
    	}
    }
    if (isset($_GET['error'])) {
    	if($_GET['error'] == "invalidmail"){
    		echo '<p>signup error:invalid email</p>';
    	}
    }
    if (isset($_GET['error'])) {
    	if($_GET['error'] == "invaliduid"){
    		echo '<p>signup error:invalid uid</p>';
    	}
    }
    if (isset($_GET['error'])) {
    	if($_GET['error'] == "passwordcheck"){
    		echo '<p>signup error:retype correct password</p>';
    	}
    }
    if (isset($_GET['error'])) {
    	if($_GET['error'] == "usertaken"){
    		echo '<p>signup error:username taken</p>';
    	}
    }
    
    if(isset($_GET['signup'])) {
    	if($_GET['signup'] == "success"){
    		echo '<p>signup successful</p>';
    	}
    }

    
	?>
	<form class="signupfo" action="includes/signup.inc.php" method="post" autocomplete="off">
		<?php
          if(isset($_GET['uid'])) 
            {      	$uid=$_GET['uid'];
            	echo '<input type="text" name="uid"
		placeholder="Username" value= "'.$uid.'">';
	}
	else{
		echo '<input type="text" name="uid"
		placeholder="Username">';
	}
		?>
		
		<input type="text" name="mail"
		placeholder="E-mail">
		<input type="password" name="pwd"
		placeholder="Password">
		<input type="password" name="pwd-repeat"
		placeholder="Repeat password">
		<button class="signupb" type="submit" name="signup-submit">Signup</button>
	</form>	


   



<a style="position: absolute;bottom: -202px; color: #F509B0;" href="rereset.php">Forgot password</a>
	</section>
</div>	
</main>
<?php
require "footer.php";
?>