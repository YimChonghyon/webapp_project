<?php
session_start();
session_destroy();

echo "<script>window.history.go(-1);</script>";
?>
<meta http-equiv="refresh" content="0;url=../index.php" />