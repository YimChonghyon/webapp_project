<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="registernotice.php" method="post">
		제목:<input type="text" name="title">
		<textarea name="content" cols="40" rows="8" ></textarea>
		<input type="checkbox" name="open" value="1"> 공개여부
		<input type="submit" name="" value="등록~">
	</form>
</body>
</html>