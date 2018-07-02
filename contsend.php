<?php 
$EmailFrom   = "RJ'S";
$destinataire= Trim( stripslashes($_POST['branch']));
$destinataire .= " ,marcdesignb1@gmail.com";
$Subject   = "Message from RJ's Website Contact Us";
$name  = Trim( stripslashes( $_POST[ 'name' ] ) );
$email     = Trim( stripslashes( $_POST[ 'email' ] ) );
$contact = Trim( stripslashes($_POST['contact']));
$Message   = Trim( stripslashes( $_POST[ 'msg' ] ) );

if(empty($_POST['name']) || empty($_POST['contact']) || empty($_POST['branch']) || empty($_POST['msg']))
{
	?>
        <script>
            Javascript:alert('Please fill up the Required fields !!!');
            document.location.replace("contact.php");
        </script>
	<?php
}else{

// validation
  $validationOK = true;
  if ( !$validationOK ) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=conterror.php\">";
  exit;
 }

// prepare email body text
$Body = "";
$Body .= "Name : ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Contact No: ";
$Body .= $contact;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail( $destinataire, $Subject, $Body, "From: Mr/Mme <$name>" );

// redirect to success page 
if ( $success ) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contthanks.php\">";
   } else {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=conterror.php\">";
   }
 }
?>
