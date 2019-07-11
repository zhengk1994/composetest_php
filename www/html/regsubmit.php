<?php
  header("content-type:text/html;charset=utf-8");

  session_start();
  // $code=strtolower($_POST['vcode']);
  // $str=strtolower($_SESSION['vstr']);

  $name=$_POST['username'];
  $pwd=$_POST['password'];
  // $repwd=$_POST['repassword'];

  // if($pwd!=$repwd){
  //   echo"<script>alert('Please enter again!');</script>";
  //   echo"<script>location='regform.html'</script>;
  // }else{


      $conn=mysqli_connect("mysql","root","root","my_db");
      $sqlcreate="create table test_table_1(id int(6) unsigned auto_increment primary key, username varchar(30) not null, password varchar(30) not null)";
      mysqli_query($conn,$sqlcreate);
      mysqli_query($conn,"set names utf8");
      $sqlinsert="insert into test_table_1(username, password) values('{$name}','{$pwd}')";
      $sqlselect="select * from test_table_1 order by id";
      mysqli_query($conn,$sqlinsert);
      $result=mysqli_query($conn,$sqlselect);

      echo "<h1>USER INFORMATION</h1>";
			echo "<hr>";
			echo "<table width='700px' border='1px'>";
			echo "<tr>";
			echo "<th>ID</th><th>USERNAME</th><th>PASSWORD</th>";
			echo "</tr>";
			while($row=mysqli_fetch_assoc($result)){
				echo "<tr>";

				echo "<td>{$row['id']}</td><td>{$row['username']}</td><td>{$row['password']}</td>";

				echo "</tr>";
			}
			echo "</table>";

      mysqli_close($conn);








 ?>
