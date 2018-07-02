<?php
$From = "RJ's Website Party Booking" 
$destinataire = Trim( stripcslashes($_POST['destinataire']));
$subject  = "Kid's Party Booking";
$expediteur = Trim ( stripcslashes($_POST[ 'name' ]));
$contact = Trim ( stripcslashes($_POST[ 'contact' ]));
$date_Time = Trim ( stripcslashes($_POST[ 'default_datetimepicker' ]));
$partytype = Trim ( stripcslashes($_POST[ 'partytype' ]));


// Validation
$validationOK = true;
if( !$validationOK){
	print "<meta http-equiv=\"refresh\" content=\"0;URL.error.html\">";
	exit;
}

// Prepare The Email Body Text
$Body = "";
$Body .= "name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "contact: ";
$Body .= $contact;
$Body .= "\n";
$Body .= "Date and Time: ";
$Body .= $date_Time;
$Body .= "\n";
$Body .= "Party Type: ";
$Body .= $partytype;

//Send Email
$success = mail ($destinataire, $subject, $Body, "From: Mr/Mm <$name>");

// Redirect To Success Page
if($success){
	print "<meta http-equiv=\"refresh\" content=\"0;URL=contthanks.php\">"
}else
{
	print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}


?>