<?php
// Replace these values with your actual database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nyalife";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$id = $_POST['id'];
$title = $_POST['title'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$designation = $_POST['designation'];
$department = $_POST['department'];
$role = $_POST['role'];
$address = $_POST['address'];
$national_id = $_POST['national_id'];
// Check if "profile_picture" field is provided
if (isset($_FILES['profile_picture']) && isset($_FILES['profile_picture']['error']) && $_FILES['profile_picture']['error'] == UPLOAD_ERR_OK) {
    // Handle file upload for profile picture
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['profile_picture']['name']);

    // Move the uploaded file to the destination folder
    if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $uploadFile)) {
        // Save the file path in the database
        $profile_picture = $uploadFile;
    } else {
        echo "Error uploading profile picture.";
        exit();
    }
} else {
    // If no profile picture is provided or there's an upload error, keep the existing profile picture path or set to NULL
    $profile_picture = isset($_POST['existing_profile_picture']) ? $_POST['existing_profile_picture'] : NULL;
}
$password = $_POST['password'];



// Update data in Staff table
$sql = "UPDATE Staff SET title='$title', first_name='$first_name', last_name='$last_name', email='$email', phone='$phone', dob='$dob', gender='$gender', designation='$designation', department='$department', role='$role', address='$address', national_id='$national_id', profile_picture='$profile_picture', password='$password' WHERE ID=$id";

if ($conn->query($sql) === TRUE) {
    echo "Staff information updated successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
