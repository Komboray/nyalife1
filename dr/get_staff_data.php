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

// Get filter values from query parameters
$recordsPerPage = isset($_GET['recordsPerPage']) ? (int)$_GET['recordsPerPage'] : 10;
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Fetch data from the "staff" table with filtering and searching
$sql = "SELECT * FROM staff WHERE CONCAT(id, role, designation, department, specialization, first_name, last_name, gender, email, phone) LIKE '%$search%' LIMIT $recordsPerPage";
$result = $conn->query($sql);

// Check for errors
if (!$result) {
    echo 'Error fetching data: ' . $conn->error;
    die();
}

// Display the data in a table
echo '<table class="staff-table">';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Role</th>';
echo '<th>Designation</th>';
echo '<th>Department</th>';
echo '<th>Specialization</th>';
echo '<th>First Name</th>';
echo '<th>Last Name</th>';
echo '<th>Gender</th>';
echo '<th>Email</th>';
echo '<th>Phone</th>';
echo '<th>Action</th>';
echo '</tr>';

while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['role'] . '</td>';
    echo '<td>' . $row['designation'] . '</td>';
    echo '<td>' . $row['department'] . '</td>';
    echo '<td>' . $row['specialization'] . '</td>';
    echo '<td>' . $row['first_name'] . '</td>';
    echo '<td>' . $row['last_name'] . '</td>';
    echo '<td>' . $row['gender'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['phone'] . '</td>';
    echo '<td>';
    echo '<a href="view_staff.php?id=' . $row['id'] . '">View</a>';
    echo '<a href="update_staff.php?id=' . $row['id'] . '">Update</a>';
    echo '<a href="delete_staff.php?id=' . $row['id'] . '">Delete</a>';
    echo '</td>';
    echo '</tr>';
}

echo '</table>';

$conn->close();
?>
