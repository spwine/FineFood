<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$company= $_POST['companyName'];

$to = "pongsakorn.wine@hotmail.com";
$subject = "Mail From FineFoodservice";
$txt ="Name = ". $name . "\r\n Company name = " . $company . "\r\n Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
//"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
