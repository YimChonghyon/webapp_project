<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="newnotice.css" />
</head>
<body>
	<form action="registernotice.php" method="post">
		<fieldset>
		<legend>&nbsp;공지사항 글쓰기&nbsp;</legend>
		<input id="title" type="text" name="title" placeholder="제목"><br/>
		<div class="text">
			<textarea name="content" cols="40" rows="8"></textarea><br>
		</div>
		<div id="buttons">
			<input type="submit" name="" value="등록">
			<input id="check" type="checkbox" name="open" value="1">공개
		</div>
		</fieldset>
	</form>
</body>
</html>
