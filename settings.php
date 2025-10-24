<?php
// Database connection settings
$host = "localhost";
$user = "root";
$pwd = "";
$sql_db = "recruitment_portal"; 

// Connection 
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>