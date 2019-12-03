<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Software Engineering Lab - Notice</title>
  <link rel="stylesheet" type="text/css" href="../resource/css/common.css" />
  <link rel="stylesheet" type="text/css" href="css/notice.css" />
  <script type="text/javascript" src="js/notice.js"></script>
</head>

<body>
  <?php 
  include "../resource/nav.php";
  ?>

  <main role="main">
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


<?php
include "../resource/footer.php";
?>

</body>
<?php $conn = null; // disconnect db ?> 
</html>
