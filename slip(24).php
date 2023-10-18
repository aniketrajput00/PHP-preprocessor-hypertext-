

<?php
 session_start();
 $_SESSION["uname"]=$_POST["t1"];
 $_SESSION["pass"]=$_POST["t2"];
 $_SESSION["cnt"]=$_POST["cnt"];
 
?>



<html>
 <body>
  <form method="post" action="pg001.php">
  Enter username:
 <input type="text" name="t1"><br>
  Enter password:
<input type="text" name="t2"><br>
<input type="submit" value="Login" name="cnt">
  </form>
 </body>
</html>









