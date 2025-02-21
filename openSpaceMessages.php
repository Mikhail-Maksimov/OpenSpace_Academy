<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    // If connection fails
    $response = array('status' => 'error', 'message' => 'Connection failed: ' . $conn->connect_error);
    echo json_encode($response);
    die();
} else {
    // Prepare and execute SQL query
    $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    $executed = $stmt->execute();

    if ($executed) {
        // If insertion succeeds
        $response = array('status' => 'success', 'message' => 'Registration Successful');
        echo json_encode($response);
    } else {
        // If insertion fails
        $response = array('status' => 'error', 'message' => 'Error: ' . $conn->error);
        echo json_encode($response);
    }

    $stmt->close();
    $conn->close();
}
?>