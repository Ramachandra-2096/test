<?php
// Database credentials
$host = "Ramachandra";
$username = "root";
$password = "root";
$database = "test";

// Create a new database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Retrieve data from the form
$data1 = $_POST['data1'];
$data2 = $_POST['data2'];

// Prepare SQL statement
$sql = "INSERT INTO tb_1 (name, email) VALUES ('$data1', '$data2')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo 'Data stored successfully.';
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

// Close the database connection
$conn->close();
?>
