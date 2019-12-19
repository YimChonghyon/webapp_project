<?php
include "../resource/DB_connect.php";
$conn = connect();
$stmt = $conn->prepare("select * from debate order by date desc");
$stmt -> execute();
$result = $stmt -> fetchAll();

$stmt2 = $conn->prepare("select * from debate_tag where Debate_number = :number");
$stmt2 -> bindParam(":number",$number);
$stmt3 = $conn->prepare("select * from reply where Debate_number = :number");
$stmt3 -> bindParam(":number",$number);

print "{\n  \"debates\": [\n";
$type = 1;
foreach ($result as $key => $value) {
	$number = $value['Debate_number'];
	$stmt2 -> execute();
	$result2 = $stmt2 -> fetchAll();
	$stmt3 -> execute();
	$result3 = $stmt3 -> fetchAll();
	if($type == 0)
		print ",\n";
	else
		$type = 0;
	print "\t{";
	print "\"number\": \"" . $number . "\", ";
	print "\"title\": \"" . $value['Title'] . "\", "; 
	print "\"name\": \"" . $value['Name'] . "\", ";
	print "\"date\": \"" . date("m/d H:i",strtotime($value['Date'])) . "\", ";
	print "\"content\": \"" . $value['Content'] . "\", ";
	print "\"wanted\": \"" . $value['Wanted'] . "\", ";
	print "\"password\": \"" . $value['Password'] . "\",";
	print "\"tags\": [";
	$dtype = 1;
	foreach ($result2 as $key => $value) {
		if($dtype == 0)
			print ",\n";
		else
			$dtype = 0;
		print "\"" . $value['Type'] . "\"";
	}
	print "],";
	print "\"replys\": [";
	$dtype = 1;
	foreach ($result3 as $key => $value) {
		if($dtype == 0)
			print ",\n";
		else
			$dtype = 0;
		print "\t{";
		print "\"number\": \"" . $value['Reply_number'] . "\", ";
		print "\"name\": \"" . $value['Name'] . "\", ";
		print "\"date\": \"" . $value['Date'] . "\", ";
		print "\"content\": \"" . $value['Content'] . "\", ";
		print "\"password\": \"" . $value['Password'] . "\",";
		print "\"like\": \"" . $value['Likes'] . "\"";
		print "}";
	}
	print "]";

	print "}";
}
print "\n  ]\n}\n";
?>