<?php 
session_start(); 
include "conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['firstname']) && isset($_POST['conpassword']) && isset($_POST['lastname']) && isset($_POST['birthdate']) && isset($_POST['contact'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['conpassword']);
	$firstname = validate($_POST['firstname']);
	$lastname = validate($_POST['lastname']);
	$birthdate = validate($_POST['birthdate']);
	$contact = validate($_POST['contact']);

	$user_data = 'uname='. $uname. '&firstname='. $firstname;


	if(empty($firstname)){
        header("Location: signup.php?error=Firstname is required&$user_data");
	    exit();
	}
	else if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Confirmation password is required&$user_data");
	    exit();
	}
	else if(empty($lastname)){
        header("Location: signup.php?error=Lastname is required&$user_data");
	    exit();
	}
	else if(empty($birthdate)){
        header("Location: signup.php?error=Birthdate is required&$user_data");
	    exit();
	}
	else if(empty($contact)){
        header("Location: signup.php?error=Contact is required&$user_data");
	    exit();
	}
	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{
	    $sql = "SELECT * FROM users WHERE username='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(username, password, firstname, lastname, birthdate, contact) VALUES('$uname', '$pass', '$firstname', '$lastname', '$birthdate', '$contact')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}