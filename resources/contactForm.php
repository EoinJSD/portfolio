<?php

if (isset($_POST['email_address'])){
  $email_to = "eoinjsd@hotmail.com";
  $email_subject = "EOINJSD Portfolio Contact Form Submit";

  function died($error){
    //error for below validations
    echo "We are very sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear below.<br /><br />";
    echo $error."<br \><br \>";
    echo "Please edit the submitted data";
    die();
  }

  //validation expected data exists
  if (!isset($_POST['full_name']) || !isset($_POST['email_address']) || !isset($_POST['message'])){
    died('We are sorry, but there appears to be a problem with the form you submitted.');
  }

  $name   = $_POST['full_name'];
  $email  = $_POST['email_address'];
  $msg    = $_POST['message'];

  $errMsg = "";

  $mailFormat = "[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}";
  if(!preg_match($mailFormat,$email)){
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }

  $string_exp = "[A-Za-z .'-]+$";
  if(!preg_match($string_exp,$name)){
    $error_message .= 'The name you entered does not appear to be valid.<br />';
  }

  if(strlen($msg) < 2){
    $error_message .= 'The message you entered does not appear to be valid.<br />';
  }

  //if error message is empty
  if(strlen($error_message) > 0) {
    died($error_message);
  }

  $email_message = "Form details below./n/n";

  function cleanString($string){
    $bad = arrayrray("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
  }

  $email_message .= "Name: ".cleanString($name)."\n";
  $email_message .= "Email Address: ".cleanString($email)."\n";
  $email_message .= "Message: ".cleanString($msg)."\n";

  // create email headers
  $headers = 'From: '.$email."\r\n" . 'Reply-To: '.$email."\r\n" . 'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, $msg, $headers); 
?>
 
<!-- include your own success html here -->
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
}
?>
