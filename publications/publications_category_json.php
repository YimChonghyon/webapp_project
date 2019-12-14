<?php
include "../resource/DB_connect.php";
$conn = connect();
$stmt = $conn->prepare("select type from publications_type");
$stmt -> execute();
$result = $stmt -> fetchAll();

print "{\n  \"categorys\": [\n";
$type = 1;
foreach ($result as $key => $value) {
	if($type == 0)
		print ",\n";
	else
		$type = 0;
	print '"' . $value['type'] . '"';
}
print "\n  ]\n}\n";
?>