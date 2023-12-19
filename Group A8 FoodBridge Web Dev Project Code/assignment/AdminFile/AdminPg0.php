<?php

$sname= "localhost";
$unmae= "root";
$pwd = "";

$db_name = "foodbridge";

$conn = mysqli_connect($sname, $unmae, $pwd, $db_name);

if (!$conn) {
	echo "Connection failed!";
}