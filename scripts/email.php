<?php
require_once("Mail.php"); // PEAR
$email_host = "192.168.101.58";
$email_port = 1025;
function send_email($to, $from, $subject, $body) {
    global $email_host, $email_port;
    $smtp = Mail::factory('smtp', array(
        'host' => $email_host,
        'port' => $email_port,
        'auth' => false,
    ));
    $headers = array(
        'From' => $from,
        'To' => $to,
        'Subject' => $subject,
    );
    $mail = $smtp->send($to, $headers, $body);
    if (PEAR::isError($mail)) {
        throw $mail->getMessage();
    }
}
?>
