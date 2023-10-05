<html>
 <body>
  <form method="post" action="#">
  Enter number:
  <input type="text" name="t1"><br>
  <input type="submit">
  </form>
 </body>
</html>
<?php
 $num=$_POST["t1"];
 for($i=1;$i<=10;$i++)
  {
     $n=$num*$i;
    echo("<br>".$n);
  }
?>