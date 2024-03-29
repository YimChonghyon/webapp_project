
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Software Engineering Lab - Courses</title>
	<link rel="stylesheet" href="css/main_course.css" type="text/css" />
	<link rel="stylesheet" href="../resource/css/common.css" type = "text/css" />
	<script type="text/javascript" src = "js/main_course.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js" type="text/javascript"></script>

</head>

<body>
	<?php
	include "../resource/nav.php";
	?>

	<div class="contents">
		<div class = "main_section">
			<h1>COURSES</h1>
		</div>
		<div class = "tab_class">
			<div id="tab">
				<button id = "presentss" onclick = "presentss()">Present</button><br />
				<button id = "undergraduate" onclick = "undergraduate()">Undergraduate</button><br />
				<button id = "postgraduate" onclick = "postgraduate()">Postgraduate</button>
			</div>

				<div id = "present_course" style = "display:none">
					<div id="course_table">
						<table id ="first_table">
							<tr>
								<th class="coursenum" colspan="2">Present Courses</th>
							</tr>
							<tr>
								<td class="coursenum_active" data-href="cse326">CSE326</td>
								<td class="course_active" data-href="cse326" onclick = "location.href='sub_course.php'">Web Application Development</td>
							</tr>
							<tr>
								<td class="coursenum_active" data-href="cse6050">CSE6050</td>
								<td class="course_active" data-href="cse6050">Advanced Software Engineering</td>
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
				</div>

				<div id ="undergraduate_course" style = "display:none">
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
								<td class="coursenum_active" data-href="cse326">CSE326</td>
								<td class="course_active" data-href="cse326" onclick = "location.href='sub_course.php'">Web Application Development</td>
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
				</div>

				<div id ="postgraduate_course" style = "display:none">
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
								<td class="coursenum_active" data-href="cse6050">CSE6050</td>
								<td class="course_active" data-href="cse6050">Advanced Software Engineering</td>
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
	<?php
	include "../resource/footer.php";
	?>

</body>
</html>
