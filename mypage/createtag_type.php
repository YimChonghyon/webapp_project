<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	header("Content-Type: text/html; charset=UTF-8");

	include '../resource/DB_connect.php';
	$conn = connect();
	if(empty($_POST['TYPE'])){
		echo "<script>alert('EMPTY');";
		echo "window.history.back();</script>";
		exit();
	}
	try{
		$sql = "insert into tag values (:type)";
		$stmt = $conn -> prepare($sql);
		$stmt ->bindValue(":type",$_POST['TYPE']);
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