<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Software Engineering Lab - Gallery</title>
	<link rel="stylesheet" type="text/css" href="css/gallery.css" />
	<link rel="stylesheet" type="text/css" href="../resource/css/common.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/gallery.js"></script>
</head>

<body>
  <?php 
  include "../resource/nav.php";
  include "../resource/DB_connect.php";
  $conn = connect();
  $filter = 0;
  if(!empty($_SESSION['privilege']) && $_SESSION['privilege'] <= 1)
    $filter = 1;
?>

<main role="main">
 <div class="contents">
  <div class="main_section">
   <h1>GALLERY</h1>
</div>

<?php if($filter){?>
  <button onclick="location.href='newnotice.php'">NEW PICUTRE</button>
<?php } ?>  

<div class="tab_class">
    <div id="tab">
        <?php               
        $stmt = $conn->prepare("SELECT type FROM gallery_type");
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $key => $value) { ?>
            <button class="Gallerys_BUTTON" id="<?=$value['type']?>" onclick="Button_Tree('<?=$value["type"]?>_DIV','<?=$value["type"]?>')"><?=$value['type']?></button><br>
        <?php } ?>
    </div>
    <div class="mainbody" id="START">
        <p>안녕하세요 Gallery'S PAGE 입니다.</p>
    </div>
    <?php 
    $stmt_gallery = $conn->prepare("SELECT * FROM gallery where type = :type");
    $stmt_gallery -> bindParam(':type',$type);
    foreach ($result as $key => $value) { ?>
        <div class="mainbody" id="<?=$value['type']?>_DIV">
            <?php
            $type = $value['type'];
            $stmt_gallery->execute();
            $result_gallery = $stmt_gallery->fetchAll();
            foreach ($result_gallery as $key => $value) { ?>
                <div class="gallerys">
                    <img src="../img/<?=$value['Id']?>" class='gallery_picture' onerror="this.src='../mypage/img/empty.png'"/>
                    <div class="gallery_data">
                        <h3><?=$value['Title']?></h3>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</div>
</div>
</main>

<?php
include "../resource/footer.php";
?>

</body>
<?php $conn = null; // disconnect db ?> 
</html>
