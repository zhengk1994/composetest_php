<?php
  header("content-type:text/html;charset=utf-8");

  session_start();
  $code=strtolower($_POST['vcode']);
  $str=strtolower($_SESSION['vstr']);

  $name=$_POST['username'];
  $pwd=$_POST['password'];
  $repwd=$_POST['repassword'];

  // if($pwd!=$repwd){
  //   echo"<script>alert('Please enter again!');</script>";
  //   echo"<script>location='regform.html'</script>;
  // }else{


      $conn=mysql_connect("localhost","root","root");
      mysql_select_db("mysql");
      mysql_query("set names utf8");
      $sqlinsert="insert into t1(username, password) values('{$name}','{$pwd}')";
      $sqlselect="select * from t1 order by id";
      mysql_query($sqlinsert);
      $result=mysql_query($sqlselect);

      echo "<h1>USER INFORMATION</h1>";
			echo "<hr>";
			echo "<table width='700px' border='1px'>";
			echo "<tr>";
			echo "<th>ID</th><th>USERNAME</th><th>PASSWORD</th>";
			echo "</tr>";
			while($row=mysql_fetch_assoc($result)){
				echo "<tr>";

				echo "<td>{$row['id']}</td><td>{$row['username']}</td><td>{$row['password']}</td>";

				echo "</tr>";
			}
			echo "</table>";

      mysql_close($conn);





 ?>
