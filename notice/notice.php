<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Software Engineering Lab - Notice</title>
  <link rel="stylesheet" type="text/css" href="../resource/css/common.css" />
  <link rel="stylesheet" type="text/css" href="css/notice.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/notice.js"></script>
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
      <h1>NOTICE</h1>
    </div>

    <?php if($filter){?>
      <button onclick="location.href='newnotice.php'">NEW NOTICE</button>
    <?php } ?>  
    <!-- 공지사항의 내용을 테이블로 구현하는 골격입니다. -->
    <table>
      <caption>NOTICE INDEX</caption>
      <thead>
        <tr>
          <th>Notice number</th>
          <th>Title</th>
          <th>name</th>
          <th>date</th>
          <?php if($filter){ ?>
            <th>delete</th>
            <th>open/unopen</th>
          <?php } ?>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "select * from notice";
        $stmt = $conn -> prepare($sql);
        $stmt -> execute();
        $stmt -> setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $stmt->fetch()) {
          if($row['Open'] == 0 && !$filter)
            continue;
          ?>
          <tr class="table_out" id="<?=$row['Number']?>" >
            <th><?=$row['Number']?></th>
            <td><?=$row['Title']?></td>
            <td><?=$row['Name']?></td>
            <td><?=$row['Date']?></td>
            <?php if($filter){ ?>
              <th>
                <form action="deletenotice.php" method="POST">
                  <input type="hidden" name="id" value="<?=$row['Number']?>" />
                  <input type="submit" value="delete" />
                </form>
              </th>
              <th>
                now : <?=tostringboolean($row['Open'],"open","lock")?>
                <form action="changeopen.php" method="POST">
                  <input type="hidden" name="id" value="<?=$row['Number']?>" />
                  <input type="submit" value="change" />
                </form>
              </th>
            <?php } ?>
          </tr>
          <tr class="table_contents" id="content_<?=$row['Number']?>" >
            <td colspan="4"><?=$row['Content']?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>


  </div>
</main>


<?php
include "../resource/footer.php";
?>

</body>
<?php $conn = null; // disconnect db ?> 
</html>
