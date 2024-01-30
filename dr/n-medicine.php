<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse's Medicine</title>
    <link rel="icon" type="image/x-icon" href="nya-logo.jpg">
</head>

<!-- MATERIAL ICONS FROM GOOGLE --> <!-- MATERIAL ICONS FROM GOOGLE -->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


<!-- the css link --><!-- the css link --><!-- the css link --><!-- the css link --><!-- the css link -->

<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<body>

    <!-- NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION -->
    <div class="container">
        <div class="navigation">
            <ul>
                <!-- <li>
                    <a href="http://">
                        <span class="material-symbols-outlined">emergency</span>
                        <span class="title">Nurse's dashboard</span>
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
                <form action="database/search_results.php" method="post">
                    <label for="search">
                        
                        <input type="search" name="search" id="search" value="Search here"><button type="submitSearch">Search</button>
                    </label>
                    
                </form>
            </div>
            
            <!-- <div class="user">
                <img src="" alt="" >
            </div> -->

        </div>
        <!-- CARDS CARDS CARDS CARDS CARDS CARDS

    

        <-- ORDER DETAILS LIST -->
        <div class="details">

            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Administer Medicine</h2>
                    
                </div>
                <?php
                include("database/connect.php");
                $sql =  "SELECT * 
                        FROM `medicines`";
                $response = mysqli_query($conn, $sql);
                    if($response){
                        $num = mysqli_num_rows($response);
                        if($num>0){
                            while($row = mysqli_fetch_assoc($response)){
                                echo"
                                <table>
                                <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Generic</td>
                                        <td>Brand</td>
                                        <td>Dosage</td>
                                        <td>Strength</td>
                                        <td>Route of administration</td>
                                        <td>Prescription Status</td>
                                        <td>indications</td>
                                        <td>contraindications</td>
                                        <td>Side-effects</td>
                                        <td>storage Conditions</td>
                                        <td>expiry Date</td>
                                        <td>manufacturer's Information</td>
                                        <td>batch</td>
                                        <td>national DrugCode</td>
                                        <td>cost</td>
                                        <td>Warning Precautions</td>
                                        <td>interactions</td>
                                    </tr>
                                </thead>
                    
                                <tbody>
                                    <tr>
                                        <td>{$row["id"]}</td>
                                        <td>{$row["name"]}</td>
                                        <td>{$row["generic"]}</td>
                                        <td>{$row["brand"]}</td>
                                        <td>{$row["dosage"]}</td>
                                        <td>{$row["strength"]}</td>
                                        <td>{$row["routeOfAdmin"]}</td>
                                        <td>{$row["prescriptionStatus"]}</td>
                                        <td>{$row["indications"]}</td>
                                        <td>{$row["contraindications"]}</td>
                                        <td>{$row["sideEffects"]}</td>
                                        <td>{$row["storageConditions"]}</td>
                                        <td>{$row["expiryDate"]}</td>
                                        <td>{$row["manufInformation"]}</td>
                                        <td>{$row["batch"]}</td>
                                        <td>{$row["nationalDrugCode"]}</td>
                                        <td>{$row["cost"]}</td>
                                        <td>{$row["warningPrecautions"]}</td>
                                        <td>{$row["interactions"]}</td>
                                        <td><a href='administerMeds.php'><span class='material-symbols-outlined' style='color:red;'>vaccines</span></a></td>
                                        <td><span class='status pending'>Pending</span></td>
                                    </tr>
                    
                                    
                                </tbody>
                            </table>
                                ";
                            }
                        }else{
                            echo "<h1 style = 'color:red;'>There is no medicine to be administered!</h1>";
                    }
                    }
                ?>
    
                
            </div>

            <!-- NEW CUSTOMERS -->
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Recent Medicines</h2>
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