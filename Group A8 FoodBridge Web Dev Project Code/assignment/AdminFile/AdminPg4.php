
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


.cash_donation {
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
        <button onclick="location.href ='AdminPg4b.php'";  class="redirect">Back</button>
        <br><br>
       
    </nav>
</div>


<br><br><br>

        <form align="center"action="AdminPg4a.php" method="post">

            <div class="cash_donation" >
                <!-- cash donation form -->
                <h1>Cash Donation Form</h1>
                <label for="firstName" >First Name</label><br>
                <input type="text" id="firstName" name="firstName" placeholder="Enter First Name">
                <br>
                <label for="lastName">Last Name</label><br>
                <input type="text" id="lastName" name="lastName" placeholder="Enter Last Name"><br>

                <br>
                <label for="email">Enter your email:</label><br>
                <input type="email" id="email" name="email" placeholder="Enter Email">
                <br>
                <label for="contactNum">Enter your contact number:</label><br>
                <input type="tel" id="contactNum" name="contactNum"  placeholder="Enter Contact Number"><br><br>


                <label for="receipt" >Upload Receipt Image:</label><br>
                <input type="file" id="receipt" name="receipt" accept="image/*" onchange="loadFile(event)">
                <br>
 

                  <label for="foodBankLocation">FoodBank location </label><br>
                <select name="foodBankLocation" id="foodBankLocation" aria-placeholder="Choose a Location">
                    <option value="FoodBridge Penang Centre">FoodBridge Penang Centre</option>
                    <option value="Nasmir Food Bank">Nasmir Food Bank</option>
                    <option value="Omega Food Bank">Omega Food Bank</option>
                    <option value="Ah Poh s Food Bank">Ah Poh's Food Bank</option>
                    <option value="Munch Bunker Food Bank">Munch Bunker Food Bank</option>
                        
                        
                  </select>
                  <br><br>
                  

                  <label for="date">Date:</label><br>
                  <input type="date" id="date"  name="date">
                  <br><br>



                  <input type="submit" value="Submit" id="submit" name="submit">
            </div><br><br><br>
            
        </form>
    </body>
</html>