<!--ADMIN CASH DONATION PAGE UPDATE FORM TO SQL FUNCTION -->
<?php
//from previous lesson
$id = empty($_POST["txtid"])?"":$_POST["txtid"];
$firstName= (!empty($_POST["firstName"]))?$_POST["firstName"]:"";
$lastName= (!empty($_POST["lastName"]))?$_POST["lastName"]:"";
$email= (!empty($_POST["email"]))?$_POST["email"]:"";
$contactNum= (!empty($_POST["contactNum"]))?$_POST["contactNum"]:"";
$receipt= (!empty($_POST["receipt"]))?$_POST["receipt"]:"";
$foodBankLocation = (!empty($_POST["foodBankLocation"]))?$_POST["foodBankLocation"]:"";
$date = (!empty($_POST["date"]))?$_POST["date"]:"";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodbridge";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE cashdonation SET
firstName='$firstName',
lastName='$lastName',
email='$email',
contactNum='$contactNum',
receipt='$receipt',
foodBankLocation='$foodBankLocation',
date='$date'
WHERE id=$id;";

echo $sql;

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>



<html>
  <head>
    <style>

   #redirect {
border: 2px solid black;
background-color:#f1f1f1;
padding: 10%;
}
button:hover
	 {
    transition: 0.5s;
	 background-color:lightgreen;
	 font-size:20px;
	 padding: 20px 20px;
	 font-family:franklin gothic;
	 
   width: 80%;
   height: 8%;
	 }
button
	 {
    transition: 0.5s;
	 background-color:white;
	 font-size:20px;
	 padding: 10px 10px;
	 font-family:franklin gothic;
	 
   width: 50%;
   height: 4%;
	 }
    </style>
  </head>
  <br>
<div align="center" id="redirect">
<h2> Back to Cash Donation Admin Home Page<h2>
  <button onclick="location.href ='AdminPg4b.php'"; >Redirect Back</button>
  </div>
</html>