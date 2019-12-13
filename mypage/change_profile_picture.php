<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['id']) && is_uploaded_file($_FILES['picture']['tmp_name'])){
	$max_file_size = 5242880;
	if($_FILES['picture']['size'] > $max_file_size){
		echo "<script>alert('USE UNDER 5MB FILES');";
		echo "window.location.replace('../index.php');</script>";
		exit();
	}
	$tmp_file = $_FILES['picture']['tmp_name'];
	$file_path = 'img/'.$_POST['id'];
	move_uploaded_file($tmp_file, $file_path);
	echo "<script>alert('SUCCESS');";
	echo "window.history.go(-1);</script>";
} else{
	echo "<script>alert('The wrong approach.');";
	echo "window.location.replace('../index.php');</script>";
	exit();
}
?>