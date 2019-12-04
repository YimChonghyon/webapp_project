<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Software Engineering Lab - Gallery</title>
	<link rel="stylesheet" type="text/css" href="css/gallery.css" />
	<link rel="stylesheet" type="text/css" href="../resource/css/common.css" />
</head>

<body>
    <?php 
    include "../resource/nav.php";
    include "../resource/DB_connect.php";
    $conn = connect();
    ?>

    <main role="main">
    	<div class="contents">
    		<div class="main_section">
    			<h1>GALLERY</h1>
    		</div>


            <div class="tab_class">
                <div id="tab">
                    <?php               
                    $stmt = $conn->prepare("SELECT type FROM user_type");
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    foreach ($result as $key => $value) { ?>
                        <button class="MEMBERS_BUTTON" id="<?=$value['type']?>" onclick="Button_Tree('<?=$value["type"]?>_DIV','<?=$value["type"]?>')"><?=$value['type']?></button><br>
                    <?php } ?>
                </div>
                <div class="mainbody" id="START">
                    <p>안녕하세요 MEMBER'S PAGE 입니다.</p>
                </div>
                <?php foreach ($result as $key => $value) { ?>
                    <div class="mainbody" id="<?=$value['type']?>_DIV">
                        <?=$key ?>
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
