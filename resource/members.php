<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<meta charset="utf-8" />
	<title>Software Engineering Lab - Courses</title>
	<!--[if IE]>
	<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="members.css" type="text/css" />
<script src="members.js"></script>
</head>

<body>
	<header role= "banner">
		<nav role= "navigation">
			<div id= "logo" class= "pull-left"><a href= ""><img src= "resource/images/selab_logo_S.png" /></a></div>

			<ul id= "menu" class= "inline-list" class= "pull-left">
				<li class="pull-left"><a href="resource/notice.php" >NOTICE</a></li> <!-- 해당 페이지로 이동 -->
				<li class="pull-left"><a href="resource/members.html" >MEMBERS</a></li>
				<li class="pull-left"><a href="resource/research" >RESEARCH</a></li>
				<li class="pull-left"><a href="resource/publications" >PUBLICATIONS</a></li>
				<li class="pull-left"><a href="resource/main_course.php" >COURSES</a></li>
				<li class="pull-left"><a href="resource/gallery" >GALLERY</a></li>
			</ul>
			<?php
			if(!isset($_SESSION['id']))
			echo '<div role= "login" class= "pull-right"><a href= "resource/login.php">LOGIN</a></div>';
			else{
			echo '<div role= "logout" class= "pull-right"><a href= "resource/logout.php">LOGOUT</a></div>';
			echo '<div role= "setting" class= "pull-right"><a href= "resource/setting.php">SETTING</a></div>';
		}
		?>

		<a id= "contact" href= "/contact" class= 'pull-right'>CONTACT</a>

	</nav>
</header>

<main role="main">
	<div class="container">
		<div class="contents">
			<h1>MEMBERS</h1>
			<div class="tab">
				<div class="first-tab" data-type="professor">Professor</div>
				<div class="deactive" data-type="phd">Ph.D.</div>
				<div class="deactive" data-type="me">M.E.</div>
				<div class="deactive" data-type="intern">Intern</div>
				<div class="last-tab" data-type="alumni">Alumni</div>
			</div>
		</div>
	</div>

	<div class="position">
		<h2>Professor</h2>
		<div class="human">
			<img class="photo" src="photos/scott.jpg" />
			<div id="info">
				<ul>
					<li class="name">Scott Uk-Jin Lee</li>
					<li>scottlee@hanyang.ac.kr</li>
					<li><a href="TBA" target="_blank">TBA</a></li>
					<li>an asst. prof. in the CSE Dept. @ HYU (ERICA)<br />leading this Laboratory!</li>
				</ul>
			</div>
			<div id="interest">
				<ul>
					<li>Career</li>
					<li>11 -      : Assistant Professor in CSE Dept. @ Hanyang University, Korea<br />
						09 - 11 : Postdoc @ CEA LIST, France <br />
						05 - 06 : SE Programmer in SE Dept. @ University of Auckland, NZ <br />
						04 - 04 : Visiting Researcher @ National University of Singapore<br />
						04 - 08 : Ph.D in Computer Science @ University of Auckland, NZ<br />
					00 - 03 : BE in Software Engineering @ University of Auckland, NZ </li>
				</ul>
			</div>
		</div>
	</div>

</main>

<footer role="contentinfo">
	<div class="container">
		<p>COPYRIGHT 2014 SELAB, ALL RIGHTS RESERVED. COMPUTER SCIENECE AND ENGINEERING, HANYANG UNIV. LOCATION: ENGINEERING BUILDING #3, ROOM 421. T +82-31-400-4754</p>
	</div>
</footer>

</body>
</html>
