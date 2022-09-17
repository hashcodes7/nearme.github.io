<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form class="hosp" action="hospsubmit.php" method="post">
     	<h2>HELLO, HOSPITAL <?php echo $_SESSION['name']; ?></h2>
          <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

<center>
          <table >
               
               <tr>
                    <td rowspan='100' width='30'></td>
                    <td width='130'>Hospital ID
                    </td>
                    <td ><?php echo $_SESSION['user_name']; ?>
                    </td>
                    <td rowspan='100' width='150'></td>
                    <td width='130'>Name
                    </td>
                    <td ><?php echo $_SESSION['name']; ?>
                    </td>

               </tr>
             
               <tr>
                    <td >address
                    </td>
                    <td  ><input class="rad" classtype="text" name="hospad" value="<?php echo $_SESSION['hospad']; ?>">
                    </td>
                    
                    <td  >contact number
                    </td>
                    <td><input class="rad" classtype="text" name="hospcno" value="<?php echo $_SESSION['hospcno']; ?>">
                    </td>
               </tr> 
              
               
               <tr>
                    <td >Blood A+
                    </td>
                    <td><input class="rad" classtype="text" name="apls" value="<?php echo $_SESSION['apls']; ?>">
                    </td>
                 
                    <td>Blood A-
                    </td>
                    <td><input class="rad" classtype="text" name="amins" value="<?php echo $_SESSION['amins']; ?>">
                    </td>
               </tr> 

               <tr>
                    <td>Blood B+
                    </td>
                    <td><input class="rad" classtype="text" name="bpls" value="<?php echo $_SESSION['bpls']; ?>">
                    </td>
                    
                    <td>Blood B-
                    </td>
                    <td><input class="rad" classtype="text" name="bmins" value="<?php echo $_SESSION['bmins']; ?>">
                    </td>
               </tr> 

               <tr>
                    <td>Blood AB+
                    </td>
                    <td><input class="rad" classtype="text" name="abpls" value="<?php echo $_SESSION['abpls']; ?>">
                    </td>
                    
                    <td>Blood AB-
                    </td>
                    <td><input class="rad" classtype="text" name="abmins" value="<?php echo $_SESSION['abmins']; ?>">
                    </td>
               </tr> 

               <tr>
                    <td>Blood O+
                    </td>
                    <td><input class="rad" classtype="text" name="opls" value="<?php echo $_SESSION['opls']; ?>">
                    </td>
                    
                    <td>Blood O-
                    </td>
                    <td><input class="rad" classtype="text" name="omins" value="<?php echo $_SESSION['omins']; ?>">
                    </td>
                    </tr>

                    <tr>
                    <td>Plasma
                    </td>
                    <td><input class="rad" classtype="text" name="plasma" value="<?php echo $_SESSION['plasma']; ?>">
                    </td>
                    
                    <td>Oxygen
                    </td>
                    <td><input class="rad" classtype="text" name="oxy" value="<?php echo $_SESSION['oxy']; ?>">
                    </td>
                    </tr> 

                    <tr>
                    <td>Latitude
                    </td>
                    <td><input class="rad" classtype="text" name="lat" value="<?php echo $_SESSION['lat']; ?>">
                    </td>
                    
                    <td>Longitude
                    </td>
                    <td><input class="rad" classtype="text" name="longt" value="<?php echo $_SESSION['longt']; ?>">
                    </td>
                    </tr>

               <br>
               <br>
                 

</table></center><br>

          <br>
     	<button type="submit">Submit</button>
          
          <button type="submit" formaction="logout.php">Log out</button>
          <button type="submit" formaction="change-passwordhosp.php">change Password</button>
          </form>
</body>
</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>