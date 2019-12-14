<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	header("Content-Type: text/html; charset=UTF-8");

	if(empty($_POST['name']) || empty($_POST['title']) || empty($_POST['content'])){
		echo "<script>alert('EMPTY');";
		echo "window.history.back();</script>";
		exit;
	}

	include '../resource/DB_connect.php';
	try {
		$conn = connect();
		$stmt = $conn->prepare("insert into Notice(Title,Name,Content,Open) values (:title,:name,:content,:open)");
		$stmt -> bindValue(":title",$_POST['title']);
		$stmt -> bindValue(":name",$_POST['name']);
		$stmt -> bindValue(":content",$_POST['content']);
		$stmt -> bindValue(":open",$_POST['open']);
		$stmt->execute();
		$conn ->null;
		echo "<script>alert('Success');";
		echo "window.location.replace('notice.php');</script>";
		exit;
	} catch (PDOException $e) {
		echo $e->getMessage();
		echo "<script>alert('error');";
		echo "window.location.replace('notice.php');</script>";
		exit;
	}
} else{
	echo "<script>alert('Wrong approach');";
	echo "window.location.replace('notice.php');</script>";
	exit;
}
?>