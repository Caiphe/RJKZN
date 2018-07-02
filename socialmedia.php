<?php
// prevent sql injections/ clear user invalid inputs
$email = trim($_POST['email']);
$email = strip_tags($email);
$email = htmlspecialchars($email);
$code = rand();
$subject = "Email Verification";
$message ="Thank You for Signing up
          Click on the link bellow to verify 
          http://www.aaaa.provincialdirectories.com/verify.php?email='.$email.'&code='.$code.'/";

 mail($email, $subject, $message, "From:RJ's newsletter verification");

?>

<html>
<head>
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/index.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">   
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">     
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
 <style type="text/css">
      
     #socialmedia i{font-size: 25px;text-align: center;}
     #socialmedia a {font-size: 30px;color: #dedede;text-align: center;}
     #face:hover{color: #3b5998;cursor: pointer;}
     #twit:hover{color:  #00b6f1;cursor: pointer; }
     #lin:hover{color: #007bb6;cursor: pointer;}
     #inst:hover{color:#f28096;cursor: pointer;}
     .error{color: white ;}


 </style> 
</head>
<!--u986567687-->
<!--0710545597gloria-->

  <div class="" style="background:red;"> 
    <br>
    <div class="container">
    <div class="row">
      
        <div class="col-md-6">
          <p style="color:white;font-size:21px;">Register For Our Customer NewsLetter</p>
          <form method="post" action="" name="news">
            <div class="form-group">
              <input type="email" name="email" id="email" class="from-control" required placeholder="&nbsp;&nbsp;Enter email for newsletter" style="width:50%;border-radius:5px;"  values="<?php echo $email; ?>">          
               <button type="submit"class="btn btn-info " name="news" id="news"><span class="glyphicon glyphicon-envelope"></span> Subscribe </button>
               
               <br>
              
            </div>
          </form>
        </div>
       
        <div class="col-md-6">
          <p style="font-weight:bold;font-size:23px;color:white;color:#1fa6f4;text-align:center">&nbsp;&nbsp;&nbsp;Follow Us</p>    
        <div id="socialmedia">
          <p style="text-align:center;">
          <a href="https://www.facebook.com/RJsKZN/" target="_blank"><i id="face" class="fa fa-facebook" aria-hidden="true"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="https://twitter.com/RJsKZN" target="_blank"><i id="twit" class="fa fa-twitter" aria-hidden="true"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="https://www.linkedin.com/feed/?trk=uno-reg-join-sign-in" target="_blank"><i id="lin"  class="fa fa-linkedin" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="https://www.instagram.com/rjskzn/" target="_blank"><i id="inst" class="fa fa-instagram" aria-hidden="true"></i></a>   
          </p>
      </div>
      <br><br>
      </div>
    </div>
    </div>
     </div>
     


