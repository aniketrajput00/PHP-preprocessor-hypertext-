<html>
 <head>
  
 </head>
 <body>
  <h1>Convert Distance Between Miles and Kilometers</h1><br>
  <form method="POST" action="#">
  Enter Distance:
  <input type="text" name="t1"><br>
  <input type="radio" name="r1" value="miles_to_kilometers">miles convert to kilometers<br>
  <input type="radio" name="r1" value="kilometers_to_miles">kilometers convert to miles<br>
  <input type="submit" value="convert">
  <input type="reset"  value="clear">
  </form>
 </body>
</html>
<?php
 $dis=$_POST["t1"];
 $ch=$_POST["r1"];

 if($ch==="miles_to_kilometers")
 {
  $k=$dis*1.6;
  echo("miles to kilometer converted=".$k);
 }
 elseif($ch==="kilometers_to_miles")
 {
  $m=$dis/1.6;
  echo("kilometers to miles converted=".$m);
 }
?>