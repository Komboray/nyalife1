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

// Fetch data for the specific staff member
$sql = "SELECT * FROM staff WHERE id = $staff_id";
$result = $conn->query($sql);

// Check for errors
if (!$result) {
    echo 'Error fetching data: ' . $conn->error;
    die();
}

// Display staff details
echo '<h2>Staff Details</h2>';

if ($row = $result->fetch_assoc()) {
    echo '<p>ID: ' . $row['id'] . '</p>';
    echo '<p>Role: ' . $row['role'] . '</p>';
    echo '<p>Designation: ' . $row['designation'] . '</p>';
    echo '<p>Department: ' . $row['department'] . '</p>';
    echo '<p>Specialization: ' . $row['specialization'] . '</p>';
    echo '<p>First Name: ' . $row['first_name'] . '</p>';
    echo '<p>Last Name: ' . $row['last_name'] . '</p>';
    echo '<p>Gender: ' . $row['gender'] . '</p>';
    echo '<p>Email: ' . $row['email'] . '</p>';
    echo '<p>Phone: ' . $row['phone'] . '</p>';
} else {
    echo '<p>No data found for the specified ID.</p>';
}

$conn->close();
?>
