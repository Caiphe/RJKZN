<?php
include ("db.php");

$subject = $_POST['subject'];
$body =$_POST['message'];

$query = "SELECT * FROM newsletter"
?>