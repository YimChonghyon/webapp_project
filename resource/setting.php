<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/setting.css">
</head>
<body>        
	<header role= "banner">
		<nav role= "navigation">
			<div id= "logo" class= "pull-left"><a href= ""><img src= "common/image" /></a></div>

			<ul id= "menu" class= "inline-list" class= "pull-left">
				<li class="pull-left"><a href="resource/notice.php" >NOTICE</a></li> <!-- 해당 페이지로 이동 -->
				<li class="pull-left"><a href="resource/members" >MEMBERS</a></li>
				<li class="pull-left"><a href="resource/research" >RESEARCH</a></li>
				<li class="pull-left"><a href="resource/publications" >PUBLICATIONS</a></li>
				<li class="pull-left"><a href="resource/courses" >COURSES</a></li>
				<li class="pull-left"><a href="resource/gallery" >GALLERY</a></li>
			</ul>
			<?php
			if(!isset($_SESSION['id'])){	
				echo "<script>alert('어케 들어옴? 나가!');</script>"; ?>
				<meta http-equiv="refresh" content="0;url=../index.php" />
				<?php
			}
			else{
				echo '<div role= "logout" class= "pull-right"><a href= "logout.php">LOGOUT</a></div>';
				echo '<div role= "setting" class= "pull-right"><a href= "setting.php">SETTING</a></div>';
			}
			?>
			<a id= "contact" href= "/contact" class= 'pull-right'>CONTACT</a>

		</nav>
	</header>
	<div class="setting_title">
		<?php echo "<h1>안녕하세요 " . $_SESSION['name'] . "님</h1>"; ?>
	</div>
</body>
</html>