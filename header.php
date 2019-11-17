<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  
	<title>CVRROCKET/SOCIO</title>
	<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="style2.css">

</head>
<style type="text/css" media="screen">
	body{
    background-image: linear-gradient(to right,violet , black);
    background-size: 100%;
}

</style>
<body>

	<div class="bg">
		

		<h5 style="color: #EB1010;">CVRROCKET</h5>
		<nav class="nav">
		<a href="#">
			<img src="logo.png" alt="" width="50" height="50">
		</a>
		<ul class="ul">
			<li><a href="index2.php">Home</a>&nbsp</li>
			<li><a href="#">About</a>&nbsp</li>
			<li><a href="#">Port</a>&nbsp</li>
			<li><a href="#">Contact</a></li>
			<li><a href="bot.html">Bot Help</a></li>

		</ul>
		
        <p class="typed">"WELCOME! to THE VIRTUAL HOTEL"</p>
	    <p class="typing"></p>

 		<div>
   
   <svg width="640" height="480" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
 <g class="layer">
  <title>Layer 1</title>
  <path class="glass" d="m256.43115,302.02514c-8.71686,-9.54136 0.22118,-28.38265 7.48951,-22.28941c5.40877,-0.02519 10.81758,-0.00857 16.22636,-0.01341c0,-21.71838 0,-43.43678 0,-65.15517c-13.54901,-33.36871 -27.09802,-66.73742 -40.64703,-100.10613c30.66657,-0.23241 61.33343,-0.23215 92,0c-13.30543,33.53359 -26.61086,67.06717 -39.91628,100.60077c0,21.55353 0,43.10703 0,64.66053c7.98616,0.14537 15.98599,-0.39527 23.96044,0.55029c6.27866,3.44349 3.76529,24.49645 -2.33663,22.27714c-18.92486,-0.13445 -37.85576,0.24485 -56.77638,-0.5246l0,-0.00001l0.00001,0zm39.35134,-117.96118c6.09915,-4.74516 5.24171,-25.27778 -1.30089,-27.37131c-9.86941,-5.55048 -12.00057,29.40481 -1.62714,28.5845c1.00169,0.01343 2.01947,-0.27615 2.92803,-1.21319l0,0z" fill="#ffff00" id="svg_1" stroke="#000000" stroke-width="5"/>
  <polygon class="star" fill="#00ffff" id="svg_2" points="288.5,257.099609375 293.7666473388672,272.2510681152344 309.8040466308594,272.5779113769531 297.02162170410156,282.2688293457031 301.6666259765625,297.622314453125 288.5,288.46014404296875 275.3333740234375,297.622314453125 279.97837829589844,282.2688293457031 267.1959533691406,272.5779113769531 283.2333526611328,272.2510681152344 288.5,257.099609375 293.7666473388672,272.2510681152344 " stroke="#000000" stroke-width="5"/>
 </g>
</svg>
			<?php
			if (isset($_SESSION['userUid'])) {
               echo '<form action="includes/logout.inc.php" method="post">
		 	   <button class="logout" type="submit" name="logout-submit">Logout</button>
           
              
		       </form>';

               }
            else{
    	         echo '<form class="login" action="includes/login.inc.php" method="post" autocomplete="off">
		         <input  type="text" name="mailuid" placeholder="Username/E-mail">
		         <input  type="password" name="pwd" placeholder="Password">
		         <button class="loginb" type="submit" name="login-submit">Login</button>
		         </form>';
		         }
            ?>
				<a class="signup" href="signup.php">Sign up</a>
		
		
		</div>	
		</nav>
		</div>
<script type="text/javascript" src="script.js"></script>
</body>
</html>