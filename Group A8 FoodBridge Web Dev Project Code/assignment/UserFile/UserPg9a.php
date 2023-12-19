<?php
header ("Location: " . 'UserPg1.php');

$firstName = empty($_POST["firstName"])?"":$_POST["firstName"];
$lastName= (!empty($_POST["lastName"]))?$_POST["lastName"]:"";
$feedback = isset($_POST["feedback"])?$_POST["feedback"]:"";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodbridge";

$url = "UserPg1.php";


	//Database connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
	
$sql = "INSERT INTO feedback (firstName, lastName, feedback) VALUES
		('$firstName','$lastName','$feedback');";

//echo $sql;


if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);

sleep(2);

?>