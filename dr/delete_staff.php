<?php
// Establish a connection to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nyalife";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get staff ID from the query parameter
$staff_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Perform the deletion
$sql = "DELETE FROM staff WHERE id = $staff_id";
$result = $conn->query($sql);

// Check for errors
if (!$result) {
    echo 'Error deleting data: ' . $conn->error;
    die();
}

echo '<p>Staff record deleted successfully.</p>';

$conn->close();
?>
