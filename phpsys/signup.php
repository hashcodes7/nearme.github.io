<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<!----------------------------------------------------javascript------------------------------------------->

<script type="text/javascript">
    function select()
    {
     var1=document.getElementById("radio1");
     var2=document.getElementById("radio2");
     if(var1.checked==true)
     {
        document.myform.action="signup-hosp.php";
     }
     else
     {
        document.myform.action="signup-user.php";
     }
   }
  </script>

<!----------------------------------------------------javascript end------------------------------------------->
<body>
     <form action="signup-user.php" method="post" name="myform" onsubmit="select()">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" class="rad" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" class="rad"
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name / Hospital ID</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" class="rad"
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" class="rad"
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" class="rad"
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" class="rad"
                 name="re_password" 
                 placeholder="Re_Password"><br>

                 <table>
			<tr>

			<td style="width:150px">
			<input type="radio" name="utype" value="hospital" id="radio1">Hospital</td>
			
			<td style="width:150px">
			<input type="radio" name="utype" value="User" id="radio2">User
		
		</td></tr></table>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>