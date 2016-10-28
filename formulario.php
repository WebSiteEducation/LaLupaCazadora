<?php
$to = "marckoproducciones@gmail.com";
$subject = ($_POST['senderName']);
$phone = ($_POST['senderPhone']);
$empresa = ($_POST['senderPrice']);
$message = ($_POST['senderMsg']);
$message .= "\n\n--------\n";
$message .= "E-mail Sent From: " . $_POST['senderName'] . $_POST['senderPhone'] . $_POST['senderPrice'] . " <" . $_POST['senderEmail'] . ">\n";
$headers = "From: " . $_POST['senderEmail'] . " <" . $_POST['senderEmail'] . ">\n";
if(@mail($to, $subject, $message, $headers))
{
  echo "answer=ok";
}
else
{
  echo "answer=error";
}
?>