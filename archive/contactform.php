<!-- include your own success html here -->

<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">

function delayer(){
    window.location = "contactme"
}

</script>
</head>
<body onLoad="setTimeout('delayer()', 5000)">
<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "hello@lunwing.com";
    $email_subject = "Feedback from customer";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['your_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['about_you']) ||
        !isset($_POST['feedback'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $your_name = $_POST['your_name']; // required
    $email = $_POST['email']; // required
    $about_you = $_POST['about_you']; // not required
    $feedback = $_POST['feedback']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The email address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$your_name)) {
    $error_message .= 'The name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($feedback) < 2) {
    $error_message .= 'The comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Your Name: ".clean_string($your_name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "About You: ".clean_string($about_you)."\n";
    $email_message .= "Feedback: ".clean_string($feedback)."\n";
     
     
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 


?>
 
<h2>Thank you for contacting me. I will be in touch with you very soon.</h2>

</body>
</html>
<?php
}
?>