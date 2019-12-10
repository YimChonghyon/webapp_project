<!DOCTYPE html>

<?php session_start(); ?>
<html>
<head>
    <meta charset="utf-8" />
    <title> Software Engineering Lab - Home </title>

    <meta name="author" content="Scott Uk-Jin Lee" />
    <meta name="keywords" content="Hanyang University, CSE326, Web Application Development" />

    <link rel="stylesheet" type="text/css" href="index.css" />
    <link href="/img/favicon.png" type="image/png" rel="shortcut icon" />

    <style>
    *{margin:0;padding:0;}
    ul,li{list-style:none;}
    .slide{height:500px;overflow:hidden;}
    .slide ul{width:calc(100% * 4);display:flex;animation:slide 8s infinite;} /* slide 8초 동안 진행, 반복*/
    .slide li{width:calc(100% / 4);height:500px;}
    .slide li:nth-child(1){background:#ffa;}
    .slide li:nth-child(2){background:#faa;}
    .slide li:nth-child(3){background:#afa;}
    .slide li:nth-child(4){background:#aaf;}
    @keyframes slide {
      0% {margin-left:0;} /* 0 ~ 10  : 정지 */
      10% {margin-left:0;} /* 10 ~ 25 : 변이 */
      25% {margin-left:-100%;} /* 25 ~ 35 : 정지 */
      35% {margin-left:-100%;} /* 35 ~ 50 : 변이 */
      50% {margin-left:-200%;}
      60% {margin-left:-200%;}
      75% {margin-left:-300%;}
      85% {margin-left:-300%;}
      100% {margin-left:0;}
    }

    @media(max-width:767px) {
   .menuBtn {
       padding-top:6px;
       padding-left:10px;
       padding-right:10px;
       padding-bottom:2px;
       border:1px solid #AAAAAA;
       border-radius:5px;
       background-color:#FFFFFF;
       cursor:pointer;
   }

   .menuBtn:hover {
       background-color:#DDDDDD;
   }

   .menuBtn:focus {
       outline:none;
   }
  
   .menuBtn i {
       color:#888888;
   }

   .menuBtn span {
       display:inline-block;
       text-indent:-999px;
   }

   nav {
       display:none;
   }
}

/* 768px 이상 */
@media(min-width:768px) {

  
   .menuBtn {display:none;}
   
   nav {display:block !important;}

   nav li {
       float:left;
       width:auto;
          }
}

  </style>
    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
        jQuery(".menuBtn").click(function() {

        jQuery(".menuNav").slideToggle();
    });
    });
    </script>
</head>

<body>    
<?php try{$conn=new PDO("mysql:host=localhost;dbname=selab","root","root");$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);}catch(PDOException $e){
    //echo "Connection failed: " . $e->getMessage();
}?>
        <button type="button" class="menuBtn">
        <i><img src="icon-menu.svg" style="width:20px;height:20px;"/></i><span>MENU</span>
        </button>

        <header role= "banner">
            <nav role= "navigation">
                <div id= "logo" class= "pull-left" class= "index_logo"><a class= "active" href= ""><img src= "resource/images/selab_logo_S.png" /></a></div>

                <ul id= "menu" class= "inline-list" class= "pull-left">
                    <li class="pull-left"><a class= "active" href="resource/notice.php" >NOTICE</a></li> <!-- 해당 페이지로 이동 -->
                    <li class="pull-left"><a class= "active" href="resource/members" >MEMBERS</a></li>
                    <li class="pull-left"><a class= "active" href="resource/research" >RESEARCH</a></li>
                    <li class="pull-left"><a class= "active" href="resource/publications" >PUBLICATIONS</a></li>
                    <li class="pull-left"><a class= "active" href="resource/main_course.php" >COURSES</a></li>
                    <li class="pull-left"><a class= "active" href="resource/gallery" >GALLERY</a></li>
                </ul>
                <?php
                if(!isset($_SESSION['id']))
                    echo '<div role= "login" class= "pull-right"><a href= "resource/login.php">LOGIN</a></div>';
                else{
                    echo '<div role= "logout" class= "pull-right"><a href= "resource/logout.php">LOGOUT</a></div>';
                    echo '<div role= "setting" class= "pull-right"><a href= "resource/setting.php">SETTING</a></div>';
                }
                ?>

            </nav>
        </header>

                <!-- INDEX MAIN IMAGE -->
                <div class="slide">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                </div>

        <main>
            <div id= "index_layout_1">
                <!-- NOTICE -->
            <article id="index_notice">
                <h3><a href="resource/notice.html">NOTICE</a></h3> <!-- 기본적인 notice 링크 -->
                <p>Content Start</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content End</p>
            </article>

                <!-- COURSES -->
            <article id="index_courses">
                <h3><a href="/courses">COURSES</a></h3> <!-- 이번 학기에 열린 강의 목록 / 링크 -->

                <p>Content Start</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content End</p>
            </article>
            </div>    
        
            <div id="index_layout_2">
                <!-- ABOUT US -->
            <article id="index_aboutus">
                <h3><a href="/research">ABOUT US</a></h3>
                <p>welcome to Software Engineering Laboratory within the CSE Dept @ HYU(ERICA) led by asst. prof. Scott LEE</p>
                <p>Content Start</p> <!-- 사진 내용 3개 -->
                <p>Content</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content End</p>
            </article>

            <article id="index_map">
                <h3><a href="/research">CONTACT</a></h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3173.9242122905407!2d126.83208981526195!3d37.296929979849345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b6ef2f5a7cb73%3A0x26b59cb3d9af4a46!2z7ZWc7JaR64yA7ZWZ6rWQIEVSSUNB7Lqg7Y287Iqk!5e0!3m2!1sko!2skr!4v1575792959595!5m2!1sko!2skr"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="">
                </iframe>
            </article>
        </main>

    <footer role="contentinfo">
        <div class="container">
            <p>COPYRIGHT 2014 SELAB, ALL RIGHTS RESERVED. COMPUTER SCIENECE AND ENGINEERING, HANYANG UNIV. LOCATION: ENGINEERING BUILDING #3, ROOM 421. T +82-31-400-4754</p>
        </div>
    </footer>
</body>
<?php $conn = null; // disconnect db ?>
</html>
