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
<?php

// $_SESSION["username"];
// $_SESSION["email"];
include("database/connect.php");

// $sql = "SELECT COUNT(*) 
//         AS `total_users`
//         FROM `appointments`";

$sql = "SELECT * 
        FROM `patients`";
$result = mysqli_query($conn, $sql);

if($result){
    $numPatients = mysqli_num_rows($result);

    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reception</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        /* css for pop-up */
        .popup-form-container {
            /* height: 300px;
            width: 200px;  */
            display: none;
            /* position: fixed; */
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* background-color: #f1f1f1; */
            padding: 20px;
            border: 1px solid #ccc;
            z-index: 1;
            }

            /* Style for the span element */
            .popup-trigger {
            cursor: pointer;
            text-decoration: underline;
            color: blue;

            /* css for the second trial form */
            

            .body{
                font-family: 'Poppins';
            }
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            h1{
                font-size: 40px;
                color: #fff;
            }

            p{
                color: #fff;
            }

            a{
                text-decoration: none;
                color: #115035;
            }   

            input, textarea, select{
                width: 100%;
                background-color: #141824;
                border: none;
                outline: none;
                padding: 10px;
                font-family: 'Poppins';
                margin-top: 5px;
                resize: none;
                color: #fff;
                border-radius: 10px;
            }

            .body-box{
                padding: 20px;
            }

            .row{
                display: flex;
                justify-content: space-between;
                padding: 5px 0;
            }

            .col-12{
                width: 100%;
            }

            .col-3{
                width: 30%;
            }

            .col-6{
                width: 48%;
            }

            .head, .footer{
                background-color: #141824;
                padding: 20px 10px;
            }

            .head p{
                color: #115035;
            }

            .head{
                text-align: center;
            }


            .container{
                padding: 20px 16px;
                background-color: #1d2228;
                position: relative;
                /* left: 600px; */
            }

            body{
                width: 500px;
                background-color: #1d1d2c;
            }


            @media screen and (max-width:600px) {
                .row{
                    flex-direction: column;
                    padding: 0;
                }

                .col-12{
                    padding: 10px 0;
                    width: 100%;

                }

                .col-3{
                    padding: 10px 0;
                    width: 30%;
                }

                .col-6{
                    padding: 10px 0;
                    width: 100%;
                }

                .container{
                    
                    padding: 50px 16px;
                    
                    
                
                }
            }
                }
    </style>
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
                <img src="nya-logo.jpg" height="100" width="290">

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
                    <a href="r-appointments.php">
                        <span class="material-symbols-outlined">book_online</span>
                        <span class="title">Appointments</span>
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
            <div href ="r-appointments.php" class="card" style = "background-color:#FF00FF;">
                <a href ="r-appointments.php" style = "text-decoration: none">
                    <div class="numbers" style = "color:white" ><?php echo "{$num}" ?></div>
                    <div class="cardName" style = "color:white">Appointments</div>
                </a>

                <div class="iconBx">
                    <span class="material-symbols-outlined">book_online</span>
                
                </div>
            </div>

            <div href="r-handle-patient.php" class="card" style = "background-color:red; text-decoration: none" >
                <a href="r-handle-patient.php" style = "text-decoration: none">
                    <div class="numbers" style = "color:white"><?php echo "{$numPatients}" ?></div>
                    <div class="cardName" style = "color:white">Patient Profiles</div>
                </a>

                <a href="r-handle-patient.php" class="iconBx">
                    <span class="material-symbols-outlined">groups</span>
                
                </a>
                
            </div>

            
            
            <button type="button" class="card popup-trigger" style = "background-color:black; text-decoration:none;" onclick="openPopupForm()">
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

        <!-- TRIAL POP-UP FROM -->
        <div class="container popup-form-container" id="popupFormEdit" style = "background-color: #fff; padding: 20px 16px;">
            <div class="body">

                <!-- FORM HEAD -->
                <div class="head" style = "text-align: center;">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                
                
                    <h1>
                        Booking Form
                    </h1>
                    <p style = "color: #115035;">
                        Let's Start To book Now
                    </p>
                </div>
                <!-- FORM HEAD IMEISHA -->


                <!-- FORM BODY BOX -->
                <form class="body-box" action = "Classes/booking-form.php" method = "POST" style = "padding: 20px;">
                    <div class="row" style = "display: flex; justify-content: space-between; padding: 5px 0;">
                        <div class="col-6" style = "width: 48%;">
                            <p>Patient's Name</p>
                            <input type="text" name="fname" id="fname" placeholder = "Enter Patient's Name" style = "width: 100%;
                                            background-color: #141824;
                                            border: none;
                                            outline: none;
                                            padding: 10px;
                                            font-family: 'Poppins';
                                            margin-top: 5px;
                                            resize: none;
                                            color: #fff;
                                            border-radius: 10px;" required>
                        </div>

                        <div class="col-6" style = "width: 48%;">
                            <p>Email Address</p>
                            <input type="email" name="email" id="email" placeholder = "Email Address" style = "width: 100%;
                                            background-color: #141824;
                                            border: none;
                                            outline: none;
                                            padding: 10px;
                                            font-family: 'Poppins';
                                            margin-top: 5px;
                                            resize: none;
                                            color: #fff;
                                            border-radius: 10px;" required>
                        </div>
                    </div>

                    <div class="row" style = "display: flex; justify-content: space-between; padding: 5px 0;">
                        <div class="col-6" style = "width: 48%;">
                            <p>Choose Doctor available</p>
                            <select name="dr" id="dr" style = "width: 100%;
                                            background-color: #141824;
                                            border: none;
                                            outline: none;
                                            padding: 10px;
                                            font-family: 'Poppins';
                                            margin-top: 5px;
                                            resize: none;
                                            color: #fff;
                                            border-radius: 10px;" required>
                                <option value="Dr. Shola">Dr. Schola</option>
                                

                            </select>
                        </div>

                        <div class="col-6" style = "width: 48%;">
                            <p>Select Service</p>
                            <select name="services" id="services" style = "width: 100%;
                                            background-color: #141824;
                                            border: none;
                                            outline: none;
                                            padding: 10px;
                                            font-family: 'Poppins';
                                            margin-top: 5px;
                                            resize: none;
                                            color: #fff;
                                            border-radius: 10px;" required>
                                <option value="Obstetrics">Obstetrics - ksh.3000</option>
                                <option value="Gynecology">Gynecology - ksh.3000</option>
                                <option value="Teens Health">Teens Health - ksh.2500</option>
                                <option value="Surgeries">Surgeries - ksh.20000</option>
                                <option value="In Office Procedures">In Office Procedures - ksh.10000</option>
                                

                            </select>
                        </div>
                    </div>

                    <div class="row" style = "display: flex; justify-content: space-between; padding: 5px 0;">
                        <div class="col-6" style = "width: 48%;">
                            <p>Select the Date</p>
                            <input type="date" name="date" id="date" style = "width: 100%;
                                            background-color: #141824;
                                            border: none;
                                            outline: none;
                                            padding: 10px;
                                            font-family: 'Poppins';
                                            margin-top: 5px;
                                            resize: none;
                                            color: #fff;
                                            border-radius: 10px;" required>
                        </div>

                        <div class="col-6" style = "width: 48%;">
                            <p>Choose the time</p>
                            <select name="time-select" id="time" style = "width: 100%;
                                            background-color: #141824;
                                            border: none;
                                            outline: none;
                                            padding: 10px;
                                            font-family: 'Poppins';
                                            margin-top: 5px;
                                            resize: none;
                                            color: #fff;
                                            border-radius: 10px;">
                                <option value="8.00AM - 8.30AM">8.00AM - 8.30AM</option>
                                <option value="8.30AM - 9.00AM">8.30AM - 9.00AM</option>
                                <option value="9.00AM - 9.30AM">9.00AM - 9.30AM</option>
                                <option value="9.30AM - 10.00AM">9.30AM - 10.00AM</option>
                                <option value="10.00AM - 10.30AM">10.00AM - 10.30AM</option>
                                <option value="10.30AM - 11.00AM">10.30AM - 11.00AM</option>
                                <option value="11.00AM - 11.30AM">11.00AM - 11.30AM</option>
                                <option value="11.30AM - 12.00PM">11.30AM - 12.00PM</option>
                                <option value="12.00PM - 12.30PM">12.00PM - 12.30PM</option>
                                <option value="12.30PM - 1.00PM">12.30PM - 1.00PM</option>
                                <option value="1.00PM - 1.30PM">1.00PM - 1.30PM</option>
                                <option value="1.30PM - 2.00PM">1.30PM - 2.00PM</option>
                                <option value="2.00PM - 2.30PM">2.00PM - 2.30PM</option>
                                <option value="2.30PM - 3.00PM">2.30PM - 3.00PM</option>
                                <option value="3.30PM - 4.00PM">3.30PM - 4.00PM</option>
                                <option value="4.00PM - 4.30PM">4.00PM - 4.30PM</option>
                                <option value="4.30PM - 5.00PM">4.30PM - 5.00PM</option>

                            </select>
                        </div>
                    </div>

                    <div class="row" style = "display: flex; justify-content: space-between; padding: 5px 0;">
                        <div class="col-12" style = "width: 100%;">
                            <p>Enter Email to be sent to the patient for confirmation of booking</p>
                            <textarea name="messages" id="messages" cols="3" rows="10" style = "width: 100%;
                                            background-color: #141824;
                                            border: none;
                                            outline: none;
                                            padding: 10px;
                                            font-family: 'Poppins';
                                            margin-top: 5px;
                                            resize: none;
                                            color: #fff;
                                            border-radius: 10px;" ></textarea>
                        </div>


                    </div>
                    

                    <div class="row">
                        <div class="col-3">
                            <button type="button" onclick="addPredefinedText()" style = "width: 100%;
                                            background-color: purple;
                                            border: none;
                                            outline: none;
                                            padding: 10px;
                                            font-family: 'Poppins';
                                            margin-top: 5px;
                                            resize: none;
                                            color: #fff;
                                            border-radius: 10px;">Generate a Predefined Email</button>
                            
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-3">
                            <input type="submit" name ="Submit-booking" value="Submit-booking" style = "width: 100%;
                                            background-color: #141824;
                                            border: none;
                                            outline: none;
                                            padding: 10px;
                                            font-family: 'Poppins';
                                            margin-top: 5px;
                                            resize: none;
                                            color: #fff;
                                            border-radius: 10px;">
                        </div>


                    </div>






                </form>
                <span onclick="closePopupForm()" style = "width: 100%;
                                            background-color: red;
                                            border: none;
                                            outline: none;
                                            padding: 10px;
                                            font-family: 'Poppins';
                                            margin-top: 5px;
                                            resize: none;
                                            color: #fff;
                                            border-radius: 10px;">Close</span>
                <!-- FORM BODY BOX -->


                <!-- THIS IS THE FOOTER END -->


            </div>
            <!-- THIS IS THE MAIN FORM AREA END -->
        </div>

            <!-- THIS IS THE FORM THAT EDITS USER DETAILS -->

    <!-- <div id="popupFormEdit" class="popup-form-container">
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
    </div> -->

    <!-- THIS IS THE END OF THE FORM THAT EDITS USER DETAILS -->



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

// Function to open the popup form for BOOKING OF APPOINTMENT
function openPopupForm() {
    var popupForm = document.getElementById('popupFormEdit');
    popupForm.style.display = 'block';
  }

  // Function to close the popup form FOR BOOKING OF APPOINTMENT
  function closePopupForm() {
    var popupForm = document.getElementById('popupFormEdit');
    popupForm.style.display = 'none';
  }

  //this is the function that creates the predefined email
  function addPredefinedText() {
    // Get the textarea element
    var textarea = document.getElementById('messages');

    // Get the user input value
    var userInputValue = document.getElementById("fname").value;

    // Get the user input value
    var dateInputValue = document.getElementById("date").value;

    // Get the user input value
    var timeInputValue = document.getElementById("time").value;
     
    // Get the user input value
    var selectElement = document.getElementById("dr");
    // Change the selected option to the second option (index 1)
    var selectedDr = selectElement.options[selectElement.selectedIndex].text;

    // Get the user input value
    var selectService = document.getElementById("services");
    // Change the selected option to the second option (index 1)
    var selectedServices = selectService.options[selectService.selectedIndex].text;


    // Define your predefined subset of text
    var predefinedText = "Dear " + userInputValue + ", \nYou have an appointment with "+ selectedDr + "\non " + dateInputValue + " at " + timeInputValue + "\nyour service is "+ selectedServices +"\nThank you for choosing Nyalife Clinic.";

    // Add the predefined text to the textarea
    textarea.value = predefinedText;
  }
</script>
</body>
<!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS -->

<script src="js/main.js"></script>
</html>