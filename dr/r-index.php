<?php
session_start();
// $_SESSION["username"];
// $_SESSION["email"];
include("database/connect.php");

// $sql = "SELECT COUNT(*) 
//         AS `total_users`
//         FROM `appointments`";

$sql = "SELECT * 
        FROM `appointments`";
$result = mysqli_query($conn, $sql);

if($result){
    $num = mysqli_num_rows($result);

    
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

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<body>

    <!-- NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION -->
    <div class="container" >
        <div class="navigation">
        
            <ul>
                <!-- <li>
                    <a href="http://">
                        <span class="material-symbols-outlined">emergency</span>
                        <span class="title">Receptionist's dashboard</span>
                    </a>
                </li> -->
                <img src="nya-logo.jpg" height="70" width="290">

                <li>
                    <a href="r-index.php">
                        <span class="material-symbols-outlined">dashboard</span>
                        <span class="title">Receptionist's Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="r-handle-patient.php">
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
            <div class="card" style = "background-color:#FF00FF;">
                <div>
                    <div class="numbers" style = "color:white" ><?php echo "{$num}" ?></div>
                    <div class="cardName" style = "color:white">Appointments</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">book_online</span>
                
                </div>
            </div>

            <div class="card" style = "background-color:red">
                <div>
                    <div class="numbers" style = "color:white">15</div>
                    <div class="cardName" style = "color:white">Patient Profiles</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">groups</span>
                
                </div>
            </div>

            
            
            <button type="button" class="card" style = "background-color:black">
            <div >
                <div>
                    
                    <div class="cardName" style = "color:white">Book an appointment</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">menu</span>
                
                </div>
            </div>
            </button>



        </div>


        <!-- THIS IS THE ADDED SECTION IN THE SYSTEM -->




        <!-- THIS IS THE ADDED SECTION OF THE TABLE IN THE SYSTEM -->


            <!-- NEW CUSTOMERS -->
            <!-- <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Recent Patients</h2>
                </div>

                <table>
                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="" alt="" srcset=""></div>
                        </td>

                        <td>
                            <h4>David <br> <span>Italy</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="" alt="" srcset=""></div>
                        </td>

                        <td>
                            <h4>David <br> <span>Italy</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="" alt="" srcset=""></div>
                        </td>

                        <td>
                            <h4>David <br> <span>Italy</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="" alt="" srcset=""></div>
                        </td>

                        <td>
                            <h4>David <br> <span>Italy</span></h4>
                        </td>
                    </tr>
                </table>
            </div> -->

    
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

<script src="js/main.js"></script>
</html>