<?php

$connection = mysqli_connect('localhost', 'joryan_adminhtt_btbuser', '','joryan_adminhtt_btb');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'joryan_adminhtt_btb');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>
