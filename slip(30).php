<html>
 <body>
  <form method="post" action="#">
   Competition Name:
   <input type="text" name="t1"><br>
   <input type="submit">
  </form>
 </body>
</html>

<?php

 $con=mysql_connect("localhost","root","");
 if($con==false)
 {
  die("error in connection...");
 }
 
 $cn=$_POST["t1"];
 mysql_select_db("sybbaca");
 $res=mysql_query("select student.* from student,competition,s_c
                   where student.stud_id=s_c.stud_id
                   and competition.c_no=s_c.c_no
                   and rank='first'
                   and c_name='drawing'");

 while($row=mysql_fetch_array($res))
 {
  echo("<br>student id=".$row[0]);
  echo("<br>name=".$row[1]);
  echo("<br>class=".$row[2]);
 }

 mysql_close($con);
?>