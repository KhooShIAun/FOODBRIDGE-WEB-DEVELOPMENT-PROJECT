<!--ADMIN FOOD DONATION PAGE UPDATE FORM TO SQL FUNCTION -->
<?php
//from previous lesson
$id = empty($_POST["txtid"])?"":$_POST["txtid"];
$firstName= (!empty($_POST["firstName"]))?$_POST["firstName"]:"";
$lastName= (!empty($_POST["lastName"]))?$_POST["lastName"]:"";
$contact= (!empty($_POST["contact"]))?$_POST["contact"]:"";
$email= (!empty($_POST["email"]))?$_POST["email"]:"";
$pick_up_location= (!empty($_POST["pick_up_location"]))?$_POST["pick_up_location"]:"";
$state = (!empty($_POST["state"]))?$_POST["state"]:"";
$foodDescription= (!empty($_POST["foodDescription"]))?$_POST["foodDescription"]:"";
$category = isset($_POST["category"])?$_POST["category"]:"";
$totalWeight = (!empty($_POST["totalWeight"]))?$_POST["totalWeight"]:"";
$collectionTime = (!empty($_POST["collectionTime"]))?$_POST["collectionTime"]:"";
$collectionDate = (!empty($_POST["collectionDate"]))?$_POST["collectionDate"]:"";
$foodBankLocation = (!empty($_POST["foodBankLocation"]))?$_POST["foodBankLocation"]:"";

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

$sql = "UPDATE fooddonation SET
firstName='$firstName',
lastName='$lastName',
contact='$contact',
email='$email',
pick_up_location='$pick_up_location',
state='$state',
foodDescription='$foodDescription',
category='$category',
totalWeight='$totalWeight',
collectionTime='$collectionTime',
collectionDate='$collectionDate',
foodBankLocation='$foodBankLocation'
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
<h2> Back to Food Donation Admin Home Page<h2>
  <button onclick="location.href ='AdminPg3b.php'"; >Redirect Back</button>
  </div>
</html>
