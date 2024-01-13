<?php
//we need to include the connection from the database

include("database/connect.php");
//we need to send the details to the database table for patients


    if(isset($_POST["submit"])){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);

        $rooms = $_POST["rooms"];
        
            echo $rooms;
        
            

        $sql = "INSERT INTO `patients` (email, stage, username)
                VALUES ('$email' , '$rooms', '$username')";

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
    <title>Dashboard</title>
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
                
                <!-- Your form content goes here -->
                <form id="form" action = "<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
                    <!-- Add your form fields here -->
                    <h1>Add patient details</h1>
                    <br>
                    <div class="input-control">
                        <label for="username">Username:</label>
                        <input id="username" name="username" type="text" required>
                        
                    </div>
                    <div class="input-control">
                        <label for="email">Email:</label>
                        <input id="email" name="email" type="email" required>
                        
                    </div>
                    <br>

                    <!-- this is the drop down box -->
                    <!-- <label for="selectOption">Send the patient to a specific stage:</label>
                    <input type="text" id="selectOption" list="optionsList">
                     -->
                    <!-- Dropdown options list -->
                    
                    <select name= "rooms" id="optionsList">
                        <option value="Triage">Triage</option>
                        <option value="Dr office">Dr office</option>
                        <option value="Lab">Lab</option>
                        <!-- Add more options as needed -->
                    </select>
                    <br>

                    <!-- Optional: Display the selected option -->
                    <p id="selectedOption"></p>



                    
                    <button type="submit" name = "submit">Send to Triage</button>
                </form>
        </div>
    </div>

    <!-- NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION -->
    <div class="container">
        <div class="navigation">
            <ul>
                <!-- <li>
                    <a href="http://">
                        <span class="material-symbols-outlined">emergency</span>
                        <span class="title">Receptionist's dashboard</span>
                    </a>
                    
                </li> -->
                <img src="images/nya-logo.jpg" height="50" width="50">

                <li>
                    <a href="r-index.php">
                        <span class="material-symbols-outlined">dashboard</span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                

                <li>
                    <a href="r-index.php">
                        <span class="material-symbols-outlined">recent_patient</span>
                        <span class="title">Handle Patient</span>
                    </a>
                </li>

                

                

                

                <li>
                    <a href="r-chat.php">
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
            

            <div class="card" id="showPopupBtn">
                <div>
                    
                    <div class="cardName"><button type="button" class='hero-btn red-btn' id="showPopupBtn" style = "color:yellow; ">Click to add a patient to the queue</button></div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">recent_patient</span>
                
                </div>
            </div>

            

            
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
                        </tr>
                    </thead>
        
                    <tbody>
                        <?php
                        $sql = "SELECT *
                                FROM `patients`";

                        $result = mysqli_query($conn, $sql);
                        if($result){
                            $num = mysqli_num_rows($result);

                            if($num>0){
                                while($row = mysqli_fetch_assoc($result)){

                                    echo "
                                    <tr>
                                        <td>{$row["username"]}</td>
                                        <td>{$row["stage"]}</td>
                                        <td>{$row["visit"]}</td>
                                        <td><span class='status delivered'>In the line</span></td>
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
</script>
<script src="js/main.js"></script>
</html>