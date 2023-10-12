<html>
 <body>
  <h1> perform the following operations</h1>
  <form method="post" action="#">
  <h3>Enter choice</h3>
  <input type="radio" name="r1" value="1">i. Display the elements of an array along with the keys.<br> 
 <input type="radio" name="r1" value="2"> ii. Display the size of an array <br>
  <input type="radio" name="r1" value="3">iii. Delete an element from an array from the given index.<br>
  <input type="radio" name="r1" value="4">iv. Reverse the order of each element key value pair.<br>
  <input type="radio" name="r1" value="5">v. Traverse the elements in an array in random order.<br>
 <input type="submit">
  </form>
 </body>
</html>

<?php
 $ch=$_POST["r1"];
 $a=array("rno"=>"101","name"=>"ram","per"=>"77.65");
 switch($ch)
 {
  case'1':echo("Display elememt along with key=");
          print_r($a);
          break;
  case'2':echo("<br>size of an array=".count($a));
          break;
  case'3':unset($a["rno"]);
          echo("<br>Deleted element from an array=");
          print_r($a);
          break;
  case'4':$a=array_flip($a);
          echo("reverse order of each pair=");
          print_r($a);
          break;
  case'5':shuffle($a);
          echo("Traverse elements in random order=");
          print_r($a);
          break;
          
 
 }

?>