<?php
$to = "thedobuds@gmail.com";
$name = $_POST['name'];
$subject = "RSVP";
$message = $name . " wrote the following: " . "\n\n" . $_POST['message'] . "\n\n" . $_POST['email'] . "\n\n" . "Number of guests: " . $_POST['guests'] . "\n\n" . "Will you be coming: " . $_POST['rsvp'];
$headers = "From: no-reply@mage-themes.com"."\r\n" . "Reply-To: ".$_POST['email']."\r\n"."To: thedobuds@gmail.com\r\n";
mail($to, $subject, $message, $headers);
?>