<!--ADMIN CASH DONATION PAGE -->
<html>
    <head>

        <title>Food Donation</title>

        <style>
/*Start of Title CSS*/
.logo{
   
   margin:auto;
   background-color: antiquewhite;
 padding: 10px;
}


.navigation{
   background-color: rgb(250, 235, 215);
   padding: 1px;
}

button
	 {
    transition: 0.2s;
	 background-color:lightgreen;
	 font-size:15px;
	 padding: 10px 10px;
	 font-family:franklin gothic;
	 border-radius:30px;
   width: 20%;
   border:solid transparent;
	 }
	 
	 button:hover
	 {
    transition: 0.2s;
    background-color:lightgreen;
	 font-size:15px;
   color:white;
	 padding: 10px 10px;
	 font-family:franklin gothic;
	 border-radius:30px;
   cursor:grab;
   width: 30%;
   border:solid transparent;
	 }



   input[type=text]:hover, input[type=password]:hover, input[type=date]:hover,input[type=tel]:hover,input[type=email]:hover,input[type=email]:hover, #category:hover, #totalWeight:hover, #foodBankLocation:hover, #collectionTime:hover ,input[type=file]:hover {
width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: lightgreen;
border-radius: 20px;
transition: 0.5s;
}

input[type=text], input[type=password], input[type=date],input[type=tel],input[type=email],input[type=email], #category, #totalWeight, #collectionTime , #foodBankLocation,input[type=file] {
width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: #f1f1f1;
border-radius: 20px;
transition: 0.5s;
}

input[type=submit]:hover{
  width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
color: white;
background-color: green;
border-radius: 20px;
cursor: grab;
transition: 0.5s;
}


input[type=submit]{
  width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: #f1f1f1;
background-color: lightgreen;
border-radius: 20px;
cursor: grab;
transition: 0.5s;
}


.cash_donation {
padding: 50px;
border: 2px solid black;
border-radius: 50px;


}

.infoWrapper {
	background-color:antiquewhite;
	border-radius:10px;
	padding:10px;
	width:600px;
}

            
            
            </style>
    </head>

    <body>
        <!--Vaycay Logo-->
<div align="center "class="logo">
    <img style= border-radius:10%; src="https://i.pinimg.com/originals/ff/35/b4/ff35b4ff6b0fa6e1420046defcea9ac0.png" alt="LOGO" width="200" height="200">
</div>
<div align="center "class="navigation" >
    <nav>
        <hr>
       
        <button onclick="location.href ='AdminPg3b.php'";  class="redirect">Food Donation Admin Page</button>
        <button onclick="location.href ='AdminPg1c.php'";  class="redirect">Home</button>
        <button onclick="location.href ='AdminPg5.php'";  class="redirect">Feedback Admin Page</button>

        <br><br>
       
    </nav>
</div>


<br><br><br>

<?php

$key="";

if(isset($_POST['submit'])&& $_POST['submit']=="Go"){

   $key=$_POST['search'];

}

?>

<form name="fSearch" id="fSearch" action="AdminPg4b.php" method="POST">

Search: <input type="text" name="search" value="<?php echo $key;?>">

<input type="submit" name="submit" value="Go">

</form>
<div class="infoWrapperWrapper" align="center">
<div class="infoWrapper">
<?php
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


if($key=="")

   $sql = "SELECT * FROM cashdonation;";

else

   $sql="select * FROM cashdonation WHERE
   firstName LIKE '%$key%' 
   OR lastName LIKE '%$key%' 
   OR email LIKE '%$key%' 
   OR foodBankLocation LIKE '%$key%';";

   
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
 // output data of each row
while($row=mysqli_fetch_assoc($result)) {
?>


   <p> 
   First Name: <?php echo $row["firstName"]?><br>
   Last Name: <?php echo $row["lastName"]?><br>
   Email: <?php echo $row["email"]?><br>
   Contact: <?php echo $row["contactNum"]?><br>
   Receipt: <?php echo $row["receipt"]?><br>
   Food Bank Location: <?php echo $row["foodBankLocation"]?><br>
   Date: <?php echo $row["date"]?><br>
   Action: <a href="AdminPg4c.php?id=<?php echo $row["id"]?>">edit</a> 
   <a href="AdminPg4e.php?id=<?php echo $row["id"]?>">delete</a> <br>
   </p>
 
<?php
 }
} else {
 echo "0 results";
}
mysqli_close($conn);
?>
</div>
</div>

<div class="addButton" align="center">
<h3> <a href="AdminPg4.php">Add</a></h3>
</div>

</body>
</html>