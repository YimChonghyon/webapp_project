<!DOCTYPE html>

<!--
    학번 : 2015035732
    이름 : 이수종
-->

<html>
<head>
    <meta charset="utf-8" />
    <title> Software Engineering Lab - Home </title>

    <meta name="author" content="Scott Uk-Jin Lee" />
    <meta name="keywords" content="Hanyang University, CSE326, Web Application Development" />

    <link rel="stylesheet" type="text/css" href="index.css" />
    <link href="./img/favicon.png" type="image/png" rel="shortcut icon" />

    <!-- CSS로 재생성 -->
    <style>
        body {overflow-x: hidden; margin-bottom: 1.5em; width: 100%; margin-left: 0; margin-top: 0;}
        
        a:link { color: black; text-decoration: none;}
        a:visited { color: black; text-decoration: none;}
        a:hover { color: black; text-decoration: underline;}

        header {height: 70px; margin: 0; padding: 0; font-size: 1em; font-family: Arial;}

        nav {position: fixed; background-color: ghostwhite; width: 100%; overflow: hidden; height: 70px;
         text-decoration: none; text-transform: uppercase;
     }
     nav ul {margin: 0; padding: 0;}
     nav ul li {display: inline; border-left: 1px solid #999; padding: 0 10px;}
     nav ul li a:hover, ul li a:focus {color: #FFF; border: 1px solid #F40; background-color: #F40;}

     .pull-left {float: left;}
     .pull-right {float: right; padding: 0 10px; border-left: 1px solid #999; padding: 0 10px; margin-right: 0.5em;}

     .pull-left:first-child {border-left: none;}
     .pull-right:first-child {border-left: none;}

     main {text-align: center;}
     main article {width: 33%; height: 20em; display: inline-block;}
     main li {list-style: none;}

     footer {position: fixed; margin-bottom: 0%; margin-left: 0%; margin-right: 0%;
        bottom: 0; width: 100%; height: 1.5em; font-size: 1em; background-color: gray;
    }
</style>
</head>    
<body>    
    <?php //conn db
    $servername = "localhost";
    $username = "root";
    $password = "root";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=selab", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        ?>

        <header role= "banner">
            <nav role= "navigation">
                <div id= "logo" class= "pull-left"><a href= ""><img src= "common/image" /></a></div>

                <ul id= "menu" class= "inline-list" class= "pull-left">
                    <li class="pull-left"><a href="resource/notice.html" >NOTICE</a></li> <!-- 해당 페이지로 이동 -->
                    <li class="pull-left"><a href="resource/members" >MEMBERS</a></li>
                    <li class="pull-left"><a href="resource/research" >RESEARCH</a></li>
                    <li class="pull-left"><a href="resource/publications" >PUBLICATIONS</a></li>
                    <li class="pull-left"><a href="resource/courses" >COURSES</a></li>
                    <li class="pull-left"><a href="resource/gallery" >GALLERY</a></li>
                </ul>

                <div role= "login" class= "pull-right"><a href= "/">LOGIN</a></div> <!-- LOGIN php 파일 -->
                <a id= "contact" href= "/contact" class= 'pull-right'>CONTACT</a>

            </nav>
        </header>

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
                        echo "<li>" . $v[title] . "</li>";
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
                    echo "<li><a>" . $v[Course_number] ." ". $v[Course_name] . "</a></li>";
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

    <?php
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>
</body>
</html>