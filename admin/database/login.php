<?php 
//we need to involve the use of server
include('connect.php');
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
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "POST">
                <div class="input-group">
                    <!-- <div class="input-field" id="nameField">
                        <span></span>
                        <input type="text" name="name" id="name" placeholder="Name">
                    </div> -->

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
                    
                    <button type="button"  id="signupBtn" class="disable"><a href="signup.php" style = "text-decoration:none; color:red;">Sign up</a></button>
                    <!-- <button type="submit" id="signinBtn" class="disable"><a href="signup.php"></a> Sign up</button> -->
                    <button type="submit" name = "submit" id="signinBtn" >Sign in</button>


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
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = filter_input(INPUT_POST, "email" , FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password" , FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "SELECT * 
            FROM users
            WHERE `email` = '$email'
            AND `password` = '$password'";

     $response = mysqli_query($conn, $sql);

      if($response){

                                            

            if(mysqli_num_rows($response) > 0){
                while($row = mysqli_fetch_assoc($response)){
                    echo $row["id"];

                     $id = $row["id"];

                     $sql1 = "SELECT *
                              FROM business
                              WHERE `user_id` = '$id'";

                                                        
                  if(mysqli_num_rows($wresponse) > 0){
                         while($roww = mysqli_fetch_assoc($wresponse)){
                          echo $roww["type"];

                             $type = $roww["type"];

                                if($type = "agri"){
                                    header("Location:agri-one-index.php");
                                  }else if($type = "shop"){
                                     header("Location:shop-one-index.php");
                                         }
                                      }
                                 }
                                                        
                             }
                          }
                                                
                                                
                                                // header("Location:one-index.php");

                                                
                    }else{

                      echo "<div class ='div-center'>
                               <h2 style='color:red;'>User does not exist</h2>
                            </div>";
                                die(mysqli_error($conn));
                                                
               }
}


?>