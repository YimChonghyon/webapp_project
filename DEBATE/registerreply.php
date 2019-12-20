<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	header("Content-Type: text/html; charset=UTF-8");

	if(empty($_POST['debate_id']) || empty($_POST['content']) || empty($_POST['password'])){
		echo "<script>alert('EMPTY');";
		echo "window.history.back();</script>";
		exit;
	}

	if(empty($_POST['name']))
		$name = 'Anonymous';
	else
		$name = $_POST['name'];
	include '../resource/DB_connect.php';
	try {
		$conn = connect();
		$stmt = $conn->prepare("insert into reply values (NULL,:number,:name,CURRENT_TIMESTAMP,:content,:password,0)");
		$stmt -> bindValue(":number",$_POST['debate_id']);

		$stmt -> bindValue(":name",$name);
		$stmt -> bindValue(":content",preg_replace('/\r\n|\r|\n/','<br/>',$_POST['content']));
		$stmt -> bindValue(":password",$_POST['password']);
		$stmt->execute();
		$conn = null;
		echo "<script>alert('Success');";
		echo "window.location.replace('debate.php');</script>";
		exit;
	} catch (PDOException $e) {
		echo $e->getMessage();
		echo "<script>alert('error');";
		echo "window.history.back();</script>";
		exit;
	}
} else{
	echo "<script>alert('Wrong approach');";
	echo "window.location.replace('debate.php');</script>";
	exit;
}
?>