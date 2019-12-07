<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Software Engineering Lab - Members</title>
	<link rel="stylesheet" type="text/css" href="css/members.css" />
	<link rel="stylesheet" type="text/css" href="../resource/css/common.css" />
	<script type="text/javascript" src="js/member.js"></script>
</head>

<body>
	<?php 
	include "../resource/nav.php";
	include "../resource/DB_connect.php";
	$conn=connect();
	?>

	<main role="main">
		<div class="contents">
			<div class="main_section">
				<h1>MEMBERS</h1>
			</div>

			<div class="tab_class">
				<div id="tab">
					<?php               
					$stmt = $conn->prepare("SELECT type FROM user_type order by type desc");
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
						<?php          
						$stmt_member = $conn->prepare("SELECT Name,Email,Homepage,Introduce,Other,Picture FROM user where type = :type");
						$stmt_member->bindValue(':type',$value['type']);
						$stmt_member->execute();
						$result_member = $stmt_member->fetchAll();
						foreach ($result_member as $key => $value) { ?>
							<img src="data:image/jpeg;base64,<?= base64_encode($value['Picture']) ?>" />
							<h3>Name:<?=$value['Name']?></h3>
							<p>Email:<?=$value['Email']?></p>
							<p>Homepage:<?=$value['Homepage']?></p>
							<p>Introduce:<?=$value['Introduce']?></p>
							<p>Other:<?=$value['Other']?></p>
							<hr />
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
</html>