<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/setting.css" />
	<link rel="stylesheet" type="text/css" href="../resource/css/common.css" />
	<script type="text/javascript" src="js/setting.js"></script>
</head>
<body>        
	<?php 
	include "../resource/nav.php";
	include "../resource/DB_connect.php";
	$conn = connect();
	?>

	<div class="setting_title">
		<?php echo "<h1>WELLCOME " . $_SESSION['name'] . "</h1>"; ?>
	</div>

	<aside>
		<p class="MENU">MENU</p>
		<ul class="OPTION O1">
			<li><button id="B1" onclick="Button_Tree('SETDIV1','B1')">CREATE NEW ACCOUNT</button></li>
			<li><button id="B2" onclick="Button_Tree('SETDIV2','B2')">DELETE ACCOUNT</button></li>
		</ul>
		<ul class="OPTION O2">
			<li><button id="B3" onclick="Button_Tree('SETDIV3','B3')">CHAGE PASSWORD</button></li>
			<li><button id="B4" onclick="Button_Tree('SETDIV4','B4')">CHANGE PROFILE</button></li>
			<li><button id="B5" onclick="Button_Tree('SETDIV5','B5')">Withdrawal</button></li>
		</ul>
		<ul class="OPTION O3">
			<li><button id="B6" onclick="Button_Tree('SETDIV6','B6')">SETTING	PUBLICATIONS</button></li>
			<li><button id="B7" onclick="Button_Tree('SETDIV7','B7')">SETTING	GALLERY</button></li>
			<li><button id="B8" onclick="Button_Tree('SETDIV8','B8')">CREATE NEW COURSE</button></li>
		</ul>
	</aside>

	<div class="VIEWPOINT" id="START">
		<h2>HOW TO USE SETTING PAGE</h2>
		<p>i don't know sry</p>
	</div>

	<div class="VIEWPOINT" id="SETDIV1">
		<form action="" method="POST">
			<fieldset>
				<legend><h2>CREATE NEW ACCOUNT</h2></legend>
				<input type="text" name="" placeholder="ID" /><br/>
				<input type="text" name="" placeholder="Name" /><br/>
				<label> Privilege:
					<select>
						<option>NORMAL</option>
						<option>GREAT</option>
						<option disabled>ALL</option>
					</select><br/>
					<input type="submit" name="" />			
				</label>
			</fieldset>
		</form>
	</div>

	<div class="VIEWPOINT" id="SETDIV2">   
		<?php
		try{ 
			?>
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
					$stmt = $conn->prepare("SELECT id,Name,Privilege FROM user");
					$stmt->execute();
					foreach ($stmt->fetchAll() as $key => $value) { ?>
						<tr>
							<th><?= $value['id']?></th>
							<th><?= $value['Name']?></th>
							<?php
							if($value['Privilege'] == 1)
								echo "<th>NORMAL</th>";
							else if($value['Privilege'] == 2)
								echo "<th>GREAT</th>";						
							else if($value['Privilege'] == 3)
								echo "<th>ALL</th>"; 
							?>
							<th><form action="" method="POST"><input type="submit" name="" value="byby" disabled></form></th>
						</tr>
					<?php } ?>
				</tbody>
			</table> 
			<?php
		} catch(PDOException $e){			
			echo "Connection failed: " . $e->getMessage();
		}
		?>
	</div>

	<div class="VIEWPOINT" id="SETDIV3">
		<form>
			<fieldset>
				<legend><h2>Change Password</h2></legend>
				<input type="text" name="" placeholder="current Password" /><br/>
				<input type="text" name="" placeholder="new Password" /><br/>
				<input type="submit" name="">
			</fieldset>
		</form>
	</div>

	<div class="VIEWPOINT" id="SETDIV4">
		처음페이지4
	</div>

	<div class="VIEWPOINT" id="SETDIV5">
		<form>
			<fieldset>
				<legend><h2>Withdrawal</h2></legend>
				<p>IF you really want to delete this web page?</p>
				<label>YES, I hate this page:<input type="checkbox" name="" /></label>
				<input type="submit" name="" / value="QUIT">
			</fieldset>
		</form>
	</div>

	<div class="VIEWPOINT" id="SETDIV6">
		<?php
		try{ ?>
			<h2>CURRENT PUBLICATIONS_SECTION</h2>
			<table>
				<thead>
					<thead>TYPE</thead>
				</thead>
				<tbody>
					<?php
					$stmt = $conn->prepare("SELECT * FROM publications_type");
					$stmt->execute();
					foreach ($stmt->fetchAll() as $key => $value) { ?>
						<th><?=$value['Type']?></th>
					<?php } ?>
				</tbody>
			</table>
			<hr/>
			<form>
				<fieldset>
					<legend>ADD NEW TYPE</legend>
					<input type="text" name="" placeholder="new TYPE" />
					<input type="submit" name="" />
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
					<thead>TYPE</thead>
				</thead>
				<tbody>
					<?php
					$stmt = $conn->prepare("SELECT * FROM gallery_type");
					$stmt->execute();
					foreach ($stmt->fetchAll() as $key => $value) { ?>
						<th><?=$value['Type']?></th>
					<?php } ?>
				</tbody>
			</table>
			<hr/>
			<form>
				<fieldset>
					<legend>ADD NEW TYPE</legend>
					<input type="text" name="" placeholder="new TYPE" />
					<input type="submit" name="" />
				</fieldset>
			</form>
			<?php
		} catch(PDOException $e){			
			echo "Connection failed: " . $e->getMessage();
		}
		?>
	</div>

	<div class="VIEWPOINT" id="SETDIV8">
		처음페이지8
	</div>

	<?php
	include "../resource/footer.php";
	?>
</body>
</html>