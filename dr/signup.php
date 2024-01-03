<?php
include("database/connect.php");

//we need to start a session
session_start();
//we need to check whether the fields are not empty
if(!empty($_POST["name"]) &&
   !empty($_POST["email"]) &&
   !empty($_POST["pass"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST, "name" , FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email" , FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "pass" , FILTER_SANITIZE_SPECIAL_CHARS);
    
        $sql = "SELECT * 
                FROM `users`
                WHERE `email` = '$email'";
    
        $response = mysqli_query($conn, $sql);
    
        if($response){
            $num = mysqli_num_rows($response);
            if($num > 0){
                echo "User already exists";
            }else{
    
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql1 = "INSERT INTO `users` (name, email, pass) 
                     VALUES ('$username', '$email', '$hash')";
    
                $result = mysqli_query($conn, $sql1);
    
                if($result){
                    $_SESSION["username"] = $_POST["name"];
                    $_SESSION["email"] = $_POST["email"];
    
                    header("Location:radio.php");
    
                }else{
                   die(mysqli_error($conn));
            }
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
            <form id="form" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "POST">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <span></span>
                        <input type="text" name="name" id="name" placeholder="Name">
                        <div class="error" style = "color:#ff3860; font-size: 14px; height: 13px;"></div>

                    </div>
                    
                    <div class="input-field">
                        <span></span>
                        <input type="email" name="email" id="email" placeholder="Email">
                        <div class="error" style = "color:#ff3860; font-size: 14px; height: 13px;"></div>            
                    </div>
                    

                    <div class="input-field">
                        <span></span>
                        <input type="pass" name="pass" id="pass" placeholder="Password">
                        <div class="error" style = "color:#ff3860; font-size: 14px; height: 13px;"></div>               
                    </div>
                 

                    <div class="input-field">
                        <span></span>
                        <input type="password" name="pass2" id="pass2" placeholder="Conform Password">
                        <div class="error" style = "color:#ff3860; font-size: 14px; height: 13px;"></div>            
                    </div>
                    
                    <p>Lost Password <a href="">Click Here!</a></p>


                </div>
                <div class="btn-field">
                    <button type="submit" name = "submit" id="signupBtn" >Sign up</button>
   
                    <button type="button" id="signinBtn" class="disable"><a href="login.php" style = "text-decoration:none; color:red;">Sign in</a></button>

                </div>
            </form>
        </div>
    </div>

</body>
<script src="scipt.js"></script>
<script>
    const form = document.getElementById('form');
const uname = document.getElementById('name');
const email = document.getElementById('email');
const pass = document.getElementById('pass');
const pass2 = document.getElementById('pass2');

form.addEventListener('submit', e => {
    // e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText =  message;
    inputControl.classList.add('error');
    inputControl.classList.add('success');

}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');

};

const isValidEmail =  email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const unameValue = uname.value.trim();
    const emailValue = email.value.trim();
    const passValue = pass.value.trim(); 
    const pass2Value = pass2.value.trim();

    if(unameValue === ''){
        setError(uname, 'Username is required!');
    }else{
        setSuccess(uname);
    }

    if(emailValue === ''){
        setError(email, 'Email is required!');
    }else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(passValue === '') {
        setError(pass, 'Password is required');
    } else if (passValue.length < 8 ) {
        setError(pass, 'Password must be at least 8 character.')
    } else {
        setSuccess(pass);
    }

    if(pass2Value === '') {
        setError(pass2, 'Please confirm your password');
    } else if (pass2Value !== passValue) {
        setError(pass2, "Passwords doesn't match");
    } else {
        setSuccess(pass2);
    }


};

   
</script>
</html>
