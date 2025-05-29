<?php
require "../scripts/db_connect.php";

$stars = $_POST['stars'];
$extra = '\''.$_POST['extra'].'\'';
$id = $_POST['id'];
$time = time();

$sql = 'INSERT INTO prd_reviews (STARS, EXTRA, TIME, PRD_ID) VALUES ('.$stars.','.$extra.','.$time.','.$id.')';
/* echo $sql; */
$result = $conn->query($sql);
header("Location: ../giftshop.php");
exit();
?>
