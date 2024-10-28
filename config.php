<?php
$servername = "sql306.infinityfree.com"; 
$username = "if0_37607131"; 
$password = "hHxWfWwhtdCu"; 
$dbname = "if0_37607131_movie_db"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
