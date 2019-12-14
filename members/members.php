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
					<h2>Hi. This is "MEMBER'S PAGE"</h2>
					<p><strong>SAMPLE PROFILE of MEMBER</strong></p>
					<div class="profile">
						<img src="../mypage/img/empty.png" class="profile_picture" />
						<div class="profile_data">
							<h3>Name : SELAB_MEMBER</h3>
							<p>Email : sdkiso@gamil.com</p>
							<p>Homepage : <a href="#">MEMBER's Page</a></p>
							<p>Introduce : Hi!, I'm sample member~</p>
							<p>Other : We are alive for a week with sample data. I have not registered a profile picture.</p>
						</div>
					</div>
				</div>

				<?php 
				$stmt_member = $conn->prepare("SELECT Id,Name,Email,Homepage,Introduce,Other FROM user where type = :type");
				$stmt_member->bindParam(':type',$type);
				foreach ($result as $key => $value) { ?>
					<div class="mainbody" id="<?=$value['type']?>_DIV">
						<?php
						$type = $value['type'];
						$stmt_member->execute();
						$result_member = $stmt_member->fetchAll();
						foreach ($result_member as $key => $value) { ?>
							<div class="profile">
								<img src="../mypage/img/<?=$value['Id']?>" class='profile_picture' onerror="this.src='../mypage/img/empty.png'"/>
								<div class="profile_data">
									<h3>Name : <?=$value['Name']?></h3>
									<p>Email : <?=$value['Email']?></p>
									<p>Homepage : <?=$value['Homepage']?></p>
									<p>Introduce : <?=$value['Introduce']?></p>
									<p>Other : <?=$value['Other']?></p>
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
</html>