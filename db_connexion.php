<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "CRUDTP";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // echo "Connected successfully";