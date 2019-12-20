<?php
include "../resource/DB_connect.php";
$conn = connect();
try{
$sql = "update reply set Likes = Likes + 1 where Reply_number = :id";
$stmt = $conn->prepare($sql);
$stmt -> bindValue(":id",$_GET['IND']);
$stmt -> execute();
} catch(PDOException $e){
	echo $e -> getMessage();
}
?>