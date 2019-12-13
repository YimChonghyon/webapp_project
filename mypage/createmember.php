<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	header("Content-Type: text/html; charset=UTF-8");
	if(empty($_POST['id']) || empty($_POST['name'])){
		echo "<script>alert('There is a missing value.');";
		echo "window.history.back();</script>";
		exit();
	}

	include '../resource/DB_connect.php';
	$conn = connect();
	try{
		$sql = "insert into user values (:id,:password,:name,:type,NULL,NULL,NULL,NULL)";
		$stmt = $conn -> prepare($sql);
		$stmt ->bindValue(":id",$_POST['id']);
		$stmt ->bindValue(":password",password_hash($_POST['id'],PASSWORD_DEFAULT));
		$stmt ->bindValue(":name",$_POST['name']);
		$stmt ->bindValue(":type",$_POST['role']);
		$stmt ->execute();
		echo "<script>alert('This account has been successfully created.');
		window.history.back();</script>";
	} catch(PDOException $e){
		echo "<script>alert('ID creation failed.');";
		echo "window.history.back();</script>";
	}
	$conn = null;
} else{
	echo "<script>alert('The wrong approach.');";
	echo "window.location.replace('../index.php');</script>";
	exit();
}
?>