<?php 
//we need to involve the use of server
include('database/connect.php');
//we start the users session here to allow for transfer of user data
session_start();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
</head>
<link rel="stylesheet" href="login.css">
<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign in</h1>
            <form id= "form" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method ="POST">
                <div class="input-group">
                    <!-- <div class="input-field" id="nameField">
                        <span></span>
                        <input type="text" name="name" id="name" placeholder="Name">
                    </div> -->

                    <div class="input-field">
                        <span></span>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <div class="error" ></div>
                    </div>

                    <div class="input-field">
                        <span></span>
                        <input type="password" name="pass" id="pass" placeholder="Password" required>
                        <div class="error" ></div>
                    </div>
                    <p>Lost Password <a href="">Click Here!</a></p>


                </div>
                <div class="btn-field">
                    
                    <button type="button"  id="signupBtn" class="disable"><a href="signup.php" style = "text-decoration:none; color:red;">Sign up</a></button>
                    <!-- <button type="submit" id="signinBtn" class="disable"><a href="signup.php"></a> Sign up</button> -->
                    <button type="submit" name ="submit" id="signinBtn" >Sign in</button>


                </div>
            </form>
        </div>
    </div>
</body>

<!-- <script>
const form = document.getElementById('form');

const email = document.getElementById('email');
const pass = document.getElementById('pass');


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
    
    const emailValue = email.value.trim();
    const passValue = pass.value.trim(); 
   

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

    


};

   
</script> -->

</html>
<?php


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = filter_input(INPUT_POST, "email" , FILTER_SANITIZE_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST, "pass" , FILTER_SANITIZE_SPECIAL_CHARS);

            $hash = password_hash($password, PASSWORD_DEFAULT);
            if(password_verify($password,$hash)){

                $sql = "SELECT * 
                        FROM `users`
                        WHERE `email` = '$email'
                        AND `pass` = '$password'";

                $response = mysqli_query($conn, $sql);

                try{

                    if($response){
                        $num = mysqli_num_rows($response);
                        if($num>0){
                            header("Location:index.php");
                        }
                    }else{
                        echo "Please Sign up";
                    }

                }catch(mysqli_sql_exception $e){
                    if ($e->getCode() == 1062) { // 1062 is the MySQL error code for duplicate entry
                        // Handle duplicate entry error
                        echo "The name 'peter drury' already exists.";
                    } else {
                        // Handle other database errors
                        echo "Database error: " . $e->getMessage();
                    }
                }

            }
            
        
        }else{
            echo "Something went wrong";

        }
    
?>


