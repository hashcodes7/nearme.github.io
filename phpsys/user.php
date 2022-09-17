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
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <nav class="home-nav">
     	
     </nav>
     <form action="hospcheck.php" method="post">
     	<h2>User</h2>
     	
<center>
          <table >
               
               <tr height="30" >
                    <td rowspan='100' width='900'></td>
                    <td style="width:1000px" >ID
                    </td>
                    <td style="width:1000px" >H123
                    </td>

               </tr>
               <tr height="30" >
                    <td style="width:1500px" >Name
                    </td>
                    <td style="width:1500px" >Apollo
                    </td>
               </tr>
               <tr height="30" >
                    <td style="width:1500px" >Address
                    </td>
                    <td style="width:1500px" >ghaziabad
                    </td>
               </tr>
               <tr height="30" >
                    <td style="width:1500px" >Contact Number
                    </td>
                    <td style="width:1500px" >1234567899
                    </td>
               </tr>
               
               <tr>
                    <td style="width:1500px" >Blood A+
                    </td>
                    <td style="width:1500px" ><input class="rad" classtype="text" name="uname" placeholder="enter amount">
                    </td>
               </tr> 
               <tr>
                    <td style="width:1500px" >Blood B+
                    </td>
                    <td style="width:1500px" >
                                   <?php if (isset($_GET['bpls'])) { ?>
                              <input class="rad" type="text" 
                                   name="bpls" 
                                   placeholder="User Name"
                                   value="<?php echo $_GET['bpls']; ?>"><br>
                         <?php }else{ ?>
                              <input class="rad" type="text" 
                                   name="bpls" 
                                   placeholder="User Name"><br>
                         <?php }?>
                    </td>
               </tr><br>
                 

</table></center><br>

          <br>
     	<button type="submit">Submit</button>
          <button type="submit" formaction="logout.php">Log out</button>
          <button type="submit" formaction="change-password.php">change Password</button>
          </form>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>