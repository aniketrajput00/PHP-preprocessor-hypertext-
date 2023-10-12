<html>
 <body>
  <h1>Grocery Items</h1><br>
  <form method="POST" action="#">
  (suger:40Rs kg)<br>Enter Quantity:
  <input type="text" name="t1">
  <input type="checkbox" name="c1"><br>
  (coconet oil:80Rs L)<br>Enter Quantity:
  <input type="text" name="t2">
  <input type="checkbox" name="c2"><br>
  (penets:100Rs kg)<br>Enter Quantity:
  <input type="text" name="t3">
  <input type="checkbox" name="c3"><br>
  <input type="submit" value="Bill">
  </form>
 </body>
</html>
<?php
 echo("<h1>Rajput shop bill</h1>");
 echo("<table border='1'>");
 echo("<tr><th>product name");
 echo("<th>Quantity");
 echo("<th>price");
 echo("<th>Total</tr>");
 $s=0;
 if(isset($_POST["c1"]))
 {
  $q=$_POST["t1"];
  $t=$q*40;
  $s=$s+$t;
  echo("<tr><td>suger");
  echo("<td>".$q);
  echo("<td>40");
  echo("<td>".$t);
 }
  if(isset($_POST["c2"]))
 {
  $q=$_POST["t2"];
  $t=$q*80;
  $s=$s+$t;
  echo("<tr><td>coconet oil");
  echo("<td>".$q);
  echo("<td>80");
  echo("<td>".$t);
 }
  if(isset($_POST["c3"]))
 {
  $q=$_POST["t3"];
  $t=$q*100;
  $s=$s+$t;
  echo("<tr><td>penets");
  echo("<td>".$q);
  echo("<td>100");
  echo("<td>".$t);
 }
 echo("</table>");
 echo("Total Bill=".$s);
?>