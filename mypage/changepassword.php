<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['id'])) {
	header("Content-Type: text/html; charset=UTF-8");
	include '../resource/DB_connect.php';
	if(empty($_POST['CP']) || empty($_POST['NP'])){
		echo "<script>alert('There is a missing value.');";
		echo "window.history.back();</script>";
		exit();
	}
	if(verify_password($_POST['id'],$_POST['CP'])){
		echo "<script>alert('현재 비밀번호가 잘못되었습니다.');";
		echo "window.history.back();</script>";
		exit;
	}
	$conn = connect();
	try{
		$sql = "update user set Password = :password where id = :id";
		$stmt = $conn -> prepare($sql);
		$stmt ->bindValue(":id",$_POST['id']);
		$stmt ->bindValue(":password",password_hash($_POST['NP'],PASSWORD_DEFAULT));
		$stmt ->execute();
		echo "<script>alert('성공적으로 비밀번호가 변경되었습니다.');
		window.history.back();</script>";
	} catch(PDOException $e){
		echo "<script>alert('PROCESS failed.');";
		echo "window.history.back();</script>";
	}
	$conn = null;
} else{
	echo "<script>alert('The wrong approach.');";
	echo "window.location.replace('../index.php');</script>";
	exit();
}
?>