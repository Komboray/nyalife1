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
    <title>Triage</title>
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

      /* THIS IS THE CSS FOR THE FORM USED TO VIEW USER DETAILS ON A POP UP CONTAINER*/
      /* Style for the popup form container */
    .popup-form-container {
      height: 300px;
      width: 700px; 
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #1d1d2c;
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
    /* Style for the pop-up */
    #popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      z-index: 1;
    }

    /* Style for the close button */
    .close {
      position: absolute;
      top: 10px;
      right: 100px;
      background-color:red;
      
    }
    @media screen and(max-width: 660px) {
        .popup-form-container {
            display:flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align:center;
            width: 100%; 
            
            top: 50%;
            /* left: 50%; */
            transform: translate(-50%, -50%);
            background-color: #f1f1f1;
            
            
        }
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
<!-- THIS BELOW IS THE LINK THAT ALLOWS FOR THE AJAX TO BE CALLED JQUERY CDN -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<body>


    <div id="popupFormEdit" class=" popup-form-container" style = "background-color: #fff; padding: 20px 16px;">
       <div class ="view_user_data">
        </div>  
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
            

            <!-- <button class="card" id="showPopupBtn" style = "background-color:red;">
                
                <div class="cardName" style = "color:white">Click to add a patient to the queue</div>
                
                <div class="iconBx">
                    <span class="material-symbols-outlined" style = "color:white">recent_patient</span>
                
                </div>
            </button> -->

            

            
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
                                // <table>
                                // <tr>                
            
                                //     <td class='popup-trigger' onclick='openPopupForm()' style = 'text-decoration:none;'>
                                //         <h4>{$row["username"]} <br> <span>{$row["email"]}</span></h4>
                                //     </td>
                                // </tr>
            
                                // </table>
                                echo "
                                <table id='userTable'>
                                <tr class='clickable-row'>                
            
                                    <td class='popup-trigger view_data' onclick='openPopupForm()' style = 'text-decoration:none;'>
                                        <h4 class='user_id'>{$row["id"]} <br>{$row["username"]} <br> <span>{$row["email"]}</span></h4>
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

    $(document).ready(function () {

$('.view_data').click(function (e){
    e.preventDefault();

    // console.log('hello');

    var user_id = $(this).closest('td').find('.user_id').text();
    // console.log(user_id);

    $.ajax({
        method: "POST",
        url: "code.php",
        data: {
            'click_view_btn': true,
            'user_id':user_id,
        },
        success: function (response){
            console.log(response);

            $('.view_user_data').html(response);
        }
    });
});
});

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

  // Function to display the pop-up with data
  function showPopup(username, email) {
      document.getElementById("popupUsername").textContent = username;
      document.getElementById("popupEmail").textContent = email;
      document.getElementById("popup").style.display = "block";
    }

    // Function to close the pop-up
    function closePopup() {
      document.getElementById("popup").style.display = "none";
    }

    // Add click event listeners to table rows
    document.addEventListener('DOMContentLoaded', function () {
      const rows = document.querySelectorAll('.clickable-row');

      rows.forEach(row => {
        row.addEventListener('click', function () {
          const username = this.querySelector('h4').textContent;
          const email = this.querySelector('span').textContent;
          showPopup(username, email);
        });
      });
    });
</script>
<script src="js/main.js"></script>
</html>




