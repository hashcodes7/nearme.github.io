<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<!----------------------------------------------------javascript------------------------------------------->

<script type="text/javascript">
    function select()
    {
     var1=document.getElementById("radio1");
     var2=document.getElementById("radio2");
     if(var1.checked==true)
     {
        document.myform.action="loginhosp.php";
     }
     else
     {
        document.myform.action="loginuser.php";
     }
   }
  </script>

<!----------------------------------------------------javascript end------------------------------------------->

	<title>LOGIN</title>
	
</head>
<body>
     <form action="loginuser.php" method="post" name="myform" onsubmit="select()">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name / Hospital ID</label>
     	<input class="rad" classtype="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input class="rad" type="password" name="password" placeholder="Password"><br>

		 <table>
			<tr>

			<td style="width:150px">
			<input type="radio" name="utype" value="hospital" id="radio1">Hospital</td>
			
			<td style="width:150px">
			<input type="radio" name="utype" value="User" id="radio2">User
		
		</td></tr></table>
		<br><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>