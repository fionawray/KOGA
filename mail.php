<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent ="From: $name \n Message: $message";
$recipient ="info@pindbodesign.dk";
$subject = "contact Form";
$mailheader="Hej fra info@pindbodesign.dk";
mail($recipient, $subject, $formcontent) or die ("Error!");
echo "Thank You!";
?>
