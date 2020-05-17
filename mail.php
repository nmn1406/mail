<?php
$otp=rand(1000,9999);
$subject=$_POST["subject"];;
$msg=$_POST["msg"].$otp;
$to=$_POST["reciever"];
mail($to,$subject,$msg,'From: agarwalnaman1406@gmail.com');
?>