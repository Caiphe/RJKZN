<html>
<head>
<title>Error</title>
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
<link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 
  <?php
     include('flav.php');
     ?>

<style type="text/css">
 #big{width: 40%;border-radius: 40px;}
 #text{ text-align: center;font-size:20px;}
 #warn{-webkit-animation-duration:2s;-webkit-animation-iteration-count:infinite;}
</style>
</head>
<body>
  <div class="container" id="big">
    <br><br> 
      <div class="alert alert-danger" role="alert" style="text-align:center;">
       <i class="fa fa-warning" id="warn" style="color:#ec1d1d;font-size:40px;"></i><br>
        There's a problem. Your Reservation Booking wasn't done !!! <br>
       
      </div>
      <p  id="text">
         <a href="contact.php" class="btn btn-danger btn-lg">Back &nbsp;</i></a>
         <a href="index.php" class="btn btn-success btn-lg">Home &nbsp;<i class="fa fa-home"></i></a>
       <br>
      <br>
      
    </p>
    <br><br>
  </div>

</body>
</html>