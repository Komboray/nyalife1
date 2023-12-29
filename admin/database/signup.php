<?php
include("connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = filter_input(INPUT_POST, "name" , FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email" , FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "pass" , FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "SELECT * 
            FROM users
            WHERE `email` = '$email'";

    $response = mysqli_query($conn, $sql);

    if($response){
        $num = mysqli_num_rows($response);
        if($num > 0){
            echo "User already exists";
        }else{

            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql1 = "INSERT INTO `users` (username, email, pass) 
                 VALUES ('$username', '$email', '$hash')";

            $result = mysqli_query($conn, $sql1);

        if($result){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["email"] = $_POST["email"];

            header("Location:radio.php");

        }else{
            die(mysqli_error($conn));
        }
        }
        
    }
        
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<link rel="stylesheet" href="login.css">
<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign Up</h1>
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "POST">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <span></span>
                        <input type="text" name="name" id="name" placeholder="Name">
                    </div>

                    <div class="input-field">
                        <span></span>
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="input-field">
                        <span></span>
                        <input type="pass" name="pass" id="pass" placeholder="Password">
                    </div>
                    <p>Lost Password <a href="">Click Here!</a></p>


                </div>
                <div class="btn-field">
                    <button type="submit"  id="signupBtn" >Sign up</button>
   
                   
                    <button type="submit" id="signinBtn" class="disable"><a href="login.php" style = "text-decoration:none; color:red;">Sign in</a></button>

                </div>
            </form>
        </div>
    </div>
</body>
<script src="scipt.js"></script>
<script>
    // let signupBtn = document.getElementById("signupBtn");
    // let signinBtn = document.getElementById("signinBtn");
    // let nameField = document.getElementById("nameField");
    // let title = document.getElementById("title");
    // let name = document.getElementById("name").value;
    // let email = document.getElementById("email").value;
    // let pass = document.getElementById("pass").value;
     

    // signinBtn.onclick = function(){
    //     nameField.style.maxHeight = "0";
    //     title.innerHTML = "Sign In";
    //     signupBtn.classList.add("disable");
    //     signinBtn.classList.remove("disable");



    // }

    // signupBtn.onclick = function(){
    //     nameField.style.maxHeight = "60px";
    //     title.innerHTML = "Sign Up";
    //     signupBtn.classList.remove("disable");
    //     signinBtn.classList.add("disable");

        
    // }
</script>
</html>
