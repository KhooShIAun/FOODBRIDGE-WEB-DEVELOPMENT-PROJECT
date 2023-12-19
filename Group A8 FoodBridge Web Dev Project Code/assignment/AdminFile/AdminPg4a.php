<!--ADMIN CASH DONATION PAGE NEW EDIT RECORD -->
<?php
//from previous lesson
$firstName= (!empty($_POST["firstName"]))?$_POST["firstName"]:"";
$lastName= (!empty($_POST["lastName"]))?$_POST["lastName"]:"";
$email= (!empty($_POST["email"]))?$_POST["email"]:"";
$contactNum= (!empty($_POST["contactNum"]))?$_POST["contactNum"]:"";
$receipt= (!empty($_POST["receipt"]))?$_POST["receipt"]:"";
$foodBankLocation = (!empty($_POST["foodBankLocation"]))?$_POST["foodBankLocation"]:"";
$date = (!empty($_POST["date"]))?$_POST["date"]:"";


//set-up
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

$sql = "INSERT INTO cashdonation (firstName, lastName, email, contactNum, receipt, foodBankLocation, date) VALUES
('$firstName','$lastName','$email','$contactNum','$receipt','$foodBankLocation','$date');";

//echo $sql;

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
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
