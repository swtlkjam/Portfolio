<?php 
session_start(); 
include "../conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['firstname']) && isset($_POST['conpassword']) && isset($_POST['lastname']) && isset($_POST['birthdate']) && isset($_POST['contact']) && isset($_POST['role'])) {

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
    $role = validate($_POST['role']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if(empty($firstname)){
        header("Location: ../add.php?error=Firstname is required&$user_data");
	    exit();
	}
	else if (empty($uname)) {
		header("Location: ../add.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: ../add.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: ../add.php?error=Confirmation password is required&$user_data");
	    exit();
	}
	else if(empty($lastname)){
        header("Location: ../add.php?error=Lastname is required&$user_data");
	    exit();
	}
	else if(empty($birthdate)){
        header("Location: ../add.php?error=Birthdate is required&$user_data");
	    exit();
	}
	else if(empty($contact)){
        header("Location: ../add.php?error=Contact is required&$user_data");
	    exit();
	}
	else if($pass !== $re_pass){
        header("Location: ../add.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{
	    $sql = "SELECT * FROM users WHERE username='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ../add.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
            
           $sql2 = "INSERT INTO users(username, password, firstname, lastname, birthdate, contact, role) VALUES('$uname', '$pass', '$firstname', '$lastname', '$birthdate', '$contact', '$role')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: ../add.php?success=Account has been created successfully");
	         exit();
           }else {
	           	header("Location: ../add.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: ../add.php");
	exit();
}