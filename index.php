<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title> Software Engineering Lab - Home </title>
    <meta name="keywords" content="Hanyang University, CSE326, Web Application Development" />
    <link rel="stylesheet" type="text/css" href="resource/css/index.css" />
    <link rel="stylesheet" type="text/css" href="resource/css/common.css" />
    <link href="./img/favicon.png" type="image/png" rel="shortcut icon" />
</head>    
<body>    
    <?php //db 연결
    include "resource/DB_connect.php";
    $conn = connect();
    ?>

    <?php 
    include "resource/nav.php";
    ?>

    <div id= "main_image">
        <img src="http://appdata.hungryapp.co.kr/data_file/data_img_m/201502/10/1423580240_Nr4eu5HZAs.jpg" alt="main_image" width= 100% height= 500px;>
    </div>

    <main>
        <article>
            <h3><a href="/research">ABOUT US</a></h3>
            <p>welcome to Software Engineering Laboratory within the CSE Dept @ HYU(ERICA) led by asst. prof. Scott LEE</p>
            <p>Content Start</p> <!-- 사진 내용 3개 -->
            <p>Content</p>
            <p>Content</p>
            <p>Content</p>
            <p>Content End</p>
        </article>
        <article>
            <h3><a href="resource/notice.html">NOTICE</a></h3> <!-- 기본적인 notice 링크 -->
            <ul>
                <?php
                $stmt = $conn->prepare("SELECT title FROM notice limit 3");
                $stmt->execute();
                foreach($stmt->fetchAll() as $k=>$v) {
                    echo "<li>" . $v['title'] . "</li>";
                }
                ?>
            </ul>
        </article>
        <article>
            <h3><a href="/courses">COURSES</a></h3> <!-- 이번 학기에 열린 강의 목록 / 링크 -->
            <?php
            $stmt = $conn->prepare("SELECT Course_number,Course_name FROM course");
            $stmt->execute();
            foreach($stmt->fetchAll() as $k=>$v) {
                echo "<li><a>" . $v['Course_number'] ." ". $v['Course_name'] . "</a></li>";
            }
            ?>
        </article>
    </section>
</main>

<article id="index_map">
  <h3><a href="/research">CONTACT</a></h3>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3173.9242122905407!2d126.83208981526195!3d37.296929979849345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b6ef2f5a7cb73%3A0x26b59cb3d9af4a46!2z7ZWc7JaR64yA7ZWZ6rWQIEVSSUNB7Lqg7Y287Iqk!5e0!3m2!1sko!2skr!4v1575792959595!5m2!1sko!2skr"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="">
  </iframe>
</article>

<footer role="contentinfo">
    <div class="container">
        <p>COPYRIGHT 2014 SELAB, ALL RIGHTS RESERVED. COMPUTER SCIENECE AND ENGINEERING, HANYANG UNIV. LOCATION: ENGINEERING BUILDING #3, ROOM 421. T +82-31-400-4754</p>
    </div>
</footer>
</body>
<?php $conn = null; // disconnect db ?>
</html>
