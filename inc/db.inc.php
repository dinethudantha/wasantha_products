<?php

$server = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'wasantha_products';

$conn = mysqli_connect($server,$db_user,$db_password,$db_name);

// if(mysqli_connect_errno()){
//     die('Connection Error ' . mysqli_connect_error());
// } else {
//     echo('Database Connected Successfully');
// }