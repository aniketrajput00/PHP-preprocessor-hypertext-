
<html>
 <body> <h1>Electricity bill</h1></body>
  <form method="post" action="#">
  Enter name:
  <input type="text" name="t1"><br>
  Enter consumer number:
  <input type="text" name="t2"><br>
  Enter electricity units:
  <input type="text" name="t3"><br>
 <input type="submit">
  </form>
</html>
<?php
 $nm=$_POST["t1"];
 $cn=$_POST["t2"];
 $u=$_POST["t3"];

 $total=150;
 if($u<=50)
 $total=$total+$u*3.50;
 elseif($u>50&&$u<=150)
 $total=$total+$u*4;
 elseif($u>150&&$u<=250)
 $total=total+$u*5.20;
 elseif($u>250)
 $total=$total+$u*6.50;

 echo("<br>Custmore name:".$nm);
 echo("<br>consumer number:".$cn);
 echo("<br>Electricity units:".$u);
 echo("<br>total bill:".$total);
?>