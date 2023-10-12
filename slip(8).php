<html>
 <body>
  <h1>perform the following operations</h1>
  <form method="post" action="#">
    <h3>Enter choice</h3>
   <input type="radio" name="r1" value="1">a) Sort the array by values (changing the keys) in ascending, descending order. <br>
   <input type="radio" name="r1" value="2">b) Also sort the array by values without changing the keys. <br>
   <input type="radio" name="r1" value="3">c) Filter the odd elements from an array. <br>
   <input type="radio" name="r1" value="4">e) Merge the given arrays.<br>
   <input type="radio" name="r1" value="5">f) Find the Union, intersection& set difference of two arrays.<br> 
   <input type="submit">
  </form>
 </body>
</html>
<?php
 $ch=$_POST["r1"];
 $a=array("rno"=>"101","name"=>"ram","per"=>"65.22");
 $b=array(10,20,30,40);
 $c=array(20,40);

 function check_num($n)
 {
   if($n%2!=0)
    return true;
   else
    return false;
 }
 switch($ch)
 {
  case'1':sort($a);
          echo("Ascending order:");
          print_r($a);
          rsort($a);
          echo("<br>descending order:");
          print_r($a);
          break;
  case'2':asort($a);
          echo("Ascending order:");
          print_r($a);
          arsort($a);
          echo("<br>descending order:");
          print_r($a);
          break;
  case'3':$d=array_filter($b,"check_num");
          print_r($d);
          break;
  case'4':$d=array_merge($b,$c);
          echo("merge array:");
          print_r($d);
          break;
  case'5':$d=array_merge($b,$c);
          $e=array_unique($d);
          echo("<br>union:");
          print_r($e);
          $f=array_intersect($b,$c);
          echo("<br>Intersection:");
          print_r($f);
          $g=array_diff($b,$c);
          echo("<br>Difference of two array:");
          print_r($g);
          break;
          
 }
?>