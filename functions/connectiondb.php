<?php
$hostname = 'localhost';
$username = 'root';
$passwordDb = '';
$database = 'app';

$conn = mysqli_connect($hostname, $username, $passwordDb, $database) or die('connection error');
?>