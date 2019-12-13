<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/setting.css" />
	<link rel="stylesheet" type="text/css" href="../resource/css/common.css" />
	<script type="text/javascript" src="js/setting.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js" type="text/javascript"></script>
</head>
<body>        
	<?php 
	include "../resource/nav.php";
	include "../resource/DB_connect.php";
	$conn = connect();
	?>

	<div class="setting_title">
		<?php echo "<h1>WELLCOME " . $_SESSION['name'] . "</h1>";?>
	</div>

	<aside>
		<p class="MENU">MENU</p>
		<ul class="OPTION O1">
			<li><button class="B" id="B1" onclick="Button_Tree('SETDIV1','B1')" 
				<?php 
				if($_SESSION['privilege'] != 1)
					echo "disabled";
				?>
				>CREATE NEW ACCOUNT</button>
			</li>
			<li><button class="B" id="B2" onclick="Button_Tree('SETDIV2','B2')"
				<?php 
				if($_SESSION['privilege'] != 1)
					echo "disabled";
				?>
				>DELETE ACCOUNT</button>
			</li>
		</ul>
		<ul class="OPTION O2">
			<li><button class="B" id="B3" onclick="Button_Tree('SETDIV3','B3')">CHAGE PASSWORD</button></li>
			<li><button class="B" id="B4" onclick="Button_Tree('SETDIV4','B4')">CHANGE PROFILE</button></li>
			<li><button class="B" id="B5" onclick="Button_Tree('SETDIV5','B5')">WITHDRAWAL</button></li>
		</ul>
		<ul class="OPTION O3">
			<li><button class="B" id="B6" onclick="Button_Tree('SETDIV6','B6')"
				<?php 
				if($_SESSION['privilege'] != 1)
					echo "disabled";
				?>
				>SETTING	PUBLICATIONS</button>
			</li>
			<li><button class="B" id="B7" onclick="Button_Tree('SETDIV7','B7')"
				<?php 
				if($_SESSION['privilege'] != 1)
					echo "disabled";
				?>>SETTING	GALLERY</button>
			</li>
			<li><button class="B" id="B8" onclick="Button_Tree('SETDIV8','B8')"
				<?php 
				if($_SESSION['privilege'] != 1)
					echo "disabled";
				?>>CREATE NEW COURSE</button>
			</li>
		</ul>
	</aside>

	<div class="VIEWPOINT" id="START">
		<h2>HOW TO USE SETTING PAGE</h2>
		<p>i don't know sry</p>
	</div>

	<div class="VIEWPOINT" id="SETDIV1">
		<form action="createmember.php" method="POST" onsubmit="return confirm('해당 내용으로 계정을 생성합니다.');">
			<fieldset>
				<legend><h2>CREATE NEW ACCOUNT</h2></legend>
				<input type="text" name="id" placeholder="ID" maxlength="20"/><br/>
				<input type="text" name="name" placeholder="Name" maxlength="30"/><br/>
				<label> Role:
					<select name="role">
						<?php
						$sql_rank = "select type from user_type";
						$stmt_rank = $conn->prepare($sql_rank);
						$stmt_rank -> execute();
						foreach ($stmt_rank->fetchAll() as $key => $value) { ?>
							<option value="<?=$value['type']?>"><?=$value['type']?></option>
						<?php } ?>
					</select><br/>
					<input type="submit" />			
				</label>
			</fieldset>
		</form>
	</div>

	<div class="VIEWPOINT" id="SETDIV2">   
		<h2>ALL ACCOUNTS</h2>
		<table>   
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Privilege</th>
					<th>DROP</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$stmt = $conn->prepare("SELECT id,Name,type FROM user natural join user_type order by type desc");
				$stmt->execute();
				foreach ($stmt->fetchAll() as $key => $value) { ?>
					<tr>
						<th><?= $value['id']?></th>
						<th><?= $value['Name']?></th>
						<th><?= $value['type']?></th>
						<th>
							<form action="deletemember.php" method="POST" onsubmit="return confirm('ARE YOU SURE THIS DECISION?');">
								<input type="hidden" name="id" value="<?= $value['id']?>" />
								<input type="submit" value="byby"/>
							</form>
						</th>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<div class="VIEWPOINT" id="SETDIV3">
		<form action="changepassword.php" method="POST" onsubmit="return confirm('Do you agree with this decision?');">
			<fieldset>
				<legend><h2>Change Password</h2></legend>
				<input type="hidden" name="id" value="<?=$_SESSION['id']?>" />
				<input type="text" name="CP" placeholder="current Password" /><br/>
				<input type="text" name="NP" placeholder="new Password" /><br/>
				<input type="submit" />
			</fieldset>
		</form>
	</div>

	<div class="VIEWPOINT" id="SETDIV4">
		<h2>시간 관계상 기능 구현은 생략합니다.</h2>
		<form action="change_profile_picture.php" method="POST" enctype="multipart/form-data">
			<img src="img/<?=$_SESSION['id']?>" id='picture' onerror="this.src='img/empty.png'"/>
			<input type="hidden" name="id" value="<?=$_SESSION['id']?>" />
			<input type="file" onchange="this.form.submit()" name="picture" accept="image/gif,image/jpeg,image/png" />
		</form>
		<?php
		$sql_profile = "select Name,Type,Email,Homepage,Introduce,Other from user";
		$stmt_profile = $conn -> prepare($sql_profile);
		$stmt_profile -> execute();
		$result_profile = $stmt_profile -> fetch();
		?>
		<ul id="PROFILE_DATA">
			<li><strong>NAME</strong>: <?=$result_profile['Name']?></li>
			<li><strong>ROLE</strong> : <?=$result_profile['Type']?></li>
			<li><strong>EMAIL</strong> : <?=$result_profile['Email']?></li>
			<li><strong>HOMEPAGE</strong> : <?=$result_profile['Homepage']?></li>
			<li><strong>INTRODUCE</strong> : <?=$result_profile['Introduce']?></li>
			<li><strong>OTHERS</strong> : <?=$result_profile['Other']?></li>
		</ul>
	</div>

	<div class="VIEWPOINT" id="SETDIV5">
		<form action="withdrawal.php" method="POST" onsubmit="return checking_withdrawal()">
			<fieldset>
				<legend><h2>Withdrawal</h2></legend>
				<p>IF you really want to delete this web page?</p>
				<label>YES, I hate this page:<input type="checkbox" id="checkbox_withdrawal" /></label>
				<input type="hidden" name="id" value="<?=$_SESSION['id']?>" />
				<input type="submit" value="QUIT" />
			</fieldset>
		</form>
	</div>

	<div class="VIEWPOINT" id="SETDIV6">
		<?php
		try{ ?>
			<h2>CURRENT PUBLICATIONS_SECTION</h2>
			<table>
				<thead>
					<thead><th>TYPE</th><th>drop</th></thead>
				</thead>
				<tbody>
					<?php
					$stmt = $conn->prepare("SELECT * FROM publications_type");
					$stmt->execute();
					foreach ($stmt->fetchAll() as $key => $value) { ?>
						<tr><th><?=$value['Type']?></th><th><form action="droppublications_type.php" method="POST">
							<input type="hidden" name="type" value="<?=$value['Type']?>" />
							<input type="submit" value="byby" />
						</form></th></tr>
					<?php } ?>
				</tbody>
			</table>
			<hr/>
			<form action="createpublications_type.php" method="POST">
				<fieldset>
					<legend>ADD NEW TYPE</legend>
					<input type="text" name="TYPE" placeholder="new TYPE" />
					<input type="submit" />
				</fieldset>
			</form>
			<?php
		} catch(PDOException $e){			
			echo "Connection failed: " . $e->getMessage();
		}
		?>	
	</div>

	<div class="VIEWPOINT" id="SETDIV7">
		<?php
		try{ ?>
			<h2>CURRENT GALLERY_SECTION</h2>
			<table>
				<thead>
					<thead><th>TYPE</th><th>drop</th></thead>
				</thead>
				<tbody>
					<?php
					$stmt = $conn->prepare("SELECT * FROM gallery_type");
					$stmt->execute();
					foreach ($stmt->fetchAll() as $key => $value) { ?>
						<tr><th><?=$value['Type']?></th><th><form action="dropgallery_type.php" method="POST">
							<input type="hidden" name="type" value="<?=$value['Type']?>" />
							<input type="submit" value="byby" />
						</form></th></tr>
					<?php } ?>
				</tbody>
			</table>
			<hr/>
			<form action="creategallery_type.php" method="POST">
				<fieldset>
					<legend>ADD NEW TYPE</legend>
					<input type="text" name="TYPE" placeholder="new TYPE" />
					<input type="submit" />
				</fieldset>
			</form>
			<?php
		} catch(PDOException $e){			
			echo "Connection failed: " . $e->getMessage();
		}
		?>
	</div>

	<div class="VIEWPOINT" id="SETDIV8">
		<h4>시간 관계상 COURSE 부분은 데이터베이스연결을 제외하도록 결정했습니다.</h4>
	</div>

	<?php
	include "../resource/footer.php";
	?>
</body>
</html>