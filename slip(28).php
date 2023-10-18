<html>
 <body>
  <form method="post" action="#">
   Teacher name:
   <input type="text" name="t1"><br>
   <input type="submit">
  </form>
 </body>
</html>

<?php
 error_reporting(0);
 $con=mysql_connect("localhost","root","");
 if($con==false)
 {
  die("error in connection..");
 }
 $tn=$_POST["t1"];
 mysql_select_db("sybbaca");
 $res=mysql_query("select student.s_name,s_t.subject from student,teacher,s_t
                   where student.sno=s_t.sno
                   and teacher.tno=s_t.tno
                   and t_name='$tn'");

 if($row=mysql_fetch_array($res))
 {
  echo("<br>student name=".$row[0]);
  echo("<br>subject=".$row[1]);
 }
 else
 {
  echo("data not found...");
 }
?>