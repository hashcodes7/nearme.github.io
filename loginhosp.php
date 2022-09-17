<?php 
session_start(); 
include "hosp-db.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM hosp WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['name'] = $row['name'];
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['id'] = $row['id'];
				$_SESSION['hospad'] = $row['hospad'];
				$_SESSION['hospcno'] = $row['hospcno'];
				$_SESSION['apls'] = $row['apls'];
                $_SESSION['bpls'] = $row['bpls'];
				$_SESSION['opls'] = $row['opls'];
				$_SESSION['abpls'] = $row['abpls'];
				$_SESSION['amins'] = $row['amins'];
                $_SESSION['bmins'] = $row['bmins'];
				$_SESSION['omins'] = $row['omins'];
				$_SESSION['abmins'] = $row['abmins'];
				$_SESSION['plasma'] = $row['plasma'];
                $_SESSION['oxy'] = $row['oxy'];
				$_SESSION['lat'] = $row['lat'];
				$_SESSION['longt'] = $row['longt'];
				
            	header("Location: hosp.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
}else{
	header("Location: index.php");
	exit();
}