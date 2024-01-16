<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nyalife";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT id, first_name, email, phone, address, gender, department, specialization FROM Staff");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
