<?php
//get data from form  
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$company= $_POST['company'];
$jobtitle= $_POST['jobtitle'];
$to = "tyrone.taylor@kpmg.co.uk";
$subject = "Mail From Journey TO Cloud";
$txt ="FirstName = ". $firstname . "\r\n Lastname". $lastname  . "\r\n  Email = " . $email . "\r\n Number". $phone . "\r\n Company". $company . "\r\n Jobtitle" . $jobtitle;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>