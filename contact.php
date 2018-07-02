<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />    
    <title>Contact Us</title>	
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/style.css" rel="stylesheet" />	
    <link href="assets/css/animate.css" rel="stylesheet" />	
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
       
    <?php
    include('flav.php');
    ?>


    <style type="text/css">
     .error{
      color: red;
     }
    </style>
</head>
<body>  

   <!--Adding Header-->
   <?php
       include('header.php');
   ?>

   <div class="container" id="bigbody">
	<div style="background:#e30c1b;">
	<div class="container">
	<br>
	 <p class="animated flash" id="animatedFlash" style="text-align:center;font-size:30px;font-weight:bold;color:white;">CONTACT US</p>
	 <br>
	</div>
	</div>

	
<div class="container">
  <br><br>
<span style="font-size:30px;font-weight:bold;color:#e30c1b;">GET IN TOUCH</span><br><br>
<div class="row">	  
<div class="col-md-6">
<div class="iletisimform">

<form class="form" role="form" method="post" action="contsend.php">
    <div class="form-group">
      <div class="row">
        <div class="col-md-6">
    <label for="name">Name :</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your name" >
   
    </div>
    <div class="col-md-6">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" >
   
    </div>
  </div>
</div>

    <div class="form-group">
    <div class="row">
    <div class="col-md-6">
    <label for="subject">Contact No:</label>
    <input type="numbeer" class="form-control" name="contact" placeholder="Contact Number">
   
    </div>
     <div class="col-md-6">
    <label for="branch" ><strong>Nearest RJ's</strong></label><br>
   <select name="branch" id= "branch" class="form-control" >
      <option>-- Select Nearest RJ's Branch --</option>
      <option value="caipheilunga@gmail.com">Head Office</option>
      <option value="rjstoti@funland.co.za">Amanzimtoti (Kwa-Zulu Natal)</option>
      <option value="pmbrjs@gmail.com">Pietermaritzburg (Kwa-Zulu Natal)</option>
      <option value="rjshemmingways@telkomsa.net">Hemmingways (East London)</option>
      <option value="bassa192@gmail.com">Durban, Florida Road (Kwa-Zulu Natal)</option>  
      <option value="rjsdbnorth@mweb.co.za">Durban North, (Kwa-Zulu Natal)</option>        
      <option value="rjsumhlangabranch@gmail.com">Umhlanga,(Kwa-Zulu Natal)</option>  
      <option value="rjsgateway@gmail.com">Gateway,(Kwa-Zulu Natal)</option> 
      <option value="yaaseen@webmail.com">Laudium,(Gauteng)</option>       
    </select>
    
   
  </div></div>
</div>
  
  <div class="form-group">
  <label for="msg">Message:</label>
  <textarea class="form-control" rows="5" name="msg" placeholder="Type your message here.." style="heigt:200px;"></textarea>
  <br>
  <button class="btn btn-primary btn-lg" type="submit" name="submit" id="submit">SUBMIT</button>  
</div>
  </form>
  
</div>	
 </div>


<div class="col-md-6">
<div style="margin-left:40px;">
<p style="text-align:justify;font-size:15px;font-family: 'Open Sans', sans-serif;">
<span style="font-weight:bold">RJ'S Head Office </span><br>
Tel: 031 762 2789<br>
Email: rjs@rjskzn.co.za </p>

<p style="text-align:justify;font-size:15px;font-family: 'Open Sans', sans-serif;">
<span style="font-weight:bold">Managing Director</span><br>
Chucky<br>
<strong>Tel:</strong> 083 775 3955<br>
<strong>Email:</strong> chucky@rjskzn.co.za </p>

<p style="text-align:justify;font-size:15px;font-family: 'Open Sans', sans-serif;">
<span style="font-weight:bold">Operations Director</span><br>
Rani<br>
<strong>Tel:</strong> 083 775 3957 <br>
<strong>Email:</strong> rani@rjskzn.co.za<br><br>
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#bkparty">Book a Reservation</button>
</p>
</div></div>
</div>
<br>

<!--Reservation Form Modal -->
<div class="modal fade small" id="bkparty" data-keyboard="false" data-backdrop="static" tabindex="-1" >
                  <div class="modal-dialog" style="border-radius:25px;">
                     <div class="modal-content">
                       <div class="modal-header" style="background:#f2232b;">
                       <button class="close" data-dismiss="modal" style="color:white;font-size:30px;font-weight: bold;">&times;</button>
                       <p class="modal-title" style="text-align:center;color:white;font-weight:bold;font-size:30px;">Get in touch</p>
                       </div>
                       <div class="modal-body">

             <form method="POST" id="btnsub" action="reservsend.php" class="my">    
         <div class="form-group">
             <div class="row">
             <div class="col-md-6">
              <label for="name">Name : <span style="color:red;">*</span></label>
             <input type="text" class="form-control" name="name" placeholder="Enter your name" required> 
            </div>
            <div class="col-md-6">
            <label for="email">Contact No: <span style="color:red;">*</span></label>
            <input type="text" class="form-control" name="contact" placeholder="Enter Contect Number" required>   
            </div>
           </div>
       </div>
       <div class="form-group">
             <div class="row">
             <div class="col-md-6">
            <label for="email">Email: <span style="color:red;">*</span></label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" required >   
            </div>
            <div class="col-md-6">
            <label for="email">Number Of People <span style="color:red;">*</span></label>
            <input type="number" class="form-control" name="num" id="num" placeholder="Enter Number of People" required>   
            </div>
           </div>
       </div>
       <div class="form-group">
            <div class="row">
            <div class="col-md-6">    
            <label >Date / Time of The Party <span style="color:red;">*</span></label><br>
            <input placeholder="YYYY / MM / DD  HH:MM " type="text" id="default_datetimepicker" required name="default_datetimepicker" class="form-control" /> 
            </div>
            <div class="col-md-6">
            <label >Party Type <span style="color:red;">*</span></label>
            <select name="partytype" class="form-control"  required>
                <option value="">---Select Party Type---</option>
                <option value="Rad Party #01">Rad Party #01</option>
                <option value="Super Party #02">Super Party #02</option>
            </select>
            </div>
        </div>
           
       </div>
       <div class="form-group">
            <div class="row">        
             <div class="col-md-6">
            <label >Nearest RJ's <span style="color:red;">*</span></label>
                    <select name="destinataire" id="destinataire" class="form-control"  required>
                         <option>-- Select Nearest RJ's Branch --</option>
                         <option value="caipheilunga@gmail.com">Head Office</option>
                         <option value="rjstoti@funland.co.za">Amanzimtoti (Kwa-Zulu Natal)</option>
                         <option value="pmbrjs@gmail.com">Pietermaritzburg (Kwa-Zulu Natal)</option>
                         <option value="rjshemmingways@telkomsa.net">Hemmingways (East London)</option>
                         <option value="bassa192@gmail.com">Durban, Florida Road (Kwa-Zulu Natal)</option>  
                         <option value="rjsdbnorth@mweb.co.za">Durban North, (Kwa-Zulu Natal)</option>        
                         <option value="rjsumhlangabranch@gmail.com">Umhlanga,(Kwa-Zulu Natal)</option>  
                         <option value="rjsgateway@gmail.com">Gateway,(Kwa-Zulu Natal)</option> 
                         <option value="yaaseen@webmail.com">Laudium,(Gauteng)</option>     
                    </select>
            </div>
            <div class="col-md-6"></div>
           </div>
    </div>      
        <button class="btn btn-primary"  name="btnsub" type="submit" id="btnSubmit">SUBMIT</button>&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-danger" type="reset" id="btnClose" >RESET</button> &nbsp;&nbsp;                 
    </form>
    <hr>
        <div text="centre">
    <p style="text-align:centre;"><h4 style="color:red;font-family: 'Oswald', sans-serif;text-align:center;">Bookings aren’t valid till confirmed telephonically.</h4></p>
        </div>                 
      </div>                           
    </div>
</div>
               
<!-- Modal -->

 </div>
 </div>

 <div class="container">
  <div class="container-row">
  <br><br>
   <div class="col-lg-12">
	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4952059.580922473!2d20.10970176192857!3d-31.01049494358017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1c34a689d9ee1251%3A0xe85d630c1fa4e8a0!2sSouth+Africa!5e0!3m2!1sen!2sza!4v1492869645705" width="90%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
   </div>
  </div>
 </div>
       </div>
		<br><br><br>		
		
	<br>	
	
	
   <?php
    include ('scroll.php');
    ?>
  

  <?php
 include ('socialmedia.php');
?>
	   
    <!--./ footer-sec  End -->
    <div id="footser-end" style="background:black;">
        <br>
		<div class="container">
		<div class="container-row" style="color:white;">
		  <div class="col-lg-12 col-md-12 col-sm-12">
		    <p style="text-align:center;">&copy; 2017 RJ's. All Right Reserved.</p>
		  </div>		  
		</div>
		<br>
    </div>
	</div>
    <!--./ footer-end End -->
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
        <!--  Custom Scripts -->
    <script src="assets/js/custom.js"></script>
</body>
<script src="./jquery.js"></script>
<script src="build/jquery.datetimepicker.full.js"></script>
</html>
<script>/*
window.onerror = function(errorMsg) {
    $('#console').html($('#console').html()+'<br>'+errorMsg)
}*/

$.datetimepicker.setLocale('en');

$('#datetimepicker_format').datetimepicker({value:'2015/04/15 05:03', format: $("#datetimepicker_format_value").val()});
console.log($('#datetimepicker_format').datetimepicker('getValue'));

$("#datetimepicker_format_change").on("click", function(e){
    $("#datetimepicker_format").data('xdsoft_datetimepicker').setOptions({format: $("#datetimepicker_format_value").val()});
});
$("#datetimepicker_format_locale").on("change", function(e){
    $.datetimepicker.setLocale($(e.currentTarget).val());
});

$('#datetimepicker').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
startDate:  '1986/01/05'
});
$('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});

$('.some_class').datetimepicker();

$('#default_datetimepicker').datetimepicker({
    formatTime:'H:i',
    formatDate:'d.m.Y',
    //defaultDate:'8.12.1986', // it's my birthday
    defaultDate:'+03.01.1970', // it's my birthday
    defaultTime:'10:00',
    timepickerScrollbar:false
});

$('#datetimepicker10').datetimepicker({
    step:5,
    inline:true
});
$('#datetimepicker_mask').datetimepicker({
    mask:'9999/19/39 29:59'
});

$('#datetimepicker1').datetimepicker({
    datepicker:false,
    format:'H:i',
    step:5
});
$('#datetimepicker2').datetimepicker({
    yearOffset:222,
    lang:'ch',
    timepicker:false,
    format:'d/m/Y',
    formatDate:'Y/m/d',
    minDate:'-1970/01/02', // yesterday is minimum date
    maxDate:'+1970/01/02' // and tommorow is maximum date calendar
});
$('#datetimepicker3').datetimepicker({
    inline:true
});
$('#datetimepicker4').datetimepicker();
$('#open').click(function(){
    $('#datetimepicker4').datetimepicker('show');
});
$('#close').click(function(){
    $('#datetimepicker4').datetimepicker('hide');
});
$('#reset').click(function(){
    $('#datetimepicker4').datetimepicker('reset');
});
$('#datetimepicker5').datetimepicker({
    datepicker:false,
    allowTimes:['12:00','13:00','15:00','17:00','17:05','17:20','19:00','20:00'],
    step:5
});
$('#datetimepicker6').datetimepicker();
$('#destroy').click(function(){
    if( $('#datetimepicker6').data('xdsoft_datetimepicker') ){
        $('#datetimepicker6').datetimepicker('destroy');
        this.value = 'create';
    }else{
        $('#datetimepicker6').datetimepicker();
        this.value = 'destroy';
    }
});
var logic = function( currentDateTime ){
    if (currentDateTime && currentDateTime.getDay() == 6){
        this.setOptions({
            minTime:'11:00'
        });
    }else
        this.setOptions({
            minTime:'8:00'
        });
};
$('#datetimepicker7').datetimepicker({
    onChangeDateTime:logic,
    onShow:logic
});
$('#datetimepicker8').datetimepicker({
    onGenerate:function( ct ){
        $(this).find('.xdsoft_date')
            .toggleClass('xdsoft_disabled');
    },
    minDate:'-1970/01/2',
    maxDate:'+1970/01/2',
    timepicker:false
});
$('#datetimepicker9').datetimepicker({
    onGenerate:function( ct ){
        $(this).find('.xdsoft_date.xdsoft_weekend')
            .addClass('xdsoft_disabled');
    },
    weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
    timepicker:false
});
var dateToDisable = new Date();
    dateToDisable.setDate(dateToDisable.getDate() + 2);
$('#datetimepicker11').datetimepicker({
    beforeShowDay: function(date) {
        if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
            return [false, ""]
        }

        return [true, ""];
    }
});
$('#datetimepicker12').datetimepicker({
    beforeShowDay: function(date) {
        if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
            return [true, "custom-date-style"];
        }

        return [true, ""];
    }
});
$('#datetimepicker_dark').datetimepicker({theme:'dark'})


</script>

