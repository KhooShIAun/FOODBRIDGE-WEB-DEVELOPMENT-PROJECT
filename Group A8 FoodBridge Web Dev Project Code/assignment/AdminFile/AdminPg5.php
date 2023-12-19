<!--ADMIN FOOD DONATION PAGE -->
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


.food_donation {
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
        <button onclick="location.href ='AdminPg4b.php'";  class="redirect">Cash Donation Admin Page</button>
        <button onclick="location.href ='AdminPg1c.php'";  class="redirect">Home</button>
        <button onclick="location.href ='AdminPg3b.php'";  class="redirect">Food Donation Admin Page</button>
        <br><br>
       
    </nav>
</div>


<br><br><br>

<!--Main Body of the page -->
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

   $sql = "SELECT * FROM feedback;";

else

   $sql="select * FROM feedback WHERE firstName LIKE '%$key%' 
   OR id LIKE '%id%';
   OR firstName LIKE '%$key%' 
   OR lastName LIKE '%$key%' 
   OR feedback LIKE '%$key%'';";

   
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
 // output data of each row
while($row=mysqli_fetch_assoc($result)) {
?>


   <p> 
   User ID: <?php echo $row["id"]?><br>
   First Name: <?php echo $row["firstName"]?><br>
   Last Name: <?php echo $row["lastName"]?><br>
   Feedback: <?php echo $row["feedback"]?><br>

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



</body>
</html>