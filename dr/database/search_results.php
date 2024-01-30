<?php
// Include your database connection code here
include_once('connect.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the search query from the form
    if(!empty($_POST["search"])){
        $searchQuery = isset($_POST['search']) ? trim($_POST['search']) : '';

    // Validate and sanitize the search query if needed
    // For simplicity, assuming direct usage in the SQL query (please use proper validation/sanitization)
    
    // Your database connection code goes here
    // For example: $conn = mysqli_connect('localhost', 'username', 'password', 'database');

    // Check if the connection was successful
    

    // SQL query to search for records based on the name
    $sql = "SELECT * FROM `medicines`  
            WHERE `name` = '%$searchQuery%'";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        // Process and display the search results
        while ($row = mysqli_fetch_assoc($result)) {
            // Output the results (modify as needed)
            echo "ID: " . $row['id'] . ", Name: " . $row['name'] . "<br>";
        }
        sleep(3);
        header("Location:../n-medicine.php");
        // Free the result set
        mysqli_free_result($result);
    } else {
        echo "No medicines found!";
        header("Location:../n-medicine.php");
        exit();
    }

    // Close the database connection
    mysqli_close($conn);
    }
}
?>
