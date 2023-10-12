

<?php
 $cn=$_POST["t1"];
 $pn=$_POST["t2"];
 $q=$_POST["t3"];
 $p=$_POST["t4"];
 
 $a=explode(" ",$pn);
 $b=explode(" ",$q);
 $c=explode(" ",$p);

 echo("<table border='1'>");
 echo("<tr> <th colspan='5'>Customer Name=".$cn);
 echo("<tr><th>sr no"); 
 echo("<th> product name"); 
 echo("<th>quantity"); 
 echo("<th>price"); 
 echo("<th>total"); 
 echo("</tr>"); 
 
 $t=0;
 for($i=0;$i<count($a);$i++)
 {
  echo("<tr><td>".($i+1));
  echo("<td>".$a[$i]);
  echo("<td>".$b[$i]);
  echo("<td>".$c[$i]);
  echo("<td>".$b[$i]*$c[$i]);
  $t=$t+$b[$i]*$c[$i];
 }
 echo("<tr><th colspan='5'>Total Bill Amount=".$t);
 echo("</table>");
?>