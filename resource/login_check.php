<?php
if (empty($_POST['id']) || empty($_POST['password']) ) {
	header("Content-Type: text/html; charset=UTF-8");
	echo "<script>alert('아이디 또는 비밀번호가 빠졌거나 잘못된 접근입니다.');";
	echo "window.location.replace('login.php');</script>";
	exit;
}
$id=$_POST['id'];
$password=$_POST['password'];
include "DB_connect.php";
$conn = connect();
$stmt = $conn->prepare("SELECT name,privilege FROM user natural join user_type where id = :id");
$stmt -> bindValue(":id",$id);
$stmt->execute();
$result = $stmt->fetchAll();
if(verify_password($id,$password)){
	header("Content-Type: text/html; charset=UTF-8");
	echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다.');";
	echo "window.location.replace('login.php');</script>";
	exit;
}
session_start();
$_SESSION['id']=$id;
$_SESSION['name']=$result[0]['name'];
$_SESSION['privilege']=$result[0]['privilege'];
$conn = null;  // disconnect db
?>
<meta http-equiv="refresh" content="0;url=../index.php" />