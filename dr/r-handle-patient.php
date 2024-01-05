<?php
//we need to include the connection from the database

include("database/connect.php");
//we need to send the details to the database table ffor patients

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS):
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS):


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
                        <input id="email" name="email" type="text" required>
                        
                    </div>
                    <!-- <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <br>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <br> -->
                    
                    <button type="submit">Send to Triage</button>
                </form>
        </div>
    </div>

    <!-- NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="http://">
                        <span class="material-symbols-outlined">emergency</span>
                        <span class="title">Receptionist's dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <span class="material-symbols-outlined">dashboard</span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <span class="material-symbols-outlined">recent_patient</span>
                        <span class="title">Handle Patient</span>
                    </a>
                </li>

                <li>
                    <a href="appointments.php">
                        <span class="material-symbols-outlined">bookmark</span>
                        <span class="title">Medicine</span>
                    </a>
                </li>

                <li>
                    <a href="results.php">
                        <span class="material-symbols-outlined">glucose</span>
                        <span class="title">Results</span>
                    </a>
                </li>

                

                <li>
                    <a href="chat.php">
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
                    
                    <div class="cardName"><button type="button" class="btn" id="showPopupBtn" style = "color:red; ">Click to add a patient to the queue</button></div>
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
                    <button type="button" class="btn"><a href="http://" style="text-decoration: none;">View all</a></button>
                </div>
    
                <table>
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Payment</td>
                            <td>Status</td>
                        </tr>
                    </thead>
        
                    <tbody>
                        <tr>
                            <td>Star Ref</td>
                            <td>$1200</td>
                            <td>Paid</td>
                            <td><span class="status delivered">delivered</span></td>
                        </tr>
        
                        <tr>
                            <td>Star Ref</td>
                            <td>$1200</td>
                            <td>Paid</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
        
                        <tr>
                            <td>Star Ref</td>
                            <td>$1200</td>
                            <td>Paid</td>
                            <td><span class="status return">Return</span></td>
                        </tr>

                        <tr>
                            <td>Star Ref</td>
                            <td>$1200</td>
                            <td>Paid</td>
                            <td><span class="status inProgress">In progress</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- NEW CUSTOMERS -->
            <div class="recentCustomers">
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
            </div>



    
        </div>

        
    </div>
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

</script>
<script src="js/main.js"></script>
</html>