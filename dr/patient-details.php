<?php
if(isset($_POST["submit"])){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);

    $rooms = $_POST["rooms"];
    
        echo $rooms;
    
        

    $sql = "INSERT INTO `patients` (email, stage, username)
            VALUES ('$email' , '$rooms', '$username')";

    // try{
        $response = mysqli_query($conn, $sql);
    if($response){

        echo "Details have been sent to the database!";

        header("Location:r-handle-patient.php");
        
    }else{
        echo "There is a problem";
        mysqli_close($conn);
        exit();
    }
//     }catch(mysqli_sql_exception $e){
//         if ($e->getCode() == 1062) { // 1062 is the MySQL error code for duplicate entry
//             // Handle duplicate entry error
//             echo "The name 'peter drury' already exists.";
//         } else {
//             // Handle other database errors
//             echo "Database error: " . $e->getMessage();
//         }
//     }
}