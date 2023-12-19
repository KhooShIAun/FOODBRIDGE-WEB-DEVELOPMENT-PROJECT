<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php 
}else{
     header("Location: AdminPg1.php");
     exit();
}
 ?>

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
   backdrop-filter: blur(10px);
   
}

button:hover
	 {
    transition: 0.2s;
	 background-color:lightgreen;
	 
	 padding: 10px 10px;
	 font-family:franklin gothic;
	 border-radius:20px;
   width: 50%;
   color: white;
	 }

button
	 {
    border: solid transparent;
    transition: 0.2s;
	 background-color:white;
	 font-size: 15px;
	 padding: 10px 10px;
	 font-family:franklin gothic;
	 border-radius:20px;
   width: 40%;
   background-color:lightgreen;
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


.container {
padding: 50px;

border-radius: 50px;
background-color: rgb(243, 243, 243);
backdrop-filter: blur(10px);

}

            

            </style>
    </head>

    <body>
      
        <!--Vaycay Logo-->
<div align="center "class="logo">
    <img style= border-radius:10%; src="https://i.pinimg.com/originals/ff/35/b4/ff35b4ff6b0fa6e1420046defcea9ac0.png" alt="LOGO" width="100" height="100">
</div>
<div align="center "class="navigation" >
    <nav>
        <hr>
       
        <h1>Welcome, <?php echo $_SESSION['name']; ?></h1>
        <h4>Admin ID: <?php echo $_SESSION['id']; ?></h4>
        <h4>Email: <?php echo $_SESSION['user_name']; ?></h4>
        <h4>Full Name: <?php echo $_SESSION['name']; ?></h4>
        <h4>Date of Birth: <?php echo $_SESSION['dob']; ?></h4>
        <h4>Contact: 0<?php echo $_SESSION['contactNum']; ?></h4>
        <h4>Gender: <?php echo $_SESSION['gender']; ?></h4>
        <h4>Address: <?php echo $_SESSION['address']; ?></h4>
        <h4>State: <?php echo $_SESSION['state']; ?></h4>
        <h4>To Edit Details please contact our HR Department 03-5688-6400</h4>
        <button onclick="location.href ='AdminPg1b.php'";  class="redirect">Logout</button>
       <br><br>

    </nav>
    
</div>
<br><br><br>
<div align="center"class="container">

<button onclick="location.href ='AdminPg3b.php'";  class="redirect">Food Donation Admin Page</button>
<br><br>
<button onclick="location.href ='AdminPg5.php'";  class="redirect">Feedback Admin Page</button>
<br><br>
<button onclick="location.href ='AdminPg4b.php'";  class="redirect">Cash Donation Admin Page</button>
</div>





    </body>
</html>