<html>
 <head>
  <title>PHP 测试</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?>
 </body>
</html>

<?php
echo $_SERVER['HTTP_USER_AGENT'];
 ?>

 <?php
   date_default_timezone_set('Asia/Tokyo');
   echo date("Y 年 m 月 d 日 H 時 i 分")
  ?>


 <form action="action.php" method="post">
  <p>名前: <input type="text" name="name" /></p>
  <p>年齢: <input type="text" name="age" /></p>
  <p><input type="submit" value="送る"/>
  <input type="reset" value="クリア"></p>
 </form>

<?php
$a_bool = TRUE;
$a_str = "foo";
$a_str2 = 'foo';
$an_int = 12;

echo gettype($a_bool);
echo gettype($a_str);

if (is_int($an_int)){
  $an_int += 4;
  echo "Int: $an_int";
}

if (is_string($a_str)){
  echo "String: $a_str";
}
 ?>

//create a class

<?php
class foo{
  function do_foo(){
    echo "Doing foo.";
  }
}

$bar = new foo;
$bar -> do_foo();
 ?>

<?php
// $double = function($a){
//   return $a * 2;
// }
//
// $numbers = range(1, 5);
//
// $new_numbers = array_map($double, $numbers);
//
// print implode(' ', $new_numbers);
 ?>

 <!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="__URL__" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>
