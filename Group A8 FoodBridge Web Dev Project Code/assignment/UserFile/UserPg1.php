<head>

<style>


.logo{
  transition: 0.5s;
   margin:auto;
   background-color: antiquewhite;
 padding: 10px;
}
.logo:hover{
   transition: 0.5s;
   margin:auto;
   background-color: antiquewhite;
 padding: 20px;
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
   width: 25%;
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
.donateWrapper{

	background-color:antiquewhite;
	padding :5px;
	border-radius: 12px;
	width:500px;
	height:250px;
}

.sponsorWrapper{
	
	background-color:antiquewhite;
}

.container{
        padding: 32px;
		padding-left:370px;
		width: 50%;
		height:50%;
		
      }
      .slider-wrapper {
        position: relative;
        max-width:768;
        margin:0 auto;
      }
      .slider{
        display:flex;
        aspect-ratio:16/9;
        overflow-x:auto;
        scroll-snap-type: x mandatory;
        scroll-behavior: smooth;
        box-shadow:0 24px 48px -12px hsla(0, 0%, 0%, 0.25) ;
        border-radius: 20px;
       
      }
      .slider img{
        flex: 1 0 100%;
        scroll-snap-align: start;
        object-fit:cover;
      }
      .slider-nav{
        display:flex ;
        column-gap:16px;
        position: absolute;
        bottom: 20px;
        left:50%;
        transform: translateX(-50%);
        z-index:1;

      }
	    .navigation{
    background-color: rgb(250, 235, 215);
    
}



</style>
    </head>

    <body>
               <!--FoodBridge Logo-->
<div align="center "class="logo">
<a href="UserPg10.html"><img style= border-radius:10%; src="https://i.pinimg.com/originals/ff/35/b4/ff35b4ff6b0fa6e1420046defcea9ac0.png" alt="LOGO" width="200" height="200"></a>
</div>
<div align="center "class="navigation" >
    <nav>
        <hr>
        <button onclick="location.href ='UserPg2.html'"; id="cash_donation_page" class="redirect">Cash Donation</button>
		
        <button onclick="location.href ='UserPg3.html'"; id="food_donation_page" class="redirect">Food Donation</button>
        <div class="topnav">
        <br> 
		
            <button onclick="location.href ='UserPg3b.html'"; id="foodBankList" class="redirect">Food Bank List</button>
            <button onclick="location.href ='UserPg10.html'"; id="aboutUs_page" class="redirect">About Us</button>
			<div class="adminLogInButton" align="right">
			<button onclick="location.href ='../AdminFile/AdminPg1.php'"; id="adminLogIn" class="redirect">Admin Log In</button>&nbsp;&nbsp;&nbsp;&nbsp;
			</div>
			
          </div>
		  
        <br>
       
    </nav>
	
</div>
<br><br>

<section class="container">
      <div class ="slider-wrapper">
      <div class="slider">
              <img id="slide-1" src="img/userPg1Pics/frontPage1.jpg">
              <img id="slide-2" src="img/userPg1Pics/frontPage2.jpeg">
              <img id="slide-3" src="img/userPg1Pics/frontPage3.jpg">
              <img id="slide-4" src="img/userPg1Pics/frontPage4.jpg">
              <img id="slide-5" src="img/userPg1Pics/frontPage5.jpg">
              
            </div>
            <div class="slider-nav">
              <a href="slide-1"></a>
              <a href="slide-2"></a>
              <a href="slide-3"></a>
              <a href="slide-4"></a>
              <a href="slide-5"></a>
            </div>
    </div>
</section>

<br><br><br><br><br><br><br>
<div class="donateWrapperWrapper" align="center">
<div class="donateWrapper" align="center">
        
		<br>
        <h2><b>DONATE NOW</b></h2>

	    <div class="donateButton" align="center">
		
	    <button onclick="location.href ='UserPg2.html'"; id="cashDonation_page" class="redirect">Cash Donation</button><br>
		<br>
		<button onclick="location.href ='UserPg3.html'"; id="foodDonation_page" class="redirect">Food Donation</button>
		
	    </div>
		
</div>
</div>


<br><br>
<div align="center"> <h1> SPONSORS </h1> </div>
<br>
<img class="lotus" src="img/userPg1Pics/lotus.png" width="100px" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img class="apple" src="img/userPg1Pics/apple.png" width="100px" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img class="herschel" src="img/userPg1Pics/herschel.png" width="100px" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img class="luno" src="img/userPg1Pics/luno.webp" width="100px" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img class="pocky" src="img/userPg1Pics/pocky.png" width="100px" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img class="shopee" src="img/userPg1Pics/shopee.png" width="100px" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img class="sunway" src="img/userPg1Pics/sunway.png" width="100px" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img class="logitech" src="img/userPg1Pics/logitech.png" width="100px" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img class="tupperware" src="img/userPg1Pics/tupperware.png" width="100px" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img class="sony" src="img/userPg1Pics/sony.jpg" width="100px" height="100px">
</body>
