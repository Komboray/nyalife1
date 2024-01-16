<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nyalife";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get data from the form
    $role = $_POST['role'];
    $designation = $_POST['designation'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $specialization = $_POST['specialization'];
    $nationalId = $_POST['nationalId'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Hash the password

    // Handle file upload for the profile photo
    $profilePhoto = null;
    if ($_FILES['profilePhoto']['size'] > 0) {
        $profilePhoto = file_get_contents($_FILES['profilePhoto']['tmp_name']);
    }

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("INSERT INTO Staff (first_name, last_name, dob, email, phone, address, gender, department, specialization, national_id, profile_photo, password) VALUES (:firstName, :lastName, :dob, :email, :phone, :address, :gender, :department, :specialization, :nationalId, :profilePhoto, :password)");
    $stmt->bindParam(':firstName', $firstName);
    $stmt->bindParam(':lastName', $lastName);
    $stmt->bindParam(':dob', $dob);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':department', $department);
    $stmt->bindParam(':specialization', $specialization);
    $stmt->bindParam(':nationalId', $nationalId);
    $stmt->bindParam(':profilePhoto', $profilePhoto, PDO::PARAM_LOB);
    $stmt->bindParam(':password', $password);

    $stmt->execute();

    echo "Staff added successfully";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
