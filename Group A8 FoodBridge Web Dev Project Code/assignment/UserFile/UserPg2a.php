<?php

$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$email = filter_input(INPUT_POST, 'email');
$contactNum = filter_input(INPUT_POST, 'contactNum');
$receipt = filter_input(INPUT_POST, 'receipt');
$foodBankLocation = filter_input(INPUT_POST, 'foodBankLocation');
$date = filter_input(INPUT_POST, 'date');


//if else section 

if(!empty($firstName))
{
    if(!empty($lastName))
    {

    }
    else
    {
        echo " Last Name should not be empty";
        die();
    }
        if(!empty($email))
        {

        }
        else
        {
        echo " Email should not be empty";
        die();
        }
            if(!empty($contactNum)) 
            {

            }
            else
            {
            echo " Contact Number should not be empty";
            die();
            }
               if(!empty($receipt))             
               {

               }
               else
               {
               echo " Receipt should not be empty";
               die();
               }   
                  if(!empty($foodBankLocation)) 
                  {

                  }
                  else
                  {
                  echo " State should not be empty";
                  die();
                  }   
                     
                                    if(!empty($date))
                                    {
                                        $host = "localhost";
                                        $dbusername = "root";
                                        $dbpassword = "";
                                        $dbname = "foodbridge";


                                        //Connection to SQL 
                                        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
                                        if (mysqli_connect_error()){
                                            die('Connect Error ('. mysqli_connect_errno().')'
                                            .mysqli_connect_error());
                                        }
                                        else {
                                            $sql = "INSERT INTO cashdonation (firstName, lastName, email, contactNum, receipt, foodBankLocation, date)
                                            values ('$firstName', '$lastName', '$email', '$contactNum', '$receipt', '$foodBankLocation', '$date')";
                                            if ($conn->query($sql)){
                                                echo "-";

                                            }
                                            else{
                                                echo "Error: ".$sql ."<br>". $conn->error;

                                            }
                                            $conn->close();
                                        }

                                    }
                                    else
                                    {
                                    echo " Food Bank Location should not be empty";
                                    die();
                                    }
            
    
}
else
{
    echo " First Name should not be empty";
    die();
}

?>

<html>
	<head>
	
		
		<title>UserPg9</title>
		
			<!--Style-->
			<style>
				.logo{
					background-color:antiquewhite;
					margin:0px;
					padding:10px;
				}
				
				.navigation{
					background-color:antiquewhite;
					padding:15px;
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
				
				
				.main-block{
					padding:5px 25px;
					background-color:antiquewhite;
					border-radius:150px;
					height:600px;
					width:900px;
					margin:auto;
					border:solid transparent 5px;
				}
				
				.main-block p{
					font-size:40px;
					border: solid white;
					border-radius:50px;
					width:600px;
					height:60px;
					padding-top:15px;
					margin:20px;
					background-color:white;
				}
				
				.name input[type="text"]{
					background-color:white;
					border:solid transparent;
					border-radius:10px;
					margin:0px 25px;
					width:300px;
					height: 40px;
					text-align:center;
					transition: 0.2s;
				}
				.name input[type="text"]:hover{
					transition: 0.2;
					background-color:lightgreen;
					border:solid transparent;
					border-radius:10px;
					margin:0px 25px;
					width:400px;
					height: 40px;
					text-align:center;
				}
				textarea:hover{
					transition: 0.2s;
					resize:none;
					border-radius:50px;
					text-align:center;
					display: inline-block;
					width:500px;
					background-color: lightgreen;
				}
				
				textarea{
					transition: 0.2s;
					resize:none;
					border-radius:50px;
					text-align:center;
					display: inline-block;
					width:400px;
				}
				

				
			</style>
			
	</head>

	<body>
	
						<!--FoodBridge Logo-->
		<div align="center "class="logo">
			<img style= border-radius:10%; src="https://i.pinimg.com/originals/ff/35/b4/ff35b4ff6b0fa6e1420046defcea9ac0.png" alt="LOGO" width="200" height="200">
		</div>
		
						<!-- Donation Button-->
		<div align="center" class="navigation">
			<nav>
				<hr>
					<button onclick="location.href ='UserPg2.html'"; id="cash_donation_page" class="redirect">Cash Donation</button>
					<button onclick="location.href ='UserPg1.php'";  class="redirect">Home</button>

					<button onclick="location.href ='UserPg3.html'"; id="food_donation_page" class="redirect">Food Donation</button>
			</nav>
		</div>
	
		<br><br><br>
	
		<div align="center" class="main-block">
			<p>THANK YOU</p>

		<form id="feedback" name="feedback" action="UserPg9a.php" method="post">

		<div align="center" class="name">
			<input type="text" id="firstName" name="firstName" placeholder="First Name" required>

			<input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
		</div>

		<br>

		<div align="center" class="textarea">
			<textarea id="feedback" name="feedback" rows="20" cols="50" placeholder="Feedback" required></textarea>
		</div>

		<br><br><br>

		<div align="center" class="button">
		<button>Submit</button>
		
		
		</form>
		
		</div>
		</div>
	
	
	
	

	
	</body>



</html>