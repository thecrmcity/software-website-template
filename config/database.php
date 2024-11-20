<?php

$conn = "";
$hostname = "localhost";
$username = "root";
$password = "";
$database = "khapsoftware";

$conn = mysqli_connect($hostname, $username, $password, $database) or die('Connection Lost');

?>