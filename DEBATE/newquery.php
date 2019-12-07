<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>upload query</title>
	<link rel="stylesheet" type="text/css" href="../common/styles/newquery.css" />
	<link rel="stylesheet" type="text/css" href="../common/styles/bootstrap.min.css">
</head>
<body>
	<header role="banner">
		<div class="container">
			<nav role="navigation">
				<div id="logo" class="pull-left"><a href="/"><img src="../common/images/selab_logo_S.png" /></a></div>
			</nav>
		</div>
	</header>

	<main>
		<div class="contents">
			<h1>질문등록</h1>
			<form action="">
				<div class="btn-group-toggle" data-toggle="buttons" id="tag">
					<?php
					$tagnum = $_GET["tagnum"];
					for ($i=0; $i < $tagnum; $i++) { ?>
					<label class="btn btn-primary">
						<input type="checkbox"> Checkbox
					</label>
					<?php } ?>
				</div>
				<div>
					<textarea autofocus rows="20" cols="100" placeholder="Type your query."></textarea>
				</div>
				<div class="overlap-height">
					<input type="checkbox" name="anonymous" /> 익명
				</div>
				<div class="contents">
					<input type="submit" value="등록" class="btn btn-info BUT" />
					<input type="button" value="취소" class="btn btn-info BUT" />
				</div>
			</form>
		</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="../common/js/bootstrap.min.js"></script>
</body>
</html>