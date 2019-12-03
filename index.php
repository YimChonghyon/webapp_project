<!DOCTYPE html>

<!--
    학번 : 2015035732
    이름 : 이수종
-->
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

<div id= "content">
    <p>Content Start</p> <!-- dumb -->
    <p>Content</p>
    <p>Content</p>
    <p>Content</p>
    <p>Content</p>
    <p>Content</p>
    <p>Content</p>
    <p>Content</p>
    <p>Content</p>
    <p>Content</p>
    <p>Content End</p>
</div>

<footer role="contentinfo">
    <div class="container">
        <p>COPYRIGHT 2014 SELAB, ALL RIGHTS RESERVED. COMPUTER SCIENECE AND ENGINEERING, HANYANG UNIV. LOCATION: ENGINEERING BUILDING #3, ROOM 421. T +82-31-400-4754</p>
    </div>
</footer>
</body>
<?php $conn = null; // disconnect db ?>
</html>