<?php
//we need to include the connection from the database

include("database/connect.php");
//we need to send the details to the database table for patients


    if(isset($_POST["submit"])){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);

        $rooms = $_POST["rooms"];
        
            echo $rooms;
        
            

        $sql = "INSERT INTO `patients` (email, rooms, username, date)
                VALUES ('$email' , '$rooms', '$username', CURRENT_DATE)";

        try{
            $response = mysqli_query($conn, $sql);
            if($response){

                echo "Details have been sent to the database!";
                header("Location: r-handle-patient.php");
                exit();
                
            }else{
                mysqli_close($conn);
                exit();
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

    



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reception</title>
    <style>
        /* this is the css for the pop up form */
        .container form{
    margin-top: -20px;
    transition: all 0.3s ease;
}

.container form .data{
    height: 45px;
    width: 100%;
    margin: 40px 0;
}
form .data label{
    font-size: 18px;
}

form .data input{
    height: 100%;
    width: 100%;
    padding-left: 10px;
    font-size: 17px;
    border: 1px solid silver;
}

form .data input:focus{
    border-color: #3498db;
    border-bottom-width: 2px;
}

form .forget-pass{
    margin-top:  -8px;
}

form .forget-pass a{
    color: #3498db;
    text-decoration: none;
}

form .forget-pass a:hover{
    text-decoration: underline;
}

form .btn{
    margin: 30px 0;
    height: 45px;
    width: 100%;
    position: relative;
    overflow: hidden;
}

form .btn .inner{
    height: 100%;
    width: 300%;
    position: absolute;
    left: -100%;
    z-index: -1;
    transition: all 0.4s;
}

form .btn:hover .inner{
    left: 0;
}

form .btn button{
    height: 100%;
    width: 100%;
    background: none;
    border: none;
    color: #fff;
    background: #11131e;
    font-size: 18px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    border-radius: 8px;
    overflow: hidden;
}

form .signup-link{
    text-align: center;
}

form .signup-link a{
    color: #3498db;
    text-decoration: none;
}

form .signup-link a:hover{
    text-decoration: underline;
}

#errorName{
    color: red;
 }

      /* THIS IS THE CSS FOR THE FORM USED TO EDIT USER DETAILS ON THE SPAN*/
      /* Style for the popup form container */
    .popup-form-container {
      height: 300px;
      width: 200px; 
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #f1f1f1;
      padding: 20px;
      border: 1px solid #ccc;
      z-index: 1;
    }

    /* Style for the span element */
    .popup-trigger {
      cursor: pointer;
      text-decoration: underline;
      color: blue;
    }
    </style>
</head>

<!-- MATERIAL ICONS FROM GOOGLE --> <!-- MATERIAL ICONS FROM GOOGLE -->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


<!-- the css link --><!-- the css link --><!-- the css link --><!-- the css link --><!-- the css link -->

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/handle-pat.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<body>

    <div id="popupForm" class="popup">
        <div class="popup-content">
            <span class="close" id="closeBtn">&times;</span>
            <!-- WE HAVE ADDED THE MODIFIED FIEL HERE -->
            <div class="text">Add patient details</div>
            <form id="form" action = "<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">

              <!-- <div class="data">
                <label for="username">Username:</label>
                <input id="username" name="username" type="text" required>
              </div> -->

              <div class="data">
                <label for="email">Email:</label>
                <input id="email" name="email" type="email" required>
              </div>

              <div class="data">
                    <select name= "rooms" id="optionsList">
                        <!-- <option value="Triage">Triage</option> -->
                        <option value="Dr office">Dr office</option>
                        <option value="Lab">Lab</option>
                        <!-- Add more options as needed -->
                    </select>
              </div>

              

              <div class="btn">
                <!-- <div class = "inner"></div> -->
                <button type = "submit" name = "submit"  >SEND TO NEXT STAGE</button><br>
                
              </div>
            </form>

            <!-- END OF THE MODIFIED FORM -->
        </div>
    </div>

    <!-- THIS IS THE FORM THAT EDITS USER DETAILS -->

    <div id="popupFormEdit" class="popup-form-container">
        <form action = "edit-from.php" method = "POST">
            <label for="name">Enter the email you want to update:</label>
            <input type="email" id="email-compared" name="email-compared" placeholder = "Confrim from recent patients" required><br>

            <label for="name">Name:</label>
            <input type="text" id="name-edit" name="name-edit" placeholder = "Enter new name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email-edit" name="email-edit" placeholder = "Enter new email" required><br>
            <br>
            <button type="submit" name="Send-update">Submit the Edit</button>
        </form>
        <br>
        <span onclick="closePopupForm()">Close</span>
    </div>

    <!-- THIS IS THE END OF THE FORM THAT EDITS USER DETAILS -->

    <!-- NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION -->
    <div class="container">
        <div class="navigation">
        <img src="images/nya-logo.jpg" height="50" width="250">
            <ul>
                <!-- <li>
                    <a href="http://">
                        <span class="material-symbols-outlined">emergency</span>
                        <span class="title">Receptionist's dashboard</span>
                    </a>
                    
                </li> -->
                <img src="nya-logo.jpg" height="100" width="290">

                <li>
                    <a href="n-index.php">
                        <span class="material-symbols-outlined">dashboard</span>
                        <span class="title">Nurse's Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="n-handle-patient.php">
                        <span class="material-symbols-outlined">recent_patient</span>
                        <span class="title">Handle Patient</span>
                    </a>
                </li>

                <li>
                    <a href="n-medicine.php">
                        <span class="material-symbols-outlined">book_online</span>
                        <span class="title">Medicine</span>
                    </a>
                </li>


                <li>
                    <a href="n-results.php">
                        <span class="material-symbols-outlined">book_online</span>
                        <span class="title">Results</span>
                    </a>
                </li>
                

                <li>
                    <a href="n-chat.php">
                        <span class="material-symbols-outlined">forum</span>
                        <span class="title">Chat</span>
                    </a>
                </li>

                <li>
                    <a href="database/logout.php">
                        <span class="material-symbols-outlined">logout</span>
                        <span class="title">Log out</span>
                    </a>
                </li>

                
            </ul>
        </div>
    </div>

    <!---------------------------------MAIN--------------------------------------------------->

    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <span class="material-symbols-outlined">menu</span>
                        
            </div>

            <div class="search">
                <label for="search">
                    
                    <input type="search" name="search" id="search" value="Search here">
                </label>
            </div>
            
            <!-- <div class="user">
                <img src="" alt="" >
            </div> -->

        </div>
        <!-- CARDS CARDS CARDS CARDS CARDS CARDS -->

        
        <div class="cardBox">
            

            <button class="card" id="showPopupBtn" style = "background-color:red;">
                <!-- <div> -->
                   
                    <!-- <div class="cardName"><button type="button" class='hero-btn red-btn' id="showPopupBtn" style = "color:red; ">Click to add a patient to the queue</button></div> -->
                <!-- </div> -->
                <div class="cardName" style = "color:white">Click to add a patient to the queue</div>
                
                <div class="iconBx">
                    <span class="material-symbols-outlined" style = "color:white">recent_patient</span>
                
                </div>
            </button>

            

            
            <!-- <div class="card">
                <div>
                    <div class="numbers">15401</div>
                    <div class="cardName">Daily News</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">menu</span>
                
                </div>
            </div> -->

        </div>



        <!-- ORDER DETAILS LIST -->
        <div class="details">

            <div class="recentOrders">

                <div class="cardHeader">
                    <h2>Today's Patients</h2>
                    <!-- <button type="button" class="btn"><a href="http://" style="text-decoration: none;">View all</a></button> -->
                </div>
    
                <table>
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Stage</td>
                            <td>Visit</td>
                            <td>Status</td>
                            <a href="http://"><td></td></a>
                            
                        </tr>
                    </thead>
        
                    <tbody>
                        <?php
                        $currentDate = date("Y-m-d");
                        echo "<h1>$currentDate </h1>";
                        $sql = "SELECT *
                                FROM `patients`
                                WHERE `date` = '$currentDate'";

                        $result = mysqli_query($conn, $sql);
                        if($result){
                            $num = mysqli_num_rows($result);

                            if($num>0){
                                while($row = mysqli_fetch_assoc($result)){

                                    echo "
                                    <tr>
                                        <td>{$row["username"]}</td>
                                        <td>{$row["rooms"]}</td>
                                        <td>{$row["visit"]}</td>
                                        <td><span class='status delivered'>In the line</span></td>
                                        <td><span class='material-symbols-outlined popup-trigger' onclick='openPopupForm()'>edit</span></td>
                                    </tr>
                                    ";
                                }
                            }
                        }
                        


                        ?>
                
                    </tbody>
                </table>

            </div>

            <!-- NEW CUSTOMERS -->
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Recent Patients</h2>
                </div>
                  <?php

                    $sql = "SELECT *
                            FROM `patients`";
                    $res = mysqli_query($conn, $sql);

                    if($res){

                        $num = mysqli_num_rows($res);

                        if($num > 0){
                            while($row = mysqli_fetch_assoc($res)){
                                echo "
                                <table>
                                <tr>                
            
                                    <td>
                                        <h4>{$row["username"]} <br> <span>{$row["email"]}</span></h4>
                                    </td>
                                </tr>
            
                                </table>
                                
                                
                                
                                ";
                            }
                        }
                    }
                  
                ?>

                
                
            </div>



    
        </div>

        
    </div>
    <script>
    
    // Menu toggle
    let toggle = document.querySelector(".toggle");
    let nav = document.querySelector(".navigation");
    let main = document.querySelector(".main");


    
    toggle.onclick = function(){
        nav.classList.toggle("active");
        main.classList.toggle("active");
    }
</script>
</body>
<!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
  const showPopupBtn = document.getElementById('showPopupBtn');
  const popupForm = document.getElementById('popupForm');
  const closeBtn = document.getElementById('closeBtn');

  // Show the pop-up form
  showPopupBtn.addEventListener('click', function () {
    popupForm.style.display = 'block';
  });

  // Close the pop-up form
  closeBtn.addEventListener('click', function () {
    popupForm.style.display = 'none';
  });

  // Close the pop-up form if clicked outside the form
  window.addEventListener('click', function (event) {
    if (event.target === popupForm) {
      popupForm.style.display = 'none';
    }
  });
});


// Optional: Display the selected option
const selectOptionInput = document.getElementById('selectOption');
    const selectedOptionDisplay = document.getElementById('selectedOption');

    selectOptionInput.addEventListener('input', function() {
      selectedOptionDisplay.textContent = `You are sending the patient to: ${selectOptionInput.value}`;
    });

 // Function to open the popup form for editing user details
 function openPopupForm() {
    var popupForm = document.getElementById('popupFormEdit');
    popupForm.style.display = 'block';
  }

  // Function to close the popup form for editing user details
  function closePopupForm() {
    var popupForm = document.getElementById('popupFormEdit');
    popupForm.style.display = 'none';
  }
</script>
<script src="js/main.js"></script>
</html>




