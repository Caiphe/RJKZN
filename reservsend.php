<?php 
$EmailFrom   = "RJ'S";
$destinataire = Trim( stripcslashes($_POST['destinataire']));
$destinataire .= ', marcdesign1@gmail.com';
$Subject   = "Message from RJ's Website Party Reservation Booking";
$expediteur  = Trim( stripslashes( $_POST['name']));
$email = Trim( stripslashes($_POST['email']));
$contact = Trim( stripcslashes($_POST['contact']));
$date = Trim( stripcslashes($_POST['default_datetimepicker']));
$num = Trim( stripslashes($_POST['num']));
$partytype = Trim( stripcslashes($_POST['partytype']));

// validation
  $validationOK = true;
  if ( !$validationOK ) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=reserverror.php\">";
  exit;
 }

// prepare email body text
$Body = "";
$Body .= "Name : ";
$Body .= $expediteur;
$Body .= "\n";
$Body .= "Contact No: ";
$Body .= $contact;
$Body .= "\n";
$Body .= "Email : ";
$Body .= $email;
$Body .= "\n";
$Body .= "Date & Time of the Party: ";
$Body .= $date;
$Body .= "\n";
$Body .= "Number of People : ";
$Body .= $num;
$Body .= "\n";
$Body .= "Party Type :";
$Body .= $partytype;
$Body .= "\n";

// send email 
$success = mail( $destinataire, $Subject, $Body, "From: Mr/Mme <$expediteur>" );

// redirect to success page 
if ( $success ) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=reservthanks.php\">";
} else {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=reserverror.php\">";
}
?>
