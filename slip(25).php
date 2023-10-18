<html>
 <body>
  <form method="post" action="">
   Enter emp_no:
  <input type="text" name="t1"><br>
  <input type="submit">
  </form>
 </body>
</html>

<?php
 $con=mysql_connect("localhost","root","");
 if($con==false)
 {
  die("error in database connection...");
 }
 $no=$_POST["t1"];
 mysql_select_db("sybbaca");
 $res=mysql_query("SELECT emp.emp_name, emp.address, emp.phone, salary.basic, salary.HR, Salary.TA, Salary.DA 
             FROM emp INNER JOIN salary ON emp.emp_no = salary.emp_no WHERE emp.emp_no =$no");
 if($row=mysql_fetch_array($res))
 {
  echo("<br> emp_name".$row[0]);
  echo("<br> emp_address".$row[1]);
  echo("<br> emp_phone".$row[2]);
  echo("<br> salary_basic".$row[3]);
  echo("<br> salary_hr".$row[4]);
  echo("<br> salary_ta".$row[5]);
  echo("<br> salary_da".$row[6]);
 }
 else
 {
  echo("record not found");
 }

 mysql_close($con);
?>