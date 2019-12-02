<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Software Engineering Lab - Research</title>
  <link rel="stylesheet" type="text/css" href="../resource/css/common.css" />
  <link rel="stylesheet" href="css/research.css" type="text/css" />
</head>

<body>
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
        <?php  //로그인 옵션
        include "../resource/LOGIN_template.php";
        ?>
      </ul>
    </nav>
  </header>

  <main>
    <div class="contents">
      <div class="main_section">
        <h1>RESEARCH</h1>
      </div>


      <div class = "research">
        <img src="../../resource/images/notice.jpg" id="research_img" /> <!-- 여기 이미지!!!!! -->
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
