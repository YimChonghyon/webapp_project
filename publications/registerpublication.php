<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	header("Content-Type: text/html; charset=UTF-8");
	
	if(empty($_POST['category']) || empty($_POST['title']) || empty($_POST['url'])){
		echo "<script>alert('EMPTY');";
		echo "window.history.back();</script>";
		exit;
	}

	include '../resource/DB_connect.php';
	try {
		$conn = connect();
		$stmt = $conn->prepare("insert into publications values (NULL,:type,:title,:url)");
		$stmt -> bindValue(":type",$_POST['category']);
		$stmt -> bindValue(":title",$_POST['title']);
		$stmt -> bindValue(":url",$_POST['url']);
		$stmt->execute();
		$conn = null;
		echo "<script>alert('Success');";
		echo "window.location.replace('publication.php');</script>";
		exit;
	} catch (PDOException $e) {
		echo "<script>alert('error');";
		echo "window.location.replace('publication.php');</script>";
		exit;
	}
} else{
	echo "<script>alert('Wrong approach');";
	echo "window.location.replace('../index.php');</script>";
	exit;
}
?>