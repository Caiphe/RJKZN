<?php

  $email = trim( stripcslashes($_POST['email']));
  $errorEmail = "";

  if(isset($_POST['news']))
  {
    if(empty($_POST['email']))
    {
        $errorEmail="Your Email is Required";
    }
    if
    {
      $email = test_input($_POST["email"]);
      // Check if Email is in a good format
      if(!filter_var($email,FILTER_VALIDATE_EMAIL))
      {
        $errorEmail ="Invalid Email ";
      }
    }
 
?>