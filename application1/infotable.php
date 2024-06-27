<?php
$servername = "localhost";
$username = "Dammika1";
$password = "Dammika123";
$dbname = "myfriends_db";

// Make connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql query to make table
$sql = "CREATE TABLE infotable (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
hobbies VARCHAR(30) NOT NULL,
sports VARCHAR(30) NOT NULL,
college VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table created";
} else {
  echo "Table not create: " . $conn->error;
}

$conn->close();

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

