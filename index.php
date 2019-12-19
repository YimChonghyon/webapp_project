<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title> Software Engineering Lab - Home </title>
    <meta name="keywords" content="Hanyang University, CSE326, Web Application Development" />
    <link rel="stylesheet" type="text/css" href="resource/css/index.css" />
    <link rel="stylesheet" type="text/css" href="resource/css/common.css" />
    <link href="./img/favicon.png" type="image/png" rel="shortcut icon" />

    <style>
    *{margin:0;padding:0;}
    ul,li{list-style:none;}
    .slide{height:500px;overflow:hidden;}
    .slide ul{width:calc(100% * 4);display:flex;animation:slide 10s infinite;} /* slide 8초 동안 진행, 반복*/
    .slide li{width:calc(100% / 4);height:500px;}
    .slide li:nth-child(1){}
    .slide li:nth-child(2){}

    @keyframes slide {
      0% {margin-left:0;} /* 0 ~ 10  : 정지 */
      25% {margin-left:0;} /* 10 ~ 25 : 변이 */
      50% {margin-left:-100%;} /* 25 ~ 35 : 정지 */
      75% {margin-left:-100%;} /* 35 ~ 50 : 변이 */

    }

  </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   	   <script>
   	      $(function(){
   	      	var pull=$('#pull');
   	      	    menu=$('nav ul');
   	      	    menuHeight=menu.height();   	      
   	      $(pull).on('click', function(e){
   	      	e.preventDefault();
   	      	menu.slideToggle();   	      	
   	      });
   	      $(window).resize(function(){
   	      	var w=$(window).width();
   	      	if(w>600 && menu.is(':hidden'))
   	      		{menu.removeAttr('common');}
   	      });
   	  });
   	</script>

    <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script> <!-- 아이콘 -->
</head>

<body>    
    <?php //db 연결
    include "resource/DB_connect.php";
    $conn = connect();
    ?>

    <?php 
    include "resource/nav.php";
    ?>

    <!-- INDEX MAIN IMAGE -->
                <div class="slide">
                <ul>
                    <li><a href="#"><img src="resource/images/main_1.jpg" style="max-width: 100%; height: auto;"/></li>
                    <li><a href="#"><img src="resource/images/main_2.jpg" style="max-width: 100%; height: auto;"/></li>
                </ul>
                </div>

                <main>
            <div id= "index_layout_1">
                <!-- NOTICE -->
            <article id="index_notice">
            <br>
            <h3><a href="notice/notice.php">NOTICE&nbsp;&nbsp;<i class="fas fa-bell"></i></a></h3> <!-- 기본적인 notice 링크 -->
            <br>
            <ul>
            <?php 
            try{
            $sql_notice = 'select Title from notice order by Date desc limit 5';
            $stmt_notice = $conn -> prepare($sql_notice);
            $stmt_notice -> execute();
            $result_notice = $stmt_notice->fetchAll();
            } catch(PDOExceptin $e){
                echo "데이터 베이스에 연결할 수 없습니다.";
            }
            foreach ($result_notice as $key => $value) { ?>
                <p><?=$value['Title']?></p>
            <?php } ?>
            </ul>
        </article>

                <!-- COURSES -->
            <article id="index_courses">
            <br>
                <h3><a href="courses/main_course.php">COURSES&nbsp;&nbsp;<i class="fab fa-discourse"></i></a></h3> <!-- 이번 학기에 열린 강의 목록 / 링크 -->
                <br>
                <p>Understand the protocols, language and systems used on the Web</p>
                <p>Understand the functions of clients and servers on the Web</p>
                <p>learn how to implement JavaScript and PHP</p>
                <p>Obtain ability to design and implement an interactive web site</p>
                <p>Learn how to use/manage database associated with web applications</p>
            </article>
            </div>    
        
            <div id="index_layout_2">
                <!-- ABOUT US -->
            <article id="index_aboutus">
            <br>
                <h3><a href="research/research.php">ABOUT US&nbsp;&nbsp;<i class="fas fa-address-card"></i></a></h3>
                <br>
                <p>Web & Web security</p>
                <p>Formal Engineering Methods</p> <!-- 사진 내용 3개 -->
                <p>Requirement Engineering</p>
                <p>Real-Time Software Engineering</p>
                <p>Semi-structured Data</p>
            </article>

            <article id="index_map_info">
            <br>
                <h3><a href="#">CONTACT&nbsp;&nbsp;<i class="fas fa-map-pin"></i></i></a></h3>
                <br>
                <p>welcome to Software Engineering Laboratory within the CSE Dept</p>
                <p> @ HYU(ERICA) led by asst. prof. Scott LEE</p> <!-- 사진 내용 3개 -->
                <p>Content</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content End</p>
            </article>

            <article id="index_map">
            <br>           
                
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3173.9242122905407!2d126.83208981526195!3d37.296929979849345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b6ef2f5a7cb73%3A0x26b59cb3d9af4a46!2z7ZWc7JaR64yA7ZWZ6rWQIEVSSUNB7Lqg7Y287Iqk!5e0!3m2!1sko!2skr!4v1575792959595!5m2!1sko!2skr"
                    frameborder="0" style="border:0; width: 66%; height: 46.5%;" allowfullscreen="">
                </iframe>
            </article>
        </main>

        <?php
        include "resource/footer.php";
        ?>
</body>
<?php $conn = null; // disconnect db ?>
</html>
