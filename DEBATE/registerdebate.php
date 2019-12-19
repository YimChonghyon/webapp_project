<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	header("Content-Type: text/html; charset=UTF-8");

	if(empty($_POST['title']) || empty($_POST['content']) || empty($_POST['password'])){
		echo "<script>alert('EMPTY');";
		echo "window.history.back();</script>";
		exit;
	}
	echo $_POST['title'];
	if(empty($_POST['name']))
		$name = 'Anonymous';
	else
		$name = $_POST['name'];
	include '../resource/DB_connect.php';
	try {
		$conn = connect();
		$stmt = $conn->prepare("insert into debate(Title,Name,Content,Password) values (:title,:name,:content,:password)");
		$stmt -> bindValue(":title",$_POST['title']);
		$stmt -> bindValue(":name",$name);
		$stmt -> bindValue(":content",preg_replace('/\r\n|\r|\n/','<br/>',$_POST['content']));
		$stmt -> bindValue(":password",$_POST['password']);
		$stmt -> execute();
		$debateid = $conn->lastInsertId();

		$stmt_tag = $conn -> prepare("insert into debate_tag values (:id,:tag)");
		$stmt_tag -> bindValue(":id",$debateid);
		$stmt_tag -> bindParam(":tag",$tag);
		foreach ($_POST['tags'] as $key => $value) {
			$tag = $value;
			$stmt_tag->execute();
		}

		$conn = null;
		echo "<script>alert('Success');";
		echo "self.close();</script>";
		exit;
	} catch (PDOException $e) {
		echo $e->getMessage();
		echo "<script>alert('" . $e->getMessage() . "');";
		echo "self.close();</script>";
		exit;
	}
} else{
	echo "<script>alert('Wrong approach');";
	echo "self.close();</script>";
	exit;
}
?>