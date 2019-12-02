<?php 
session_start();
if(!isset($_SESSION['id']))
	echo '<div role= "login" class= "pull-right nav-right"><a href= "../resource/login.php">LOGIN</a></div>';
else{
	echo '<div role= "logout" class= "pull-right nav-right"><a href= "../resource/logout.php">LOGOUT</a></div>';
	echo '<div role= "setting" class= "pull-right nav-right"><a href= "../resource/setting.php">SETTING</a></div>';
}
?>