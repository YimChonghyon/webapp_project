<!DOCTYPE html>
<html>
<head>
  <title>Add publication</title>
  <link rel="stylesheet" type="text/css" href="css/newpublication.css" />
  <link rel="stylesheet" type="text/css" href="../resource/css/common.css" />
  <script type="text/javascript" src="js/newpublication.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js" type="text/javascript"></script>
</head>

<body>
  <?php
  include "../resource/nav.php";
  ?>
  <form action="registerpublication.php" method="POST">
    <fieldset>
      <legend>Publication Upload</legend>
      <div id="contents">
        <select name="category" id="category"></select>
        <input type="text" name="title" placeholder="Title"><br>
        <input id="url" type="text" name="url" placeholder="URL"><br>
      </div>
      <input type="submit" name="" value="Submit">
    </fieldset>
  </form>
</body>
</html>
