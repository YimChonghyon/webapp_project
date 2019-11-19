<?php
if ( !isset($_POST['id']) || !isset($_POST['password']) ) {
	header("Content-Type: text/html; charset=UTF-8");
	echo "<script>alert('아이디 또는 비밀번호가 빠졌거나 잘못된 접근입니다.');";
	echo "window.location.replace('login.php');</script>";
	exit;
}
$id=$_POST['id'];
$password=$_POST['password'];
$conn = new PDO("mysql:host=localhost;dbname=selab", "root", "root");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT password FROM client where id = :id");
$stmt -> bindValue(":id",$id);
$stmt->execute();
$result = $stmt->fetchAll();	
if($result[0]['password'] != $password){
	header("Content-Type: text/html; charset=UTF-8");
	echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다.');";
	echo "window.location.replace('login.php');</script>";
	exit;
}
session_start();
$_SESSION['id']=$id;
$conn = null;  // disconnect db
?>
<meta http-equiv="refresh" content="0;url=../index.php" />