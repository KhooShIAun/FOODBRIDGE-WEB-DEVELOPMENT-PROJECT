<?php 
session_start(); 
include "AdminPg0.php";

if (isset($_POST['uname']) && isset($_POST['pwd'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['pwd']);

	if (empty($uname)) {
		header("Location: AdminPg1.php?error=Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: AdminPg1.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM admindetails WHERE user_name='$uname' AND pwd='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['pwd'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
                $_SESSION['dob'] = $row['dob'];
                $_SESSION['contactNum'] = $row['contactNum'];
                $_SESSION['gender'] = $row['gender'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['state'] = $row['state'];
            	header("Location: AdminPg1c.php");
		        exit();
            }else{
				header("Location: AdminPg1.php?error=Incorect Email or password");
		        exit();
			}
		}else{
			header("Location: AdminPg1.php?error=Incorect Email or password");
	        exit();
		}
	}
	
}else{
	header("Location: AdminPg1.php");
	exit();
}