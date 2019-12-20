<?php
include "../resource/DB_connect.php";
$conn = connect();
try{
$sql = "update debate set Wanted = Wanted + 1 where Debate_number = :id";
$stmt = $conn->prepare($sql);
$stmt -> bindValue(":id",$_GET['IND']);
$stmt -> execute();
} catch(PDOException $e){
	echo $e -> getMessage();
}
?>