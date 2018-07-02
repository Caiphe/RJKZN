
 <!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="" />
    <meta name="keywords" content="" />    
    <title>Kids_Party</title>   
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
    <?php
    include('flav.php');
    ?>

     <style type="text/css">
           #fill
           {
            font-weight: bold;
            color: red;
            font-size: 25px;
           }
           .error
           {
            color: red;
           }
           </style>
     <script type="text/javascript">
       $("#datetime").datetimepicker();
    </script>
 </head>
 <body>


    <?php
       include('header.php');
   ?>
 
         
<div class="container" id="bigbody">
   <div style="background:#e30c1b;">
    <div class="container">
    <br>
     <p class="animated flash" id="animatedFlash" style="text-align:center;font-size:30px;font-weight:bold;color:white;" >BOOK KIDS PARTY</p>
     <br></div></div>

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-6" id="formContent"> 
                <br><br>
                <p id="fill">Fill the form Below and Submit !!</p>
            
   
  
                 <form method="POST" id="btnsub" action="booksend.php" class="my">    
             <div class="form-group">                   
                    <label for="name">Name <span style="color:red;">*</span></label><br>
                    <input type="text" id="txtName" name="name" class="form-control" placeholder="Enter Name" style="width:60%;" required/>                   
             </div>
             <div class="form-group">
                    <label for="contact">Contact Number <span style="color:red;">*</span></label>
                    <input type="number" id="txtContact" name="contact" class="form-control" placeholder="Enter contact Number" style="width:60%;" required/>
             </div>     
                <div class="form-group">       
                    <label >Date / Time of The Party <span style="color:red;">*</span></label><br>
                    <input placeholder="YYYY / MM / DD  HH:MM " type="text" id="default_datetimepicker" required name="default_datetimepicker" class="form-control" style="width:60%;"/> 
                </div>       
               <div class="form-group">
                    <label >Select Party</label><br>
                    <select name="partytype" class="form-control" style="width:60%;" required>
                        <option value="">---Select Party Type---</option>
                        <option value="Rad Party #01">Rad Party #01</option>
                        <option value="Super Party #02">Super Party #02</option>
                    </select>
              </div>    
                   <div class="form-group">
                    <label >Nearest RJ's <span style="color:red;">*</span></label><br>
                    <select name="destinataire" id="destinataire" class="form-control" style="width:60%;" required>
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

                         <button class="btn btn-primary"  name="btnsub" type="submit" id="btnSubmit">SUBMIT</button>&nbsp;&nbsp;&nbsp;&nbsp;
                     <button class="btn btn-danger" type="reset" id="btnClose" >RESET</button> &nbsp;&nbsp;                  
              </form>

                   <div text="centre">
                    <br>
                    <p style="text-align:centre;"><h5 style="color:#011339;text-align:center;">PLEASE ENSURE THAT CONFIRMATION OF YOUR BOOKING IS RECEIVED <br>PRIOR TO 
                    ARRIVING AT THE RESTAURANT.</h5></p>
                    </div>
                   </div>
     
      <div class="col-lg-6 col-md-6 col-sm-6">
          <a href="#" class="thumbnail" style="background:transparent;color:transparent;border:solid 1px transparent;">
         <img src="assets/img/b.png">
          </a>
      </div>
  </div>
   </div>     

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

    </div>
        
    </div>

     <script src="assets/js/jquery-1.10.2.js"></script> 
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/custom.js"></script>
   
</body>
<script src="./jquery.js"></script>
<script src="build/jquery.datetimepicker.full.js"></script>
    
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
    
   
</html>
