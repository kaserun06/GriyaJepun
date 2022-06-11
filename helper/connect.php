<?php
include 'constant.php';
$con = mysqli_connect(HOST, UNAME, PASS, DB, PORT);
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>