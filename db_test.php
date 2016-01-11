<?php

// Report all PHP errors (see changelog)
error_reporting(E_ALL);

$html_head = <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>

EOD;

echo $html_head;
echo "<h1>DB test</h1>";

$db_server = "192.168.1.35";
$db_user = "temp";
$db_pass = "temp";
$db_name = "temp";


$mysqli = mysqli_connect($db_server, $db_user, $db_pass, $db_name) or die(mysqli_error($mysqli));

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$res = mysqli_query($mysqli, "SELECT * from sensor_log");


echo "<table>\n";

while ($row = mysqli_fetch_array($res)){
	printf ("<tr><td>".$row["id"]."</td><td>".$row["timestamp"]."</td><td>".$row["temp"]."</td><td>".$row["humidity"]."</td><td>".$row["sensor_id"]."</td></tr>\n");
}


echo "</table>";

?>
