<?php

// Report all PHP errors (see changelog)
error_reporting(E_ALL);

echo "DB test";

$mysqli = mysqli_connect("tower", "user", "password", "database");
$res = mysqli_query($mysqli, "SELECT 'Please, do not use ' AS _msg FROM DUAL");
$row = mysqli_fetch_assoc($res);
echo $row['_msg'];

?>
