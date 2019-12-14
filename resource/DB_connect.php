<?php
function connect(){
	try{
		$pdo = new PDO("mysql:dbname=selab", "root", "root");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		return $pdo;
	}
	catch (PDOException $e){
		echo $e->getMessage();
	}
}
function verify_password($id,$password){
	$conn = connect();
	$stmt = $conn->prepare("SELECT password FROM user where id = :id");
	$stmt -> bindValue(":id",$id);
	$stmt->execute();
	$result = $stmt->fetchAll();
	if(password_verify($password, $result[0]['password']))
		return false;
	else
		return true;
	$conn = null;
}

function tostringboolean($boolean,$true,$false){
	if($boolean === 1)
		return $true;
	else
		return $false;
}
?>