<?php
require_once "../scripts/email.php";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $headers = "From: ". $email;
 send_email("support@banff.ca", $email, "Feedback from ".$name, $message);
header("Location: ../contact.php");
exit();
?>
