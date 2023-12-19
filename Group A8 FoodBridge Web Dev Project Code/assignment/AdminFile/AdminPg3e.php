<!--ADMIN FOOD DONATION PAGE DELETE DATA FUNCTION FROM SQL-->
<?php
//from previous lesson
$id= isset($_GET["id"])?$_GET["id"]:"";
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
$sql = "DELETE FROM fooddonation WHERE id=$id;";
if (mysqli_query($conn,$sql)) {
  echo "Record deleted successfully";
}else {
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
