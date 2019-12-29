<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'olshop2';
$conn = mysqli_connect($server,$username,$password);
mysqli_select_db($conn, $database) or die ("Database Belum Ada, Silahkan import database");

?>
