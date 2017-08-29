<?php
/*----------Hire Me Form ---------------*/
$errorMSG = "";
// COMPANY NAME
if (empty($_POST["company-name"])) {
    $errorMSG = "Who am I working for...?";
    $companyname = "";
} else {
    $companyname = $_POST["company-name"];
}
// PERSON NAME
if (empty($_POST["person-name"])) {
    $errorMSG = "You are  Mr.....? or Ms....? ";
    $name ="";
} else {
    $name = $_POST["person-name"];
}
// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Oops. So how can I contact you? ";
    $email ="";
} else {
    $email = $_POST["email"];
    
}
// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Role detail is required ";
    $message = "";
} else {
    $message = $_POST["message"];
}

$EmailTo = "wing@lunwing.com";
$Subject = "Somebody Offer Me A Job! ";
// prepare email body text
$Body = "";
$Body .= "Company Name: ";
$Body .= $companyname;
$Body .= "\n";
$Body .= "Contact Person's Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "About the role: ";
$Body .= $message;
$Body .= "\n";
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
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