<?php
 $a=array(10,20,30,40);
 $b=array_search("40",$a);
 if($b==false)
  echo("key is not found..");
 else
  echo("key is found=".$b);
?>