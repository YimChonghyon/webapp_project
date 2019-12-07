
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Software Engineering Lab - Courses: Web Application Development</title>
	<!--[if IE]>
	<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="css/sub_course.css" type="text/css" />
	<link rel="stylesheet" href="../resource/css/common.css" type = "text/css" />
	<script type="text/javascript" src="js/sub_course.js"></script>

</head>

<body>
	<?php
	include "../resource/nav.php";
	?>
			<div class="contents">
			<div class ="mainphoto">
				<h1>Web Application Development</h1>
			</div>
			<div class = "tab_class">
				<div id="tab">
					<button id = "home" onclick = home()>Home</button><br />
					<button id = "slide_button" onclick = slide_button()>Slides</button><br />
					<button id = "debate" onclick = debate()>Debate</button>
				</div>
<div class="mainbody">
	<div id="home">
  <div class="wrap-subcontent">
    <h3>Course Objectives</h3>
    <p1>
      In this course, the followings will be covered to adequately enable web programming and web application development:
		</p1>
		<br />
    <ol>
  		<li>Understand the protocols, language  and systems used on the Web (HTML, CSS, HTTP, URLs, XML)</li>
  		<li>Understand the functions of clients and servers on the Web &amp; learn how to implement client-side scripts (JavaScript) and server-side scripts (PHP)</li>
  		<li>Obtain ability to design and implement an interactive web site where usability, accessibility and internationalization issues are considered</li>
  		<li>Learn how to use/manage database associated with web applications (mainly storage and retrieval)</li>
    </ol>
  </div>

  <div class="wrap-subcontent">
    <h3>Lecturer: Scott Lee</h3>
    <ul>
      <li>Office: 학연산클러스터 617호</li>
      <li>Tel: 031-400-5238</li>
      <li>Email: scottlee@hanyang.ac.kr</li>
    </ul>
  </div>

  <div class="wrap-subcontent">
    <h3>Teaching Assistants</h3>
	<ul>
    <li> Gichan Lee
      <ul>
        <li>Office: 학연산클러스터 621호</li>
        <li>Tel: 031-400-4754</li>
        <li>Email: <a href="mailto:fantasyopy@gmail.com">fantasyopy@gmail.com</a></li>
      </ul>
    </li>
    <li> HakJin Lee
      <ul>
        <li>Office: 학연산클러스터 621호</li>
        <li>Tel: 031-400-4754</li>
        <li>Email: <a href="mailto:gsdjini91@gmail.com">gsdjini91@gmail.com</a></li>
      </ul>
    </li>
  </ul>
  </div>

  <div class="wrap-subcontent">
    <h3>Places &amp; Dates</h3>
    <p1>Class 1 (23497)</p1>
			<ul>
				<li>Lecture : Thu (09:00 - 10:30) &amp; Fri (13:00 - 14:30) @ Engineering Building #1 Room 402</li>
		    <li>Lab : Fri (09:00 - 11:00) @ Engineering Building #4 PC Room 1 & 2</li>
		  </ul>
    <p1>Class 2 (24465)</p1>
	 		<ul>
	    	<li>Lecture : Thu (10:30 - 12:00)  &amp; Fri (14:30 - 16:00) @ Engineering Building #1 Room 407</li>
	    	<li>lab : Fri (16:00 - 18:00) @ Engineering Building #4 PC Room 1 & 2 </li>
    	</ul>
  </div>

  <div class="wrap-subcontent">
    <h3>Course Forum</h3>
    <ul>
      <li><a href="https://learn.hanyang.ac.kr">Blackboard</a></li>
    </ul>
  </div>

  <div class="wrap-subcontent">
    <h3>Textbooks</h3>
    <ul>
      <li>Marty Stepp, Jessica Miller, Victoria Kirst, <strong>Web Programming Step by Step: Second Edition</strong>, Step by Step Publishing, 2012 </li>
    </ul>
  </div>

  <div class="wrap-subcontent">
    <h3>Course Schedule</h3>
	<ul>
	<li>Week 01 : 05/09/2019 - Introduction &amp; The Internet and World Wide Web</li>
    <li>Week 01 : 06/09/2019 - Basic HTML</li>
    <li>Week 02 : 12/09/2019 - No Lecture (추석 Thanksgiving)</li>
    <li>Week 02 : 13/09/2019 - No Lecture (추석 Thanksgiving)</li>
    <li>Week 03 : 19/09/2019 - Basic HTML</li>
    <li>Week 03 : 20/09/2019 - CSS for Styling </li>
    <li>Week 04 : 26/09/2019 - CSS for Styling</li>
    <li>Week 04 : 27/09/2019 - Page Layout </li>
    <li>Week 05 : 02/10/2019 - [특강] 게임 서버 개발 - 17:00 ~ 19:00 @제1학술관 101호 (supplementary lecture for 03/10/2019) </li>
    <li>Week 05 : 03/10/2019 - No Lecture (National Foundation Day) - supplementary lecture 02/10/2019</li>
    <li>Week 05 : 04/10/2019 - Page Layout </li>
    <li>Week 06 : 10/10/2019 - Basic PHP</li>
    <li>Week 06 : 11/10/2019 - Basic PHP</li>
    <li>Week 07 : 17/10/2019 - Basic PHP </li>
    <li>Week 07 : 18/10/2019 - Forms</li>
    <li>Week 08 : 24/10/2019 - Mid-Term Exam Preparation</li>
    <li>Week 08 : 25/10/2019 - Mid-Term Exam 13:00 ~ 16:00 @제1학술관 101호 (Educational Building I Room 101) & 4공학관 PC1실 (Engineering Building IV PC Room 1)</li>
    <li>Week 09 : 31/10/2019 - Forms</li>
    <li>Week 09 : 01/11/2019 - Forms</li>
    <li>Week 10 : 07/11/2019 - Relational Database &amp; SQL</li>
    <li>Week 10 : 08/11/2019 - Relational Database &amp; SQL</li>
    <li>Week 11 : 14/11/2019 - Relational Database &amp; SQL</li>
    <li>Week 11 : 15/11/2019 - JavaScript</li>
    <li>Week 12 : 21/11/2019 - JavaScript</li>
    <li>Week 12 : 22/11/2019 - DOM</li>
    <li>Week 13 : 28/11/2019 - DOM</li>
    <li>Week 13 : 29/11/2019 - Prototype &amp; Event</li>
    <li>Week 14 : 05/12/2019 - Ajax &amp; XML &amp; JSON</li>
    <li>Week 14 : 06/12/2019 - Ajax &amp; XML &amp; JSON </li>
    <li>Week 15 : 12/12/2019 - Web Services</li>
    <li>Week 15 : 13/12/2019 - Scriptaculous</li>
    <li>Week 16 : 19/12/2019 - Final Exam</li>
    <li>Week 16 : 20/12/2019 - Team Project Presentation</li>
	</ul>
  </div>
  <div class="wrap-subcontent">
    <h3>Team Project</h3>
    <ul>
      <li><a target="_blank" href="project/project.html">Team Project</a></li>
    </ul>
  </div>


  <div class="wrap-subcontent">
    <h3>Team Project Group</h3>
    <ul>
      <li>
        Class 23497
        <ul>
          <li><strong>박서연</strong>, 이효원, 정희재, 김재현, 모지환, 황예찬</li>
          <li><strong>이종민</strong>, 박준영, 박진혁, 송현수, 엄세진, 이준섭</li>
          <li><strong>김소현</strong>, 임소윤, 이정인, 강가원, 안예지</li>
          <li><strong>이민혁</strong>, 백승민, 김유현, <strong>Ana Carolina Cardoso</strong>,  Zhou Xueyi, Frederik Bonde</li>
          <li><strong>양재우</strong>, 주한새, 강은호, 권순범, 김하영, 안한서</li>
          <li><strong>위준범</strong>, 배진우, 박재선, 박성수, 최준호</li>
          <li><strong>박재용</strong>, 김동규, 이세명, 오승기, 김덕영</li>
          <li><strong>고동현</strong>, 김동현, 김두호, 왕종휘, 김예진, 문수림</li>
          <li><strong>성태훈</strong>, 박예찬, 이무경, 장윤호, 심유빈</li>
          <li><strong>최웅순</strong>, 김태인, 이재윤, 김은영, 김민지, 고영준</li>
          <li><strong>윤규민</strong>, 박제현, 임정현, 윤지인, 이수종</li>
        </ul>
      </li>
      <li>
        Class 24465
        <ul>
          <li><strong>유영민</strong>, 강민제, 박연희, 이효원, 이정규</li>
          <li><strong>문현준</strong>, Tsoy Sergey, Shu Zhiwen, XIANG FANGSONG, 김태웅, 김세훈</li>
          <li><strong>박예림</strong>, 사은수, 이지선, 송용호, 권태형, 윤성주</li>
          <li><strong>박제균</strong>, 장주섭, 강은지, 정은지, 정은지</li>
          <li><strong>장윤지</strong>, 김종훈, 이해석, 이원석, 이준기</li>
          <li><strong>한동연</strong>, 안요한, 김민재, 석예림, 박재현, 김서권</li>
          <li><strong>김규진</strong>, 김승호, 김용준, 김우정, 김재훈</li>
          <li><strong>강동완</strong>, 김남호, 현병욱, 이진태, 김정우</li>
        </ul>
      </li>
    </ul>
  </div>

<!--
  <div class="wrap-subcontent last">
    <h3>Midterm Notice</h3>
    <ul>
      <li>10/25(fri) 13:00 ~ 16:00</li>
      <li>12:50 까지 강의실로 와주세요 / Please come to the classroom by 12:50</li>
      <li>Laptop 파워 부족한 분들은 본인이 직접 멀티탭 챙겨오셔야 합니다 / If you do not have enough Laptop power, you should bring your own power strip</li>
      <li>
        PC실습실01 (4공학관) / PC Lab 01 (4th Eng)
        <ul>
          <li><strong>랩탑 사용자 중 다음 인원 / Use Laptop</strong></li>
            <ul>
              <li>Xiang Fangsong, Shu Zhuwen, Frederik Bonde, Tsoy Sergey</li>
              <li>Zhou Xueyi, Ana Carolina Cardoso, 김우정, 이효원(2016003845), 강민제</li>
              <li>한동연, 박예림, 이지선, 사은수, 김용준, 유영민, 김태웅, 이무경</li>
            </ul>
          <li><strong>실습실 데스크탑 사용자들 (모든 랩탑 미사용자들)</strong></li>
        </ul>
      </li>
      <li>
        학술관 101호
        <ul>
          <li>위 목록에 이름이 없는 Laptop사용 학생은 모두 학술관 101호 입니다.</li>
        </ul>
      </li>
    </ul>
  </div>
-->

  <div class="wrap-subcontent last">
    <h3>Assessments</h3>
    <ul>
      <li>Attendance (10%)</li>
      <li>Midterm Exam (30%)</li>
      <li>Final Exam (30%)</li>
      <li>Team Project (30%)</li>
    </ul>
  </div>
</div>
</div>



<div id="slides">
  <div id="lecture">
    <table>
      <tr>
        <th class="number">No.</th>
        <th class="title">Lecture Slides</th>
      </tr>
      <tr>
        <td class="number">0</td>
        <td class="title"><a target="_blank" href="lecture/00-introduction.html">Introduction</a></td>
      </tr>
      <tr>
        <td class="number">1</td>
        <td class="title"><a target="_blank" href="lecture/01-www.html">The Internet &amp; World Wide Web</a></td>
      </tr>
      <tr>
        <td class="number">2</td>
        <td class="title"><a target="_blank" href="lecture/02-html.html">Basic HTML</a></td>
      </tr>
      <tr>
        <td class="number">3</td>
        <td class="title"><a target="_blank" href="lecture/03-css.html">CSS for Styling</a></td>
      </tr>
      <tr>
        <td class="number">4</td>
        <td class="title"><a target="_blank" href="lecture/04-layout.html">Page Layout</a></td>
      </tr>
      <tr>
        <td class="number">5</td>
        <td class="title"><a target="_blank" href="lecture/05-PHP.html">PHP</a></td>
      </tr>
      <tr>
        <td class="number">6</td>
        <td class="title"><a target="_blank" href="lecture/06-forms.html">Forms</a></td>
      </tr>
      <tr>
        <td class="number">7</td>
        <td class="title">
          <a target="_blank" href="lecture/07-sql.html">Relational Database &amp; SQL</a>
          [<a target="_blank" href="lecture/examples/07SQL/db.zip">DBs</a>]
        </td>
      </tr>
      <tr>
        <td class="number">8</td>
        <td class="title"><a target="_blank" href="lecture/08-javascript.html">JavaScript</a></td>
      </tr>
      <tr>
        <td class="number">9</td>
        <td class="title"><a target="_blank" href="lecture/09-dom.html">Document Object Model (DOM)</a></td>
      </tr>
      <tr>
        <td class="number">10</td>
        <td class="title"><a target="_blank" href="lecture/10-prototype.html">Prototype</a></td>
      </tr>
      <tr>
        <td class="number">11</td>
        <td class="title"><a target="_blank" href="lecture/11-events.html">Events</a></td>
      </tr>
      <tr>
        <td class="number">12</td>
        <td class="title"><a target="_blank" href="lecture/12-ajaxXmlJson.html">Ajax, XML, JSON</a></td>
      </tr>
      <tr>
        <td class="number">13</td>
        <td class="title"><a target="_blank" href="lecture/13-webServices.html">Web Services</a></td>
      </tr>
      <tr>
        <td class="number">14</td>
        <td class="title"><a target="_blank" href="lecture/14-scriptaculous.html">Scriptaculous</a></td>
      </tr>
      <tr>
        <td class="number">15</td>
        <td class="title"><a target="_blank" href="#"></a></td>
      </tr>
    </table>
  </div>

  <div id="lab">
    <table>
   	  <!-- <tr>
        <th class="number">No.</th>
        <th class="title">Project</th>
      </tr>
      <tr>
        <td class="number">*</td>
        <td class="title"><a target="_blank" href="#"></a></td>
      </tr> -->
      <tr>
        <th class="number">No.</th>
        <th class="title">Labs</th>
      </tr>
      <tr>
        <td class="number">0</td>
        <td class="title"><a target="_blank" href="./labs/lab0-introduction.html">Introduction - Week 3</a></td>
      </tr>
      <tr>
        <td class="number">1</td>
        <td class="title"><a target="_blank" href="./labs/lab1-aboutme(HTML).html">About Me (HTML) - Week 4</a></td>
      </tr>
      <tr>
        <td class="number">2</td>
        <td class="title"><a target="_blank" href="./labs/lab2-aboutme(CSS).html">CSS - Week 5</a></td>
      </tr>
      <tr>
        <td class="number">3</td>
        <td class="title"><a target="_blank" href="./labs/lab3-favorite.html">CSS Design &amp; Layout - Week 6</a></td>
      </tr>
      <tr>
        <td class="number">4</td>
        <td class="title"><a target="_blank" href="./labs/lab4-movieReview.html">Movie Review (HTML, CSS, Layout)- Week 7</a></td>
      </tr>
      <tr>
        <td class="number">5</td>
        <td class="title"><a target="_blank" href="./labs/lab5-musicLibrary.html">Basic PHP - Week 9</a></td>
      </tr>
      <tr>
        <td class="number">6</td>
        <td class="title"><a target="_blank" href="./labs/lab6-gradeStore.html">Forms - Week 10</a></td>
      </tr>
      <tr>
        <td class="number">7</td>
        <td class="title"><a target="_blank" href="./labs/lab7-SQL.html">SQL - Week 11</a></td>
      </tr>
      <tr>
        <td class="number">8</td>
        <td class="title"><a target="_blank" href="./labs/lab8-pimpMyText.html">JavaScript - Week 12</a></td>
      </tr><!--
      <tr>
        <td class="number">9</td>
        <td class="title"><a target="_blank" href="./labs/lab9-maze.html">Assignment: Maze - Week 13</a></td>
      </tr>
      <tr>
        <td class="number">10</td>
        <td class="title"><a target="_blank" href="./labs/lab10-bookSearch.html">Ajax &amp; XML &amp; JSON - Week 14</a></td>
      </tr>
      <tr>
        <td class="number">11</td>
        <td class="title"><a target="_blank" href="#"></a></td>
      </tr>
      <tr>
        <td class="number">12</td>
        <td class="title"><a target="_blank" href="#"></a></td>
      </tr>
      <tr>
        <td class="number">13</td>
        <td class="title"><a target="_blank" href="#"></a></td>
      </tr>
      <tr>
        <td class="number">14</td>
        <td class="title"><a target="_blank" href="#"></a></td>
      </tr>
      <tr>
        <td class="number">15</td>
        <td class="title"><a target="_blank" href="#"></a></td>
      </tr>
		-->
    </table>
  </div>
</div>
</div>
</div>

<?php
include "../resource/footer.php";
?>



</body>
</html>
