
<html>
 <body>
  <form method="post" action="">
   Enter no1:
  <input type="text" name="t1"><br>
   Enter no2:
  <input type="text" name="t2"><br>
   arithmetic operations<br>
  <input type="radio" name="a1" value="mul">1.multi<br>
 <input type="radio" name="a1" value="sub">2.SUB<br>
 <input type="radio" name="a1" value="add">3.ADD<br>
 <input type="radio" name="a1" value="div">4.DIV<br>
  <input type="submit" value="submit">
  </form>
 </body>
</html>
<?php
 $a=$_POST["t1"];
 $b=$_POST["t2"];
 $ch=$_POST["a1"];
 
 function multi($a,$b)
 { 
   echo("<br>multi=".$a*$b);
 }
  
 switch($ch)
 {
  case 'mul':multi($a,$b);
  break;
 }
?>