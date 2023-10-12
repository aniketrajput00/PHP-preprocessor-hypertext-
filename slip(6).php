<html>
 <body>
  <form method="post" action="#">
  Enter first string:
 <input type="text" name="t1"><br>
  Enter second string:
 <input type="text" name="t2"><br>
  Enter position for reverse:
 <input type="text" name="t3"><br>
 <input type="radio" name="r1" value="1">compare<br>
 <input type="radio" name="r1" value="2">Append<br>
 <input type="radio" name="r1" value="3">reverse<br>
 <input type="submit">
  </form>
 </body>
</html>
<?php
 $a=$_POST["t1"];
 $b=$_POST["t2"];
 $pos=$_POST["t3"];
 $ch=$_POST["r1"];
 switch($ch)
 {
  case '1':if($a==$b)
        echo("<br>Both string are equal");
        else
        echo("<br>Both string are not equal");
        break;
  case '2':echo("append=".$a.$b);
        break;
  case '3':$len=strlen($a)-$pos;
        $s=substr($a,$pos,$len);
        $s=strrev($s);
        echo("reverse string=".$s);
        break;
 }

?>