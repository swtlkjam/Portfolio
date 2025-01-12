<?php 
if (isset($_GET['id'])) {
	include "conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: edit.php");
    }

}else if(isset($_POST['e'])){
    include "../conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$firstname = validate($_POST['firstname']);
	$lastname = validate($_POST['lastname']);
	$birthdate = validate($_POST['birthdate']);
	$contact = validate($_POST['contact']);
	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
	$re_pass = validate($_POST['conpassword']);
    $role = validate($_POST['role']);
	$id = validate($_POST['id']);
	


	if(empty($firstname)){
        header("Location: ../edit.php?id=$id&error=Firstname is required");
	    exit();
	}
	else if (empty($username)) {
		header("Location: ../edit.php?id=$id&error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: ../edit.php?id=$id&error=Password is required");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: ../edit.php?id=$id&error=Confirmation password is required");
	    exit();
	}
	else if(empty($lastname)){
        header("Location: ../edit.php?id=$id&error=Lastname is required");
	    exit();
	}
	else if(empty($birthdate)){
        header("Location: ../edit.php?id=$id&error=Birthdate is required");
	    exit();
	}
	else if(empty($contact)){
        header("Location: ../edit.php?id=$id&error=Contact is required");
	    exit();
	}
	else if($password !== $re_pass){
        header("Location: ../edit.php?id=$id&error=The confirmation password  does not match");
	    exit();
	}

	else{
	    $sql = "UPDATE users SET
		firstname='$firstname', lastname='$lastname', contact='$contact'
		, birthdate='$birthdate', username='$username', role='$role', password='$password' WHERE id=$id";
		$result = mysqli_query($conn, $sql);
        if ($result) {
           	header("Location: ../edit.php?id=$id&success=Account has been edited successfully");
	        exit();
        }else {
	        header("Location: ../edit.php?id=$id&error=unknown error occurred&$user_data");
		    exit();
           }
		}
}else{
	header("Location: dsfdsf.php");
	exit();
}