<?php
/*----------Contact Me Form ---------------*/
$errorMSG = "";
// COMPANY NAME
if (empty($_POST["feedback-name"])) {
    $errorMSG = "Mr.....? or Ms....? ";
    $fname = "";
} else {
    $fname = $_POST["feedback-name"];
}
// EMAIL
if (empty($_POST["feedback-email"])) {
    $errorMSG = "So how can I contact you? ";
    $femail ="";
} else {
    $femail = $_POST["feedback-email"];
    
}
// PERSON detail
if (empty($_POST["feedback-detail"])) {
    $errorMSG = "Nothing about you to tell?";
    $fdetail ="";
} else {
    $fdetail = $_POST["feedback-detail"];
}
// MESSAGE
if (empty($_POST["feedback-message"])) {
    $errorMSG = "Your thought is very important to me! ";
    $fmessage = "";
} else {
    $fmessage = $_POST["feedback-message"];
}

$EmailTo = "wing@lunwing.com";
$Subject2 = "I got a feedback! ";
// prepare email body text
$Body = "";
$Body .= "Contact person: ";
$Body .= $fname;
$Body .= "\n";
$Body .= "Contact Person's Email: ";
$Body .= $femail;
$Body .= "\n";
$Body .= "Contact Person's detail: ";
$Body .= $fdetail;
$Body .= "\n";
$Body .= "The feedback: ";
$Body .= $fmessage;
$Body .= "\n";
// send email
$success = mail($EmailTo, $Subject2, $Body, "From:".$femail);
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>