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

</style>
</head>

<body>    
<?php try{$conn=new PDO("mysql:host=localhost;dbname=selab","root","root");$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);}catch(PDOException $e){
    //echo "Connection failed: " . $e->getMessage();
}?>

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

                <a id= "contact" href= "/contact" class= 'pull-right'>CONTACT</a>

            </nav>
        </header>

                <!-- INDEX MAIN IMAGE -->
                <div class="container">
	            <div class="wrap-slider">
    	        <div class="css-slider">
        	    <div class="mask">
				<ul>
					<li class="firstanimation first">
						<a href="#"><img src="images/1.jpg" alt="White Cat"/></a>
						<div class="tooltip"><h1>White Cat</h1></div>
					</li>
					<li class="secondanimation second">
						<a href="#"><img src="images/2.jpg" alt="Owl"/></a>
						<div class="tooltip"><h1>Owl</h1></div>
					</li>
					<li class="thirdanimation third">
						<a href="#"><img src="images/3.jpg" alt="Baby Cats"/></a>
						<div class="tooltip"><h1>Baby Cats</h1></div>
					</li>
				</ul>
                </div>
                <div class="progress-bar"></div>
                </div>
                </div>
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
                <p>Content Start</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content End</p>
            </article>
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
