<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<meta charset="utf-8" />
	<title>Software Engineering Lab - Courses: Web Application Development</title>
	<!--[if IE]>
	<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" />

<link rel="stylesheet" href="unready/layout.css" type="text/css" />
<link rel="stylesheet" href="css/notice.css" type="text/css" />
<!-- <link rel="stylesheet" href="common.css" type="text/css" /> -->

</head>

<body>
  <header role= "banner">
    <nav role= "navigation">
      <div class="pull-left"><a href="../index.html"><img src="images/selab_logo_S.png" /></a></div>
      <ul id= "menu" class="menu pull-left">
        <li class="pull-left nav_link"><a href="notice.html" >NOTICE</a></li>
        <li class="pull-left nav_link"><a href="members.html" >MEMBERS</a></li>
        <li class="pull-left nav_link"><a href="research.html" >RESEARCH</a></li>
        <li class="pull-left nav_link"><a href="publications.html" >PUBLICATIONS</a></li>
        <li class="pull-left nav_link"><a href="courses.html" >COURSES</a></li>
        <li class="pull-left nav_link"><a href="gallery.html" >GALLERY</a></li>
      </ul>

      <?php
      if(!isset($_SESSION['id']))
        echo '<div role= "login" class= "pull-right"><a href= "login.php">LOGIN</a></div>';
      else
        echo '<div role= "login" class= "pull-right"><a href= "logout.php">LOGOUT</a></div>';
      ?>
      <a href= "contact.html" class= 'pull-right nav_link'>CONTACT</a>
    </nav>
  </header>

  <main>
    <div class="container">
     <div class="contents">
      <div>
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
              <ul >
                <li class="title pull-left">연구원 모집</li>
                <li class="name pull-left">Scott Uk-Jin Lee</li>
                <li class="time pull-left">29 Aug 2014</li>
              </ul>
            </div>
          </li>
        </div>
      </ul>
    </main>

    <footer role="contentinfo">
      <div class="container">
       <p>COPYRIGHT 2014 SELAB, ALL RIGHTS RESERVED. COMPUTER SCIENECE AND ENGINEERING, HANYANG UNIV. LOCATION: ENGINEERING BUILDING #3, ROOM 421. T +82-31-400-4754</p>
     </div>
   </footer>
 </body>
 </html>
