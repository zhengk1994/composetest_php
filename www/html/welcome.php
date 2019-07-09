<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php echo $_POST["num"]; ?><br>
	WELCOME<?php echo $_POST["classl"]; ?>
	<?php echo $_POST["name"]; ?>！
	<?php
		$file_path = "info.txt";
		if(file_exists($file_path)){
			$fp = fopen($file_path, "w");
			$str = $_POST["num"] . PHP_EOL . $_POST["classl"] .PHP_EOL . $_POST["name"];
			fwrite($fp, $str);

		}
		fclose($fp);
	?>
	<?php
			$mydbhost = "localhost";
			$mydbuser = "root";
			$mydbpass = "root";
			$conn = mysqli_connect($mydbhost, $mydbuser, $mydbpass);
			if(! $conn){
				die("connect error: " . mysqli_error($conn));
			}
			mysqli_select_db( $conn, 'person');
			$sql="INSERT INTO student (name, Sno, class)
			VALUES
			('$_POST[name]','$_POST[num]','$_POST[classl]')";
			$retval = mysqli_query($conn, $sql);
			if(! $retval){
				die("create error" . mysqli_error($conn));

			}
			mysqli_close($conn);
		?>
</body>
</html>
