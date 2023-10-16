<html>
 <body><h1>Registration From</h1>
  <form method="post" action="#">
   Enter name:
  <input type="text" name="t1"><br>
   Select course:
   <select name="t2">
   <option>BCA</option>
   <option>BCS</option>
   <option>MCA</option>
   <option>MCOM</option>
   </select><br>
   Enter mobile no:
   <input type="text" name="t3"><br>
   <input type="submit">
  </form>
 </body>
</html>

<?php
 $nm=$_POST["t1"];
 $course=$_POST["t2"];
 $mn=$_POST["t3"];

 $regno=$nm[0].$nm[1].$course[0].$course[1].$mn;
 $flag=0;
 if(!empty($nm)&&ctype_alpha($nm))
 {
  $flag++;
 }
 if(filter_var($mn,FILTER_VALIDATE_INT)&&strlen($mn)==10)
 {
  $flag++;
 }
  if($flag==2)
 {
   echo("<br>Name=".$nm);
  echo("<br>Course=".$course);
  echo("<br> Mobile number=".$mn);
  echo("<br> regcode=".$regno);
 }
 else
 {
  echo("<br>Enter valid choice....");
 }

?>