<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['id'])) {
	header("Content-Type: text/html; charset=UTF-8");

	include '../resource/DB_connect.php';
	$conn = connect();
	try{

		$sql = "delete from notice where Number = :id";
		$stmt = $conn -> prepare($sql);
		$stmt ->bindValue(":id",$_POST['id']);
		$stmt ->execute();
		echo "<script>alert('SUCCESS');";
		echo "window.history.back();</script>";
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