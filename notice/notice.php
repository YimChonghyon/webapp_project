<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Software Engineering Lab - Courses: Web Application Development</title>
  <link rel="stylesheet" type="text/css" href="../resource/css/common.css" />
  <link rel="stylesheet" type="text/css" href="../resource/css/footer.css" />
  <link rel="stylesheet" type="text/css" href="css/notice.css" />
  <script type="text/javascript" src="js/notice.js"></script>
</head>

<body>
  <header role= "banner">
    <nav role= "navigation">
      <div id= "logo" class= "pull-left"><a href= "../index.php"><img src= "../resource/images/selab_logo_S.png" /></a></div>
      <ul class= "inline-list" class= "pull-left">
        <li class="pull-left nav-left"><a href="../notice/notice.php" >NOTICE</a></li> <!-- 해당 페이지로 이동 -->
        <li class="pull-left nav-left"><a href="../members/members.php" >MEMBERS</a></li>
        <li class="pull-left nav-left"><a href="../research/research.php" >RESEARCH</a></li>
        <li class="pull-left nav-left"><a href="../publication/publication.php" >PUBLICATIONS</a></li>
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
        <h1>NOTICE</h1>
      </div>


      <ul id="board">
        <li class="header">
          <ul>
            <li class="title pull-left">Title</li>
            <li class="name pull-left">Name</li>
            <li class="time pull-left">Date</li>
          </ul>
        </li>


        <div>
          <li class="entry">
            <div class="information">
              <?php
              include "../resource/DB_connect.php";
              $conn = connect();
              try {
                $stmt = $conn->prepare("SELECT * FROM notice");
                $stmt->execute();
                foreach($stmt->fetchAll() as $k=>$v) { ?>
                  <a href="#" onclick="SirenFunction('SirenDiv<?php echo $k; ?>');" class="blind_view">
                    <ul> 
                      <?php
                      if($v['open'] == 0)
                        continue;
                      echo "<li  class='title pull-left'>" . $v[Title] . "</li>";
                      echo "<li  class='name pull-left'>" . $v[Name] . "</li>";
                      echo "<li  class='time pull-left'>" . $v[Date] . "</li>";
                      ?>
                      <div class="singo_view pull-left" style="display:none; background-color: pink; width: 100%;" id="SirenDiv<?php echo $k;?>">
                        <?php echo $v['Content']; ?>
                      </div>
                    </ul>
                  </a> 
                  <?php
                }
                if(isset($_SESSION['id'])){
                  echo "<button onclick=\"location.href='newnotice.php'\" >" . "글쓰기" . "</button>";
                }
              }
              catch(PDOException $e)
              {
                echo "<ul>";
                echo "<li>" . "Connection failed: " . $e->getMessage() . "</li>";
                echo "</ul>";
              }
              ?>
            </div>
          </li>
        </div>
      </ul>
    </div>
  </main>


  <footer role="contentinfo">
    <div class="container">
     <p>COPYRIGHT 2014 SELAB, ALL RIGHTS RESERVED. COMPUTER SCIENECE AND ENGINEERING, HANYANG UNIV. LOCATION: ENGINEERING BUILDING #3, ROOM 421. T +82-31-400-4754</p>
   </div>
 </footer>
</body>
<?php $conn = null; // disconnect db ?> 
</html>
