<html>
 <head>
  <script type="text/javascript">
    function select()
    {
     var1=document.getElementById("radio1");
     var2=document.getElementById("radio2");
     if(var1.checked==true)
     {
        document.myform.action="signup.php";
     }
     else
     {
        document.myform.action="login.php";
     }
   }
  </script>
</head>
<body>
  <form action="immediate.php" method="post" name="myform" onsubmit="select()">
    <input type="radio" id="radio1" name="colorRadio" value="IMMEDIATE"> 
    <input type="radio" id="radio2" name="colorRadio" value="Call SCHEDULED">
    <input type="submit" value="Submit">
   </form>
 </body>
 </html>