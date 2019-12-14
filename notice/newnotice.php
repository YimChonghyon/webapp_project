<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/newnotice.css" />
	<link rel="stylesheet" type="text/css" href="../resource/css/common.css" />
</head>
<body>
	<?php
	include "../resource/nav.php";
	?>
	<form action="registernotice.php" method="POST">
		<fieldset>
			<legend>&nbsp;공지사항 글쓰기&nbsp;</legend>
			<input type="hidden" name="name" value="<?=$_SESSION['name']?>" />
			<input id="title" type="text" name="title" placeholder="제목" /><br/>
			<textarea name="content" cols="40" rows="8" class="text"></textarea><br>
			<div id="buttons">
				<input type="submit" value="등록">
				<label><input id="check" type="checkbox" name="open" value="0">비공개</label>
			</div>
		</fieldset>
	</form>
</body>
</html>
