<?php
include 'database/connect.php';

if (isset($_GET['search'])) {
    $search = $_GET['search'];

    $sql = "SELECT * FROM `patients` WHERE name LIKE '%$search%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row['id'] . " - Name: " . $row['name'] . "<br>";
        }
    } else {
        echo "No results found.";
    }
}

$conn->close();
?>
