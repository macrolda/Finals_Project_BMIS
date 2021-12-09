<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'barangay');

/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS admin_info (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    adminFirstName VARCHAR(30) NOT NULL,
    adminMiddleName VARCHAR(30) NOT NULL,
    adminLastname VARCHAR(30) NOT NULL,
    adminUsername VARCHAR(30) NOT NULL,
    adminBirthday INT NOT NULL,
    adminPosition VARCHAR(30) NOT NULL,
    adminEmail VARCHAR(50),
    adminPassword VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    /*
    if ($conn->query($sql) === TRUE) {
      echo "Table admin_info created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }*/
    
    $conn->close();