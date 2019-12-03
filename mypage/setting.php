<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/setting.css" />
	<link rel="stylesheet" type="text/css" href="../resource/css/common.css" />
</head>
<body>        
	<?php 
	include "../resource/nav.php";
	?>
	<div class="setting_title">
		<?php echo "<h1>안녕하세요 " . $_SESSION['name'] . "님</h1>"; ?>
	</div>

	<?php
	include "../resource/footer.php";
	?>
</body>
</html>