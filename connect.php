<?php

session_start();
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "21-7-2568-users";

$con = mysqli_connect($host,$user,$pass,$dbname);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

?>