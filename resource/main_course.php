
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
<link rel="stylesheet" href="css/main_course.css" type="text/css" />

<script type="text/javascript" src="js/course_page.js"></script>
</head>

<body>
	<header role="banner">
		<div class="container">
			<nav role= "navigation">
				<div id= "logo" class= "pull-left"><a href= ""><img src= "images/selab_logo_S.png" /></a></div>

				<ul id= "menu" class= "inline-list" class= "pull-left">
					<li class="pull-left"><a href="resource/notice.php" >NOTICE</a></li>
					<li class="pull-left"><a href="resource/members" >MEMBERS</a></li>
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
		</div>
	</header>

	<main role="main">
		<div class="container">
			<div class="contents">
				<h1>COURSES</h1>

				<div id="tab">
					<div class="first-tab" data-tab="present"><input type="button" name="present" value = "present" /></div>
					<div class="second-tab" data-tab="undergradute"><input type ="button" name="undergraduate" value ="undergraduate" /></div>
					<div class="third-tab" data-tab="postgraduate"><input type ="button" name = "postgraduate" value = "postgraduate" /></div>
				</div>

				<div class= "mainbody">
					<div id="course_table">
						<table id ="first_table">
							<tr>
								<th class="coursenum" colspan="2">Present Courses</th>
							</tr>
							<tr>
								<td class="coursenum active" data-href="cse326">CSE326</td>
								<td class="course active" data-href="cse326"><a href="sub_course.html" class='selected'>Web Application Development</a></td>
							</tr>
							<tr>
								<td class="coursenum active" data-href="cse6050">CSE6050</td>
								<td class="course active" data-href="cse6050">Advanced Software Engineering</td>
							</tr>
						</table>
						<div id="over">
							<table id="second_table">
								<tr>
									<th>2019-2</th>
									<th>2019-1</th>
									<th>2018-1</th>
									<th>2017-2</th>
									<th>2017-1</th>
									<th>2016-2</th>
									<th>2016-1</th>
									<th>2015-2</th>
									<th>2015-1</th>
									<th>2014-2</th>
									<th>2014-1</th>
									<th>2013-2</th>
									<th>2013-1</th>
									<th>2012-2</th>
									<th>2012-1</th>
									<th>2011-2</th>
								</tr>
								<tr>
									<td><div class="circle"></div></td>
									<td></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><div class="circle"></div></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</table>
						</div>
					</div>

					<div id="course_table">
						<table id="first_table">
							<tr>
								<th class="coursenum" colspan="2">Undergraduate Courses</th>
							</tr>
							<tr>
								<td class="coursenum" data-href="cse107">CSE107</td>
								<td class="course" data-href="cse107">Logical Fundamentals of Programming</td>
							</tr>
							<tr>
								<td class="coursenum">CSE117</td>
								<td class="course">Programming Fundamentals</td>
							</tr>
							<tr>
								<td class="coursenum">CSE322</td>
								<td class="course">Web Programming</td>
							</tr>
							<tr>
								<td class="coursenum active" data-href="cse326">CSE326</td>
								<td class="course active" data-href="cse326">Web Application Development</td>
							</tr>
							<tr>
								<td class="coursenum" data-href="cse406">CSE406</td>
								<td class="course" data-href="cse406">Software Engineering</td>
							</tr>
						</table>
						<div id="over">
							<table id="second_table">
								<tr>
									<th>2019-2</th>
									<th>2019-1</th>
									<th>2018-1</th>
									<th>2017-2</th>
									<th>2017-1</th>
									<th>2016-2</th>
									<th>2016-1</th>
									<th>2015-2</th>
									<th>2015-1</th>
									<th>2014-2</th>
									<th>2014-1</th>
									<th>2013-2</th>
									<th>2013-1</th>
									<th>2012-2</th>
									<th>2012-1</th>
									<th>2011-2</th>
								</tr>
								<!--Logical-->
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
								</tr>
								<!--Programming Fundamentals-->
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><div class="circle"></div></td>
								</tr>
								<!--Web-->
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td></td>
								</tr>
								<!-- Web App -->
								<tr>
									<td><div class="circle"></div></td>
									<td></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<!--SE-->
								<tr>
									<td></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
								</tr>
							</table>
						</div>
					</div>


					<div id="course_table">
						<table id="first_table">
							<tr>
								<th class="coursenum" colspan="2">Postgraduate Courses</th>
							</tr>
							<tr>
								<td class="coursenum" data-href="cin870">CIN870</td>
								<td class="course" data-href="cin870">Formal Methods</td>
							</tr>
							<tr>
								<td class="coursenum" data-href="cse603">CSE603</td>
								<td class="course" data-href="cse603">Management of Semistructured Data</td>
							</tr>
							<tr>
								<td class="coursenum" data-href="cse609">CSE609</td>
								<td class="course" data-href="cse609">Model Checking</td>
							</tr>
							<tr>
								<td class="coursenum" data-href="cse639">CSE639</td>
								<td class="course" data-href="cse639">Special Topics in Software Engineering</td>
							</tr>
							<tr>
								<td class="coursenum active" data-href="cse6050">CSE6050</td>
								<td class="course active" data-href="cse6050">Advanced Software Engineering</td>
							</tr>
						</table>
						<div id="over">
							<table id="second_table">
								<tr>
									<th>2019-2</th>
									<th>2019-1</th>
									<th>2018-1</th>
									<th>2017-2</th>
									<th>2017-1</th>
									<th>2016-2</th>
									<th>2016-1</th>
									<th>2015-2</th>
									<th>2015-1</th>
									<th>2014-2</th>
									<th>2014-1</th>
									<th>2013-2</th>
									<th>2013-1</th>
									<th>2012-2</th>
									<th>2012-1</th>
									<th>2011-2</th>
								</tr>
								<!--Formal Methods-->
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td></td>
									<td></td>
									<td><div class="circle"></div></td>
								</tr>
								<!--Management of SemiData-->
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td><div class="circle"></div></td>
								</tr>
								<!-- Model Checking -->
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<!-- Special Topic SE -->
								<tr>
									<td></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td></td>
									<td><div class="circle"></div></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<!-- Advanced SE -->
								<tr>
									<td><div class="circle"></div></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>
	</main>
	<br />

	<footer role="contentinfo">
		<div class="container">
			<p>COPYRIGHT 2014 SELAB, ALL RIGHTS RESERVED. COMPUTER SCIENECE AND ENGINEERING, HANYANG UNIV. LOCATION: ENGINEERING BUILDING #3, ROOM 421. T +82-31-400-4754</p>
		</div>
	</footer>
</body>
</html>
