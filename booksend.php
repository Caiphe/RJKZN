<?php 
$EmailFrom   = "RJ'S";
$destinataire = Trim( stripslashes($_POST['destinataire']));
///$destinataire = 'ksp.marketingsolutions@gmail.com';
$Subject   = "Message from RJ's Website Kid's Party Booking";
$expediteur  = Trim( stripslashes( $_POST['name']));
$contact = Trim( stripcslashes($_POST['contact']));
$date = Trim( stripcslashes($_POST['default_datetimepicker']));
$partytype = Trim( stripcslashes($_POST['partytype']));

// validation
  $validationOK = true;
  if ( !$validationOK ) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=bookerror.php\">";
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
$Body .= "Date & Time of the Party: ";
$Body .= $date;
$Body .= "\n";
$Body .= "Party Type :";
$Body .= $partytype;
$Body .= "\n";

// send email 
$success = mail( $destinataire, $Subject, $Body, "From: Mr/Mme <$expediteur>" );

// redirect to success page 
if ( $success ) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=bookthanks.php\">";
} else {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=bookerror.php\">";
}
?>
