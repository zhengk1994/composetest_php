<?php
$mysqli = new mysqli('mysql', 'root', 'root', 'my_db');
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . '): '. $mysqli->connect_error);
}
 ?>
