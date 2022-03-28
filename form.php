<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$company= $_POST['companyName'];

$to = "pongsakorn.wine@hotmail.com";
$subject = "Mail From FineFoodservice Contact form";
$txt ="Name = $name. \n".
        "Company name = $company. \n" .  
            "Email = $email. \n" .  
                "Message = $message \n";
$headers = "From: $email \r\n";
//"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:contact page.html");
}
//redirect

?>