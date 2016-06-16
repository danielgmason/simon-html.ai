<?php  
$hostname = "us-cdbr-iron-east-04.cleardb.net";  
$username = "b4fbb18f7f69fd";  
$password = "1c31170b";  
$database = "heroku_94f6456c3f9e9c3";  
  
$link = mysql_connect($hostname, $username, $password) or die("Cannot connect to the database!");  
mysql_select_db($database) or die("Cannot select database!");  
?>  