<?php
 require "db.php";

 $emai = $_GET['email'];
 $code = $_GET['code'];

 $query = mysql_query("SELECT * FROM newsletter WHERE 'email'='$email'");
 while($row = mysql_fetch_assoc($query))
 {
 	
 	$db_code =$row ['confirmed_code'];
 }
 if($code == $db_code)
 {
 	mysql_query("UPDATE newsletter SET confirmed_code ='1'");
 	mysql_query("UPDATE newsletter SET confirmed_code='0'");

 	echo "thank you, Your mail has been now verified";

 }else{
 	echo "Emails don't match";
 }

?>
