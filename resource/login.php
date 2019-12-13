<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/login.css"/>
	<script src="../common/scripts/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../common/script/login.js" type="text/javascript"></script>
	<title>Software Engineering Lab - Login</title>
</head>
<body>
	<div id="wrap">
		<header>
			<h1>LOGIN</h1>
		</header>
		<content>
			<?php if(!isset($_SESSION['id'])) {?>
			<form method="post" action="login_check.php">
				<input id="idform" class="textfield" type="text" name="id" placeholder= "Username"/>
				<div class="login_icon" id="usericon"></div>

				<input class="textfield" type="password" name="password" placeholder = "Password"/>
				<div class="login_icon" id="passwdicon"></div>

				<input id="submit_button" type="submit" value="login"/>
				<input type="hidden" name="source" value="/courses/cse326/2019/index.php"> 
			</form>
		<?php } else {
			$user_id = $_SESSION['id'];
			$user_name = $_SESSION['name'] ?>
			<p><strong><?=$user_name?></strong>(<?=$user_id?>)님은 이미 로그인하고 있습니다. </p>
			<a href="index.php">[돌아가기]</a>
			<a href="logout.php">[로그아웃]</a></p>
		<?php } ?>
	</content>
</div>
</body>
</html>