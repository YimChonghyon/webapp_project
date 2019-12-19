<?php
include "../resource/DB_connect.php";
$conn = connect();
$stmt = $conn->prepare("select * from tag");
$stmt -> execute();
$result = $stmt -> fetchAll();

print "{\n  \"tags\": [\n";
$type = 1;
foreach ($result as $key => $value) {
	if($type == 0)
		print ",\n";
	else
		$type = 0;
	print "\"" .  $value['Type'] . "\"";
}
print "\n  ]\n}\n";
?>