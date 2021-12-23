<?php
$conn = mysqli_connect("10.0.0.195","admin","Admin123_","uas");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>