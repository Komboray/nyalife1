<?php

// $_SESSION["username"];
// $_SESSION["email"];
include("database/connect.php");

// $sql = "SELECT COUNT(*) 
//         AS `total_users`
//         FROM `appointments`";

$sql = "SELECT * 
        FROM `medicines`";
$result = mysqli_query($conn, $sql);

if($result){
    $numMeds = mysqli_num_rows($result);

    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine</title>
    <link rel="icon" type="image/x-icon" href="nya-logo.jpg">
    <style>
        /* transactions page */
.form{
    padding: 30px 40px;
}

.form-control{
    margin-bottom: 10px;
    padding-bottom: 20px;
    position: relative;
}

.form-control label{
    display: inline-block;
    margin-bottom: 5px;
    color:blue;
}
.form-control input{
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    display: block;
    
    font-size: 14px;
    padding: 10px;
    width: 100%;
}

.form-control input:focus{
    outline: 0;
    border-color: #777;
}


.form button{
    background-color: #8e44ad;
    border: 2px solid #8e44ad;
    border-radius: 4px;
    color: #fff;
    display: block;
    
    font-size: 16px;
    padding: 10px;
    margin-top: 20px;
    
    width: 100%;
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
                    <a href="index.php">
                        <span class="material-symbols-outlined">dashboard</span>
                        <span class="title">Dr's Dashboard</span>
                    </a>
                </li>
                
                

                <li>
                    <a href="handle-patient.php">
                        <span class="material-symbols-outlined">recent_patient</span>
                        <span class="title">Handle Patient</span>
                    </a>
                </li>


                <li>
                    <a href="medicine.php">
                        <span class="material-symbols-outlined">book_online</span>
                        <span class="title">Medicine</span>
                    </a>
                </li>


                <li>
                    <a href="results.php">
                        <span class="material-symbols-outlined">book_online</span>
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
            <div class="card" style = "background-color:purple; text-decoration: none">
                <div>
                    <div class="numbers" style = "color:#fff"><?php echo "{$numMeds}" ?></div>
                    <div class="cardName" style = "color:#fff">Number of medicines</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined" style = "color:red">pill</span>
                
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

            <!-- <div class="card">
                <div>
                    <div class="numbers">15401</div>
                    <div class="cardName">Daily News</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">menu</span>
                
                </div>
            </div> -->

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

        <?php
        include("database/connect.php");
        $sql = "SELECT *
                FROM `medicines`";
        $res = mysqli_query($conn, $sql);
        if($res){
            $num = mysqli_num_rows($res);

            if($num>0){
                while($row = mysqli_fetch_assoc($res)){
                    echo "<table>
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
                            <td><span class='status delivered'>delivered</span></td>
                        </tr>
        
                        
                    </tbody>
                </table>";
                }
            }else{
                echo "<h1 style='color:purple;text-align:center;'>You have no medicines in storage!</h1>
                <h1 style='color:red;text-align:center;'>Add a medicine below</h1>
        

                <div class='contain'>
                <div class='head'>
                <h2 style='color:blue;text-align:center;'></h2>
                </div>
               <form action='database/meds.php' class='form' id = 'form' method = 'POST'>
                 <div class='form-control'>
                    <label for='name' >Name of medicine</label>
                     <input type='text' name='name' id='name' required>
                     <label for='name' >Generic</label>
                     <input type='text' name='generic' id='generic' required>
                     <label for='name' >brand</label>
                     <input type='text' name='brand' id='brand' required>
                     <label for='name' >dosage</label>
                     <input type='text' name='dosage' id='dosage' required>
                     <label for='name' >strength</label>
                     <input type='text' name='strength' id='strength' required>
                     <label for='name' >routeOfAdmin</label>
                     <input type='text' name='routeOfAdmin' id='routeOfAdmin' required>
                     <label for='name' >prescriptionStatus</label>
                     <input type='text' name='prescriptionStatus' id='prescriptionStatus' required>
                     <label for='name' >indications</label>
                     <input type='text' name='indications' id='indications' required>
                     <label for='name' >contraindications</label>
                     <input type='text' name='contraindications' id='contraindications' required>
                     <label for='name' >sideEffects</label>
                     <input type='text' name='sideEffects' id='sideEffects' required>
                     <label for='name' >storageConditions</label>
                     <input type='text' name='storageConditions' id='storageConditionsname' required>
                     <label for='name' >expiryDate	</label>
                     <input type='text' name='expiryDate' id='expiryDate' required>
                     <label for='name' >manufInformation</label>
                     <input type='text' name='manufInformation' id='manufInformation' required>
                     <label for='name' >batch</label>
                     <input type='text' name='batch' id='batch' required>
                     <label for='name' >nationalDrugCode</label>
                     <input type='text' name='nationalDrugCode' id='nationalDrugCode' required>
                     <label for='name' >cost</label>
                     <input type='text' name='cost' id='cost' required>
                     <label for='name' >warningPrecautions</label>
                     <input type='text' name='warningPrecautions' id='warningPrecautions' required>
                     <label for='name' >interactions</label>
                     <input type='text' name='interactions' id='interactions' required>
                     
                     
                      </div>
        
                     <button type ='submit' name= 'medsSubmit'> Submit</button>
                      </form>
                </div>
        
                
                ";
            }
        }
        ?>
        
        <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Recently added Medicines</h2>
                </div>
        
            
            <?php
            include("database/connect.php");
            $sql = "SELECT *
                    FROM `medicines`
                    ORDER BY `dateOfEntry`
                    ASC";
            $res = mysqli_query($conn, $sql);
            if($res){
                $num = mysqli_num_rows($res);

                if($num>0){
                    while($row = mysqli_fetch_assoc($res)){
                        echo "
                        <table>
                        <tr>
                            <td width='60px'>
                                <div class='imgBx'><img src='' alt='' srcset=''></div>
                            </td>
    
                            <td>
                                <h4>{$row["cost"]}<br> <span>{$row["cost"]}</span></h4>
                            </td>
                        </tr>
    
                        
    
                        
    
                        
                    </table>";
                    }
                }else{
                    echo "<p style ='color:red'>There are no recent medicines</p>";
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

<script src="js/main.js"></script>
</html>