<html>
 <body>
  <form method="post" action="#">
   project name:
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
 $pn=$_POST["t1"];
 mysql_select_db("sybbaca");
 $res=mysql_query("select employee.* from employee,p_e,project 
                   where project.pno=p_e.pno
                   and employee.eno=p_e.eno
                   and p_name='$pn'");
  if($row=mysql_fetch_array($res))
  {
   echo("<br>eno=".$row[0]);
   echo("<br>e_name=".$row[1]);
   echo("<br>qualification=".$row[2]);
   echo("<br>joindate=".$row[3]);
  }
  else
  {
   echo("record not found...");
  }

 
?>