<?php
require_once "email.php";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $headers = "From: ". $email;
 send_email("support@banff.ca", $email, "Feedback from ".$name, $message) 
?>
