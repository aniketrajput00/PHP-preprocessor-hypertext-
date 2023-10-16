Write a PHP script to create a login form with a username and password. Once the 
user logs in, the second form should be displayed to accept user details (name, city, 
phoneno). If the user doesn’t enter information within a specified time limit, expire 
his session and give a warning


<html>
 <body><h1>Login</h1>
  <form method="post" action="page02.php">
   Username:
  <input type="text" name="t1"><br>
   password:
  <input type="password" name="t2"><br>
  <input type="submit" value="next">
  </form>
 </body>
</html>