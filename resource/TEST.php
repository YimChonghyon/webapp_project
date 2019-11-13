<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>hello</title>
</head>
<body>
	<?php
	echo "<table style='border: solid 1px black;'>";
	echo "<tr></tr>";

	class TableRows extends RecursiveIteratorIterator { 
		function __construct($it) { 
			parent::__construct($it, self::LEAVES_ONLY); 
		}

		function current() {
			return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
		}

		function beginChildren() { 
			echo "<tr>"; 
		} 

		function endChildren() { 
			echo "</tr>" . "\n";
		} 
	} 
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "world";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT * FROM city"); 
		$stmt->execute();

		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
		foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
			echo $v;
		}
	}
	catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}

	$conn = null;
	echo "</table>";
	?>

</body>
</html>