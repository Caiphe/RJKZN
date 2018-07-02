<!doctype html>
<html lang="en" class="no-js">
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link href="assets/css/animate.css" rel="stylesheet" />	
	<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color:red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
  box-shadow: -2px 4px 5px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: -2px 4px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: -2px 4px 5px 0px rgba(0,0,0,0.75);
}

#myBtn:hover {
  background-color: #FFF;
  color: red;
}
</style>
</head>
<button onclick="topFunction()" id="myBtn" title="Go to top" class="back-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>


<div style=""></div>

<script type="text/javascript">
  jQuery(document).ready(function() {
    var offset = 200;
    var duration = 700;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });
    
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});

</script>