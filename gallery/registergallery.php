<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	header("Content-Type: text/html; charset=UTF-8");
	$max_file_size = 5242880;

	if(empty($_POST['category']) || empty($_POST['title'])){
		echo "<script>alert('EMPTY');";
		echo "window.history.go(-1);</script>";
		exit;
	}
	if(!is_uploaded_file($_FILES['picture']['tmp_name'])){
		echo "<script>alert('NO PICTURE');";
		echo "window.history.go(-1);</script>";
		exit;
	}
	if($_FILES['picture']['size'] > $max_file_size){
		echo "<script>alert('USE UNDER 5MB FILES');";
		echo "window.history.go(-1);</script>";
		exit;
	}

	include '../resource/DB_connect.php';
	try {
		$conn = connect();
		$stmt = $conn->prepare("insert into Notice values (NULL,:type,:title)");
		$stmt -> bindValue(":type",$_POST['category']);
		$stmt -> bindValue(":title",$_POST['title']);
		$stmt->execute();
		$id = $conn->lastInsertId();	
		$tmp_file = $_FILES['picture']['tmp_name'];
		$file_path = 'img/'.$id;
		move_uploaded_file($tmp_file, $file_path);
		$conn = null;
		echo "<script>alert('Success');";
		echo "window.location.replace('gallery.php');</script>";
		exit;
	} catch (PDOException $e) {
		echo $e->getMessage();
		echo "<script>alert('error');";
		echo "window.location.replace('gallery.php');</script>";
		exit;
	}
} else{
	echo "<script>alert('Wrong approach');";
	echo "window.location.replace('../index.php');</script>";
	exit;
}
?>