<!DOCTYPE html>
<html lang="en">
<!--[endif]-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />    
    <title>NewsLetter</title>	
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/style.css" rel="stylesheet" />	
    <link href="assets/css/animate.css" rel="stylesheet" />	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js" type="text/javascript"></script>
    <script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
    <style type="text/css">
    form div{
    	margin: 5px auto;
    }
      #my{
         width: 50%;
      }
      #subject_error{
      	color: red;
      }

    </style>
</head>
<body>  
	
   <?php
       include('header.php');
   ?>
    <!--./ Top Menu End -->
    <!--./ Social Div End -->
   
	<div class="container" id="bigbody">
	<div class="container" id="my">
		<br><br><br>
   
		<br>
		<form   method="post" action="sendNews.php" onsubmit="return Validate()" name="vform">
			 <div class = "panel panel-success text-center" style="background-color:red;">
               <br>
               <h2 class = "panel-title" style="color:white;font-weight:bold;">SEND NEWSLETTER</h2>
               <br>       
        </div>
			<div>
				<input type="text" placeholder="Subject" name="subject"  class="form-control">
			</div>
			<div id="subject_error"class="val-error"></div>	
			<div>
                <textarea id="message" class="form-control" rows="7" placeholder="Type Your Message here..." name="message"></textarea>
			</div>
			<div id="subject_error" class="val_error" id="message_error"></div>
			<div>
				<button class="btn btn-success " type="submit" name="btn" id="btn"><i class="fa fa-send-o" style="font-size:20px">
        </i> SEND</button>
			</div>
			
		</form>
		<br><br><br>
		


		<br>
	 
	</div>
   </div>

	

	<?php
 include ('socialmedia.php');
?>
	   
    <!--./ footer-sec  End -->
    <div id="footser-end" style="background:black;">
		<div class="container">
		<div class="container-row" style="color:white;">
		  <div class="col-lg-12 col-md-12 col-sm-12">
		    <p style="text-align:center;">&copy; 2017 RJ's. All Right Reserved.</p>
		  </div>		  
		</div>
		<br>
    </div>
	</div>
   
    <script src="assets/js/bootstrap.js"></script>
     
   
</body>
</html>
<!--Adding My JavaScript-->
<script type="text/javascript">
   //Getting all the variables
   var subject = document.forms["vform"]["subject"];
   var message = document.forms["vform"]["message"];

   //Getting all Error Display Objects
   var subject_error = document.getElementById("subject_error");
   var message_error = document.getElementById("message_error");

   // Setting All Event Listeners
   subject.addEventListener("blur", subjectVerify, true);
   message.addEventListener("blur", messageVerify, true);

   // Validation Function
   function Validate(){
   	// Subject Validation
   	if(subject.value == ""){
   		subject.style.border = "1px solid red";
   		subject_error.textContent = "Subject is required";
   		subject.focus();
   		return false;
   	 }
   	 //Message Validation
   	 if(message.value == ""){
   	 	message.style.border = "1px solid red";
   	 	message_error.textContent = "Your message is required";
   	 	message.focus();
   	 	return false;
   	 }
   }
   //Event Handler Functions
   function subjectVerify(){
   	if(subject.value != ""){
       subject.style.border = "1px solid #5E6E66";
       subject_error.innerHTML = "";
       return true;
   	}
   }
   function messageVerify(){
   	if(message.value != ""){
   		message.style.border = "1px solid #5E6E66";
   		message_error.innerHTML = "";
        return true;
   	}
   }

</script>
