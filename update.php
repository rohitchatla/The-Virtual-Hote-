<!DOCTYPE html>
<html>
<?php
session_start();
include 'includes/dbh.inc.php';
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="send.php" method="post">
    <textarea name="msg" placeholder="type any requests"></textarea><br>
              <input type="checkbox" name="typed" value="p1" placeholder="">Product_1<br><br>
          <input type="checkbox" name="typed" value="p2" placeholder="">Product_2<br><br>
<select name="type2">
            <option value="-1">Select user type</option>
            <option value="pt1">Product_type 1</option>
            <option value="pt2">Product_type 2</option>
        </select>
    <input class="subm" type="submit" name="submitot" value="send">
</div>
</body>
</html>
