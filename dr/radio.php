<?php
include("database/connect.php");
// we are continuing the session from the sign up page, the new user gets info
session_start();

$user = $_SESSION["username"];
$email = $_SESSION["email"];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submit'])){
        $option = $_POST['select'];
    
        echo $option;
    
        switch ($option){
            case "Doctor":

                //function that inserts data into the dr table
                $sql = "UPDATE `users`
                        SET `role_no` = 1
                        WHERE `email` = '$email'";
                

                $response = mysqli_query($conn, $sql);

                if($response){
                    //this echo statement will be a modified alert
                    echo "Details sent successfully!";

                    //sleep for 6 seconds b4 diverting to the next page
                    // sleep(6);
                    header("Location:index.php");
                }
    
                break;
            case "Nurse":
                //
                //function that inserts data into the dr table
                $sql = "UPDATE `users`
                        SET `role_no` = 2
                        WHERE `email` = '$email'";

                $response = mysqli_query($conn, $sql);

                if($response){
                    
                    echo "Details sent successfully!";
                    //sleep for 6 seconds b4 diverting to the next page
                    // sleep(6);
                    header("Location:nurse/nurse.php");
                }
                break;
            case "Pharmacist":
                //
                //function that inserts data into the dr table
                $sql = "UPDATE `users`
                        SET `role_no` = 3
                        WHERE `email` = '$email'";
                $response = mysqli_query($conn, $sql);

                if($response){
                    
                    echo "Details sent successfully!";

                    //sleep for 6 seconds b4 diverting to the next page
                    // sleep(6);
                    header("Location:index.php");
                }
                break;
            case "Lab Tech":
                //
                //function that inserts data into the dr table
                $sql = "UPDATE `users`
                        SET `role_no` = 4
                        WHERE `email` = '$email'";
                $response = mysqli_query($conn, $sql);

                if($response){
                    
                    echo "Details sent successfully!";

                    //sleep for 6 seconds b4 diverting to the next page
                    // sleep(6);
                    header("Location:index.php");
                }
                break;
            case "Receptionist":
                //
                //function that inserts data into the dr table
                $sql = "UPDATE `users`
                        SET `role_no` = 5
                        WHERE `email` = '$email'";
                $response = mysqli_query($conn, $sql);

                if($response){
                    
                    echo "Details sent successfully!";

                    //sleep for 6 seconds b4 diverting to the next page
                    // sleep(6);
                    header("Location:index.php");
                }
                break;
            case "Accountant":
                //
                //function that inserts data into the dr table
                $sql = "UPDATE `users`
                        SET `role_no` = 6
                        WHERE `email` = '$email'";
                $response = mysqli_query($conn, $sql);

                if($response){
                    
                    echo "Details sent successfully!";

                    //sleep for 6 seconds b4 diverting to the next page
                    // sleep(6);
                    header("Location:index.php");
                }
                break;                
        }
    
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pick your role</title>
</head>

<!-- MATERIAL ICONS FROM GOOGLE --> <!-- MATERIAL ICONS FROM GOOGLE -->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="radio.css">
<body>
    <div class="wrapper">
        <div class="title">What is your Title in the hospital</div>
        <div class="box">

          <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <input type="radio" name="select" value= "Doctor" id="option-1">
            <input type="radio" name="select" value= "Nurse" id="option-2">
            <input type="radio" name="select" value= "Pharmacist" id="option-3">
            <input type="radio" name="select" value= "Lab Tech" id="option-4">
            <input type="radio" name="select" value= "Receptionist" id="option-5">
            <input type="radio" name="select" value= "Accountant" id="option-6">


            <label for="option-1" class="option-1">
                <div class="dot"></div>
                <div class="text">Doctor</div>
            </label>

            <label for="option-2" class="option-2">
                <div class="dot"></div>
                <div class="text">Nurse</div>
            </label>

            <label for="option-3" class="option-3">
                <div class="dot"></div>
                <div class="text">Pharmacist</div>
            </label>

            <label for="option-4" class="option-4">
                <div class="dot"></div>
                <div class="text">Lab Tech</div>
            </label>

            <label for="option-5" class="option-5">
                <div class="dot"></div>
                <div class="text">Receptionist</div>
            </label>

            <label for="option-6" class="option-6">
                <div class="dot"></div>
                <div class="text">Accountant</div>
            </label>

            <input type="submit" class="hero-btn" name = "submit" value="Submit">
          </form>
            
        </div>
    </div>
</body>
</html>