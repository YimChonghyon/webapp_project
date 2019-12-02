<?php
session_start();
$title = $_POST['title'];
$name=$_SESSION['name'];
$content=$_POST['content'];
$conn = new PDO("mysql:host=localhost;dbname=selab", "root", "root");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
	$stmt = $conn->prepare("insert into Notice(Title,Name,Content) values (:title,:name,:content)");
	$stmt -> bindValue(":title",$title);
	$stmt -> bindValue(":name",$name);
	$stmt -> bindValue(":content",$content);
	$stmt->execute();
	$conn ->null;

} catch (PDOException $e) {
	echo $e->getMessage();
	header("Content-Type: text/html; charset=UTF-8");
	echo "<script>alert('뭐함?');";
	echo "window.location.replace('notice.php');</script>";
	exit;
}
?><meta http-equiv="refresh" content="0;url=notice.php" />