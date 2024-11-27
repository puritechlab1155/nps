<?php
// config.php
$vol_idx = "200"; // kruddo modify - 호차 번호. 191호가 아닌경우 변경, inc/like_share.php 에서도 변경
$hostname = "localhost";
$username = "nps2022";
$password = "nps2022!@";
$database = "nps2022";

$connect = mysqli_connect($hostname, $username, $password, $database);
mysqli_select_db($connect, $database) or die('DB 선택 실패');
$current_ip = $_SERVER['REMOTE_ADDR'];
$current_device = $_SERVER['HTTP_USER_AGENT'];
?>