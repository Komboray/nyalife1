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

// Display the update form
echo '<h2>Update Staff</h2>';

if ($row = $result->fetch_assoc()) {
    echo '<form action="process_update_staff.php" method="POST">';
    echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
    echo 'Role: <input type="text" name="role" value="' . $row['role'] . '"><br>';
    echo 'Designation: <input type="text" name="designation" value="' . $row['designation'] . '"><br>';
    echo 'Department: <input type="text" name="department" value="' . $row['department'] . '"><br>';
    echo 'Specialization: <input type="text" name="specialization" value="' . $row['specialization'] . '"><br>';
    echo 'First Name: <input type="text" name="first_name" value="' . $row['first_name'] . '"><br>';
    echo 'Last Name: <input type="text" name="last_name" value="' . $row['last_name'] . '"><br>';
    echo 'Gender: <input type="text" name="gender" value="' . $row['gender'] . '"><br>';
    echo 'Email: <input type="text" name="email" value="' . $row['email'] . '"><br>';
    echo 'Phone: <input type="text" name="phone" value="' . $row['phone'] . '"><br>';
    echo '<input type="submit" value="Update">';
    echo '</form>';
} else {
    echo '<p>No data found for the specified ID.</p>';
}

$conn->close();
?>
