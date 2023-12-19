<?php

$user_name = (!empty($_POST["user_name"])) ? $_POST["user_name"] : "";
$pwd = (!empty($_POST["pwd"])) ? $_POST["pwd"] : "";
$name = (!empty($_POST["name"])) ? $_POST["name"] : "";
$dob = (!empty($_POST["dob"])) ? $_POST["dob"] : "";
$contactNum = (!empty($_POST["contactNum"])) ? $_POST["contactNum"] : "";
$gender = (!empty($_POST["gender"])) ? $_POST["gender"] : "";
$address = (!empty($_POST["address"])) ? $_POST["address"] : "";
$state = (!empty($_POST["state"])) ? $_POST["state"] : "";

// set-up
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "foodbridge";

// Create connection
$conn = mysqli_connect($servername, $db_username, $db_password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO admindetails (user_name, pwd, name, dob, contactNum, gender, address, state) 
VALUES
('$user_name','$pwd', '$name', '$dob','$contactNum','$gender','$address','$state');";

// echo $sql;

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<?php include "AdminPg0.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<style>

form {
            border: 3px solid #f1f1f1;
            border-radius: 50px;
          }
          

          /* Full-width inputs */
          input[type=text]:hover, input[type=password]:hover, input[type=email]:hover{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 20px;;
            background-color: lightgreen;
            transition: 0.5s;
          }
          input[type=text], input[type=password], input[type=email] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 20px;
            transition: 0.5s;
          }
          
          /* Set a style for all buttons */
          button {
            background-color: rgb(250, 235, 215,20);
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 20px;;
            transition: 0.5s;
          }
          
          /* Add a hover effect for buttons */
          button:hover {
            transition: 0.5s;
            opacity: 0.8;
            background-color: lightgreen;
          }
          
          /* Extra style for the cancel button (red) */
          .cancelbtn:hover{
            width: auto;
            padding: 10px 18px;
            background-color: #ff1100;
            transition: 0.5s;
          }
          .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f7877f;
            transition: 0.5s;
          }
          
        
        
          
          /* Add padding to containers */
          .container {
            padding: 16px;
            border-bottom: 20px;
            border-radius: 50px;
          }
          
          /* The "Forgot password" text */
          span.password {
            float: right;
            padding-top: 16px;
          }
          .sign_up {
              width: 30%;
              background-color: lightgreen;
            }
       


        
    </style>
</head>
<body>
     <form action="AdminPg1a.php" method="post">
     <div align="center" class="logo">
          <img src="https://i.pinimg.com/originals/ff/35/b4/ff35b4ff6b0fa6e1420046defcea9ac0.png" alt="LOGO" width="200" height="200">
        </div>
     <div align="center" class="container">
        
     	<h2>Log In</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email</label>
     	<input type="text" name="uname" placeholder="Email"><br>

     	<label>Password</label>
     	<input type="password" name="pwd" placeholder="Password"><br>

     	<button type="submit">Login</button>

       <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
          <div align="center" class="container" style="background-color:#f1f1f1">
          <button onclick="location.href ='AdminPg1.html'" type="button" class="cancelbtn">Cancel</button>
          <button onclick="location.href ='AdminPg2.html'" type="button" class="sign_up">New Admin? Sign Up Now!</button>
          
        </div>
      </div>

     </form>
</body>
</html>
