<?php
 function swap($a,$b)
 {
  $t=$a;
  $a=$b;
  $b=$t;
  echo("<br>swap value of a=".$a);
  echo("<br>swap value of b=".$b);
 }

 $a=11;
 $b=22;
  echo("<br>before swap value of a=".$a);
  echo("<br>before swap value of b=".$b);
 swap($a,$b);
  echo("<br>after swap value of a=".$a);
  echo("<br>after swap value of b=".$b);
?>