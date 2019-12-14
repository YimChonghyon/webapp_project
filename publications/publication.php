<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Software Engineering Lab - Publication</title>
	<link rel="stylesheet" href="css/publication.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../resource/css/common.css" />
  <script type="text/javascript" src="js/publications.js"></script>
</head>

<body>
  <?php 
  include "../resource/nav.php";
  include "../resource/DB_connect.php";
  $conn=connect();
  $filter = 0;
  if(!empty($_SESSION['privilege']) && $_SESSION['privilege'] <= 1)
    $filter = 1;
  ?>

  <main>
   <div class="contents">
    <div class="main_section">
     <h1>Publication</h1>
   </div>

   <?php if($filter){?>
    <button onclick="location.href='newpublication.php'">글쓰기</button>
  <?php } ?>
  <div class="tab_class">
    <div id="tab">
      <?php               
      $stmt = $conn->prepare("SELECT type FROM publications_type");
      $stmt->execute();
      $result = $stmt->fetchAll();
      foreach ($result as $key => $value) { ?>
        <button class="Publication_BUTTON" id="<?=$value['type']?>" onclick="Button_Tree('<?=$value["type"]?>_DIV','<?=$value["type"]?>')"><?=$value['type']?></button><br>
      <?php } ?>
    </div>

    <div class="mainbody" id="START">
      <h2>Hi. This is "Publication'S PAGE"</h2>
    </div>

    <?php 
    $stmt_member = $conn->prepare("SELECT * FROM publications where type = :type");
    $stmt_member->bindParam(':type',$type);
    foreach ($result as $key => $value) { ?>
      <div class="mainbody" id="<?=$value['type']?>_DIV">
        <table>
          <thead>
            <tr><th>TITLE</th></tr>
          </thead>
          <?php
          $type = $value['type'];
          $stmt_member->execute();
          $result_member = $stmt_member->fetchAll();
          foreach ($result_member as $key => $value) {   ?>
            <div class="bisection">
              <tr><td><a href="<?=$value['Url']?>"><?=$value['Title']?></a></td></tr>
            </div>
          <?php } ?>
        </table>
      </div>
    <?php } ?>
  </div>

</div>
</main>

<?php
include "../resource/footer.php";
?>

</body>
</html>
