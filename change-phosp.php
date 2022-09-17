<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    include "hosp-db.php";

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
    
    if(empty($op)){
      header("Location: change-passwordhosp.php?error=Old Password is required3");
	  exit();
    }else if(empty($np)){
      header("Location: change-passwordhosp.php?error=New Password is required3");
	  exit();
    }else if($np !== $c_np){
      header("Location: change-passwordhosp.php?error=The confirmation password  does not match3");
	  exit();
    }else {
    	// hashing the password
    	$op = md5($op);
    	$np = md5($np);
        $user_name = $_SESSION['user_name'];

        $sql = "SELECT password
                FROM hosp WHERE 
                user_name='$user_name' AND password='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE hosp
        	          SET password='$np'
        	          WHERE user_name='$user_name'";
        	mysqli_query($conn, $sql_2);
        	header("Location: change-passwordhosp.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: change-passwordhosp.php?error=Incorrect password");
	        exit();
        }

    }

    
}else{
	header("Location: change-passwordhosp.php");
	exit();
}

}else{
     header("Location: index.php");
     exit();
}