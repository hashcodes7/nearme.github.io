<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    include "hosp-db.php";

if (isset($_POST['hospad']) && isset($_POST['hospcno']) && isset($_POST['apls'])
	&& isset($_POST['bpls']) && isset($_POST['abpls']) && isset($_POST['opls'])
	&& isset($_POST['amins'])  && isset($_POST['bmins'])  && isset($_POST['abmins']) 
	&& isset($_POST['omins']) && isset($_POST['plasma']) && isset($_POST['oxy'])
	&& isset($_POST['lat']) && isset($_POST['longt'])) {


	$hospad = $_POST['hospad'];
	$hospcno = $_POST['hospcno'];
	$apls =$_POST['apls'];
	$bpls =$_POST['bpls'];
	$opls =$_POST['opls'];
	$abpls =$_POST['abpls'];
	$amins =$_POST['amins'];
	$bmins =$_POST['bmins'];
	$abmins =$_POST['abmins'];
	$omins =$_POST['omins'];
	$plasma =$_POST['plasma'];
	$oxy =$_POST['oxy'];
	$lat=$_POST['lat'];
	$longt =$_POST['longt'];

	$_SESSION['hospad'] = $hospad;
			$_SESSION['hospcno'] = $hospcno;
			$_SESSION['apls'] = $apls;
			$_SESSION['bpls'] = $bpls;
			$_SESSION['abpls'] = $abpls;
			$_SESSION['opls'] = $opls;
			$_SESSION['amins'] = $amins;
			$_SESSION['bmins'] = $bmins;
			$_SESSION['abmins'] = $abmins;
			$_SESSION['omins'] = $omins;
			$_SESSION['plasma'] = $plasma;
			$_SESSION['oxy'] = $oxy;
			$_SESSION['lat'] = $lat;
			$_SESSION['longt'] = $longt;
    
    if(empty($hospad)){
      header("Location: hosp.php?error=address cant be empty or negative");
	  exit();
    }else if(!is_numeric($hospcno)){
      header("Location: hosp.php?error=hospcno cant be empty or negative");
	  exit();
    }
	else if(!is_numeric($apls) || ($apls)<0 ){
		header("Location: hosp.php?error=A plus cant be empty or negative");
		exit();
	  }
	  else if(!is_numeric($bpls)|| ($bpls)<0 ){
		header("Location: hosp.php?error=B plus cant be empty or negative");
		exit();
	  }
	  else if(!is_numeric($opls)|| ($omins)<0 ){
		header("Location: hosp.php?error=O plus cant be empty or negative");
		exit();
	  }
	  else if(!is_numeric($omins)|| ($omins)<0 ){
		header("Location: hosp.php?error=O minus cant be empty or negative");
		exit();
	  }
	  else if(!is_numeric($bmins)|| ($bmins)<0 ){
		header("Location: hosp.php?error=B minus cant be empty or negative");
		exit();
	  }
	  else if(!is_numeric($abmins)|| ($abmins)<0 ){
		header("Location: hosp.php?error=AB minus cant be empty or negative");
		exit();
	  }
	  else if(!is_numeric($amins)|| ($amins)<0 ){
		header("Location: hosp.php?error=A minus cant be empty or negative");
		exit();
	  }
	  else if(!is_numeric($oxy)|| ($oxy)<0 ){
		header("Location: hosp.php?error=Oxygen cant be empty or negative");
		exit();
	  }
	  else if(!is_numeric($plasma)|| ($plasma)<0 ){
		header("Location: hosp.php?error=Plsama cant be empty or negative");
		exit();
	  }
	  else if(!is_numeric($lat)){
		header("Location: hosp.php?error=lat as cant be empty or negative");
		exit();
	  }
	  else if(!is_numeric($longt)){
		header("Location: hosp.php?error=long cant be empty or negative");
		exit();
	  }
    else {

        $user_name = $_SESSION['user_name'];
		$sql_2 = "UPDATE hosp
        	          SET hospad='$hospad',hospcno='$hospcno',apls='$apls',bpls='$bpls',opls='$opls',abpls='$abpls',amins='$amins',bmins='$bmins',omins='$omins',abmins='$abmins',plasma='$plasma',oxy='$oxy',lat='$lat',longt='$longt'
        	          WHERE user_name='$user_name'";
        	mysqli_query($conn, $sql_2);
        	

			

			header("Location: hosp.php?success=updated successfully");
	        exit();
    } 

}else{
	header("Location: hosp.php");
	exit();
}

}else{
     header("Location: index.php");
     exit();
}