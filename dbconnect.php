
<?php
// Database configuration
$servername = "localhost"; //  MySQL server address
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "darbna1"; // MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error>0) {
    die("Connection failed: " . $conn->connect_error);
}
return $conn;


// Close connection

?>
