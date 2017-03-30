<?php 
if (isset($_POST["submit"])){
$company = $_POST['company'];
$yourname = $_POST['yourname'];
$email = $_POST['email'];
$role=$_POST['role'];

$formcontent="From: $name \n 
              Company: $company  \n 
              Name:$yourname  \n
              Email:$email  \n
              role:$role";
$recipient = "wing@lunwing.com";
$subject = "Someone want to hire me";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
}
?>

