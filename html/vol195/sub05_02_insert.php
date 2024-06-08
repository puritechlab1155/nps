<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>계룡가왕</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "nps2022";
$password = "nps2022!@";
$dbname = "nps2022";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    $text1 = $_POST['text1'];
	$text2 = $_POST['text2'];
	$text3 = $_POST['text3'];
	$wip=$_SERVER['REMOTE_ADDR'];

	
//-->파일 업로드


$sql = "insert into quiz2(text1, text2, text3, wip, wdate) values ('$text1',  '$text2', '$text3', '$wip', now())";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<script>
alert("이벤트 참여가 완료 되었습니다.");
window.location="https://www.npswebzine.kr/html/vol195/sub05_02.php";
</script>

</body>
</html>