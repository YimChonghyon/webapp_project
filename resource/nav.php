	<header role= "banner">
		<nav role= "navigation">
			<div id= "logo" class= "pull-left"><a href= "../index.php"><img src= "../resource/images/selab_logo_S.png" /></a></div>
			<ul class= "inline-list" class= "pull-left">
				<li class="pull-left nav-left"><a href="../notice/notice.php" >NOTICE</a></li> <!-- 해당 페이지로 이동 -->
				<li class="pull-left nav-left"><a href="../members/members.php" >MEMBERS</a></li>
				<li class="pull-left nav-left"><a href="../research/research.php" >RESEARCH</a></li>
				<li class="pull-left nav-left"><a href="../publications/publication.php" >PUBLICATIONS</a></li>
				<li class="pull-left nav-left"><a href="../courses/main_course.php" >COURSES</a></li>
				<li class="pull-left nav-left"><a href="../gallery/gallery.php" >GALLERY</a></li>
				<li class="pull-left nav-left"><a href="../DEBATE/debate.php" >DEBATE</a></li>
				<?php 
				session_start();
				if(!isset($_SESSION['id'])){ ?>
				<div role= "login" class= "pull-right nav-right"><a href= "../resource/login.php">LOGIN</a></div>
				<?php }else{ ?>
					<div role= "logout" class= "pull-right nav-right"><a href= "../resource/logout.php">LOGOUT</a></div>
					<div role= "setting" class= "pull-right nav-right"><a href= "../mypage/setting.php">SETTING</a></div>
				<?php } ?>
			</ul>
			<a id="pull" class="menubox" href="#"><img src="../resource/images/index_menu.png"></a>
		</nav>
	</header>
