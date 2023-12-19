

 
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

        <form action="UserPg3a.php" method="post">
            <div align="center" class="food_donation" method="">
                <!-- food donation form -->
                <h1>Food Donation Form</h1>
                <label for="firstName" >First Name</label><br>
                <input type="text" id="firstName" name="firstName" placeholder="Enter First Name">
                <br><br>
                <label for="lastName">Last Name</label><br>
                <input type="text" id="lastName" name="lastName" placeholder="Enter Last Name">

                <br><br>
                <label for="contact">Enter your contact number:</label><br>
                <input type="tel" id="contact" name="contact"  placeholder="Enter Contact Number">
                
                <br><br>
				<label for="email">Enter your email:</label><br>
                <input type="email" id="email" name="email" placeholder="Enter Email">

                <br><br>

                <address>
                    <label for="pick_up_location">Enter Pick Up Location Address</label><br>
                    <input type="text" id="pick_up_location" name="pick_up_location" placeholder="Pick up location">
                    <!--- Malaysia states -->
                    <br>
                    <br>
                    <label for="state">State</label><br>
                <select id="state" name="state">
                <option value="Penang">Penang</option>
                <option value="Kedah">Kedah</option>
                <option value="Kelantan">Kelantan</option>
                <option value="Kuala Lumpur">Kuala Lumpur</option>
                <option value="Labuan">Labuan</option>
                <option value="Melaka">Melaka</option>
                <option value="Negeri Sembilan">Negeri Sembilan</option>
                <option value="Pahang">Pahang</option>
                <option value="Johor">Johor</option>
                <option value="Perak">Perak</option>
                <option value="Perlis">Perlis</option>
                <option value="Putrajaya">Putrajaya</option>
                <option value="Sabah">Sabah</option>
                <option value="Sarawak">Sarawak</option>
                <option value="Selangor">Selangor</option>
                <option value="Terengganu">Terengganu</option>
                </select>
                </address>
                
                <br>
                <label for="foodDescription">Food Description</label><br>
                <input type="text" id="foodDescription" name="foodDescription" placeholder="Food Description">
                <br><br>

                <label for="category">Food Category </label><br>
				
                <input type="radio" id="protein" name="category" value="protein">
	         	<label for="protein">Protein</label> 
				
	        	<input type="radio" id="fruitsANDvegetables" name="category" value="fruitsANDvegetables">
	         	<label for="fruitsANDvegetables">Fruits And Vegetables</label>
				
				<input type="radio" id="strachyfood" name="category" value="starchyfood">
	         	<label for="strachyfood">Starchy Food</label>
				
				<input type="radio" id="carbohydrates" name="category" value="carbohydrates">
	         	<label for="carbohydrates">Carbohydrates</label>
				
				<input type="radio" id="dairy" name="category" value="dairy">
	         	<label for="dairy">Dairy</label>
				
				
                  <br><br>

                  <label for="totalWeight">Weight</label><br>
                  <input type="number" step=0.1 min=0 max=100 kg id="totalWeight" name="totalWeight">
                  <br><br>
                  
                  
                  <label for="collectionTime">Collection Time:</label><br>
                  <input type="time" id="collectionTime" name="collectionTime">
                  <br><br>

                  <label for="colletionDate">Collection Date:</label><br>
                  <input type="date" id="collectionDate"  name="collectionDate">
                  <br><br>
                  

                  <label for="foodBankLocation">FoodBank location </label><br>
                <select name="foodBankLocation" id="foodBankLocation" aria-placeholder="Choose a Location">
                    <option value="FoodBridge Penang Centre">FoodBridge Penang Centre</option>
                    <option value="Nasmir Food Bank">Nasmir Food Bank</option>
                    <option value="Omega Food Bank">Omega Food Bank</option>
                    <option value="Ah Poh s Food Bank">Ah Poh's Food Bank</option>
                    <option value="Munch Bunker Food Bank">Munch Bunker Food Bank</option>
                        
                        
                  </select>
                  <br><br>


                  <input type="submit" value="Submit" id="submit" name="submit">
            </div>
            
        </form>
    </body>
</html>