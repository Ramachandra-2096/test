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
// ...
// Check if the request method is either GET or POST
if ($_SERVER['REQUEST_METHOD'] === 'GET' || $_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from the form
    $data1 = $_REQUEST['data1'];
    $data2 = $_REQUEST['data2'];
    $sql = "INSERT INTO tb_1 (name, email) VALUES ('$data1', '$data2')";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        echo 'Data stored successfully.';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
    // Rest of the code
    // ...
} else {
    // Return an error message for unsupported methods
    http_response_code(405);
    echo 'Method Not Allowed';
}


// Close the database connection
$conn->close();
?>
