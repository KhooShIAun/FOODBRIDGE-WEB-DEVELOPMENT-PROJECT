<!--ADMIN FOOD DONATION PAGE EDIT FORM FUNCTION -->
<?php
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

$sql = "SELECT * FROM fooddonation WHERE id=$id;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	$id=$row["id"];
	$firstName=$row["firstName"];
	$lastName=$row["lastName"];
	$contact=$row["contact"];
	$email=$row["email"];
	$pick_up_location=$row["pick_up_location"];
	$state=$row["state"];
	$foodDescription=$row["foodDescription"];
	$category=$row["category"];
	$totalWeight=$row["totalWeight"];
	$collectionTime=$row["collectionTime"];
	$collectionDate=$row["collectionDate"];
	$foodBankLocation=$row["foodBankLocation"];

  }
} 
mysqli_close($conn);
?>


<!DOCTYPE html>
<html>

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

button:hover
	 {
    transition: 0.5s;
	 background-color:lightgreen;
	 font-size:20px;
	 padding: 2px 10px;
	 font-family:franklin gothic;
	 border-radius:20px;
	 }

button
	 {
    transition: 0.5s;
	 background-color:white;
	 font-size:20px;
	 padding: 2px 10px;
	 font-family:franklin gothic;
	 border-radius:20px;
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
        <button onclick="location.href ='AdminPg3b.php'";  class="redirect">Back</button>
       
        <br><br>
       
    </nav>
</div>


<br><br><br>

        <form id="fooddonation" name="fooddonation" action="AdminPg3d.php" method="POST">
		
		

		
            <div align="center" class="food_donation" >
                <!-- food donation form -->
                <h1>Food Donation Form</h1>
				
				ID
		        <input type="text"  id="txtid" name="txtid" maxlength="30" readonly value="<?php echo $id?>"><br>
				
                <label for="firstName" >First Name</label><br>
                <input type="text" id="firstName" name="firstName" placeholder="Enter First Name" value="<?php echo $firstName?>">
                <br><br>
                <label for="lastName">Last Name</label><br>
                <input type="text" id="lastName" name="lastName" placeholder="Enter Last Name" value="<?php echo $lastName?>">

                <br><br>
                <label for="contact">Enter your contact number:</label><br>
                <input type="tel" id="contact" name="contact"  placeholder="Enter Contact Number" value="<?php echo $contact?>">
                
                <br><br>
				<label for="email">Enter your email:</label><br>
                <input type="email" id="email" name="email" placeholder="Enter Email" value="<?php echo $email?>">

                <br><br>

                <address>
                    <label for="pick_up_location">Enter Pick Up Location Address</label><br>
                    <input type="text" id="pick_up_location" name="pick_up_location" placeholder="Pick up location" value="<?php echo $pick_up_location?>">
                    <!--- Malaysia states -->
                    <br>
                    <br>
                    <label for="state">State</label><br>
                <select id="state" name="state">
				
                <option value="Penang" 
				<?php if($state=="Penang"){?>
				selected
				<?php }?>
				>Penang</option>
				
                <option value="Kedah"
				<?php if($state=="Kedah"){?>
				selected
				<?php }?>
				>Kedah</option>
				
                <option value="Kelantan"
				<?php if($state=="Kelantan"){?>
				selected
				<?php }?>
				>Kelantan</option>
				
                <option value="Kuala Lumpur"
				<?php if($state=="Kuala Lumpur"){?>
				selected
				<?php }?>
				>Kuala Lumpur</option>
				
                <option value="Labuan"
				<?php if($state=="Labuan"){?>
				selected
				<?php }?>
				>Labuan</option>
				
                <option value="Melaka"
				<?php if($state=="Melaka"){?>
				selected
				<?php }?>
				>Melaka</option>
				
                <option value="Negeri Sembilan"
				<?php if($state=="Negeri Sembilan"){?>
				selected
				<?php }?>
				>Negeri Sembilan</option>
				
                <option value="Pahang"
				<?php if($state=="Pahang"){?>
				selected
				<?php }?>
				>Pahang</option>
				
                <option value="Johor"
				<?php if($state=="Johor"){?>
				selected
				<?php }?>
				>Johor</option>
				
                <option value="Perak"
				<?php if($state=="Perak"){?>
				selected
				<?php }?>
				>Perak</option>
				
                <option value="Perlis"
				<?php if($state=="Perlis"){?>
				selected
				<?php }?>
				>Perlis</option>
				
                <option value="Putrajaya"
				<?php if($state=="Putrajaya"){?>
				selected
				<?php }?>
				>Putrajaya</option>
				
                <option value="Sabah"
				<?php if($state=="Sabah"){?>
				selected
				<?php }?>
				>Sabah</option>
				
                <option value="Sarawak"
				<?php if($state=="Sarawak"){?>
				selected
				<?php }?>
				>Sarawak</option>
				
                <option value="Selangor"
				<?php if($state=="Selangor"){?>
				selected
				<?php }?>
				>Selangor</option>
				
                <option value="Terengganu"
				<?php if($state=="Terengganu"){?>
				selected
				<?php }?>
				>Terengganu</option>
				
                </select>
                </address>
                
                <br>
                <label for="foodDescription">Food Description</label><br>
                <input type="text" id="foodDescription" name="foodDescription" placeholder="Food Description" value="<?php echo $foodDescription?>">
                <br><br>

                <label for="category">Food Category </label><br>
				
                <input type="radio" id="protein" name="category" value="protein"
				<?php if($category=="protein"){?>
			    checked
			    <?php }?>
				>
	         	<label for="protein">Protein</label> 
				
	        	<input type="radio" id="fruitsANDvegetables" name="category" value="fruitsANDvegetables"
				<?php if($category=="fruitsANDvegetables"){?>
			    checked
			    <?php }?>
				>
	         	<label for="fruitsANDvegetables">Fruits And Vegetables</label>
				
				<input type="radio" id="strachyfood" name="category" value="starchyfood"
				<?php if($category=="starchyfood"){?>
			    checked
			    <?php }?>
				>
	         	<label for="strachyfood">Starchy Food</label>
				
				<input type="radio" id="carbohydrates" name="category" value="carbohydrates"
				<?php if($category=="carbohydrates"){?>
			    checked
			    <?php }?>
				>
	         	<label for="carbohydrates">Carbohydrates</label>
				
				<input type="radio" id="dairy" name="category" value="dairy"
				<?php if($category=="dairy"){?>
			    checked
			    <?php }?>
				>
	         	<label for="dairy">Dairy</label>
				
                  <br><br>

                  <label for="totalWeight">Weight</label><br>
                  <input type="number" step=0.1 min=0 max=100 kg id="totalWeight" name="totalWeight" value="<?php echo $totalWeight?>">
                  <br><br>
                  
                  
                  <label for="collectionTime">Collection Time:</label><br>
                  <input type="time" id="collectionTime" name="collectionTime" value="<?php echo $collectionTime?>">
                  <br><br>

                  <label for="colletionDate">Collection Date:</label><br>
                  <input type="date" id="collectionDate"  name="collectionDate" value="<?php echo $collectionDate?>">
                  <br><br>
                  

                  <label for="foodBankLocation">FoodBank location </label><br>
                <select name="foodBankLocation" id="foodBankLocation" aria-placeholder="Choose a Location" value="<?php echo $foodBankLocation?>">
                    <option value="FoodBridge Penang Centre"
					<?php if($foodBankLocation=="FoodBridge Penang Centre"){?>
			    	selected
				    <?php }?>
					>FoodBridge Penang Centre</option>
					
                    <option value="Nasmir Food Bank"
					<?php if($foodBankLocation=="Nasmi Food Bank"){?>
			    	selected
				    <?php }?>
					>Nasmir Food Bank</option>
					
                    <option value="Omega Food Bank"
					<?php if($foodBankLocation=="Omega Food Bank"){?>
			    	selected
				    <?php }?>
					>Omega Food Bank</option>
					
                    <option value="Ah Poh's Food Bank"
					<?php if($foodBankLocation=="Ah Poh's Food Bank"){?>
			    	selected
				    <?php }?>
					>Ah Poh's Food Bank</option>
					
                    <option value="Munch Bunker Food Bank"
					<?php if($foodBankLocation=="Munch Bunker Food Bank"){?>
			    	selected
				    <?php }?>
					>Munch Bunker Food Bank</option>
					
                        
                        
                  </select>
                  <br><br>


                  <input type="submit" value="Submit" id="submit" name="submit">
            </div>
            
        </form>

</body>
</html>



