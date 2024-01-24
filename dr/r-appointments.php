<?php
//we are adding a class
require_once("Classes/dateRange.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
</head>

<!-- MATERIAL ICONS FROM GOOGLE --> <!-- MATERIAL ICONS FROM GOOGLE -->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


<!-- the css link --><!-- the css link --><!-- the css link --><!-- the css link --><!-- the css link -->

<link rel="stylesheet" href="css/chat.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<body>

    <!-- NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION -->
    <div class="container">
        <div class="navigation">
        
            <ul>
                <!-- <li>
                    <a href="http://">
                        <span class="material-symbols-outlined">emergency</span>
                        <span class="title">Dr's dashboard</span>
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

        <!-- <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">1</div>
                    <div class="cardName">Recent appointments</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">menu</span>
                
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">11</div>
                    <div class="cardName">Cancelled appointments</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">menu</span>
                
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">11</div>
                    <div class="cardName">Chat</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">menu</span>
                
                </div>
            </div>
              

        </div> -->

        <!-- ORDER DETAILS LIST -->
        <div class="details">

            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Appointments</h2>
                    <button type="button" class="btn"><a href="http://" style="text-decoration: none;">View all</a></button>
                </div>
    
                <table>
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Doctor</td>
                            <td>Service</td>
                            <td>Date of appointment</td>
                            <td>Time</td>
                        </tr>
                    </thead>
        
                    <tbody>
                    <?php
                            //this is where we are connecting to the database and getting the rows from the database
                            include("database/connect.php");

                            
                                $sql = "SELECT *
                                        FROM `appointments` ";

                                $res = mysqli_query($conn, $sql);

                                if($res){
                                    $num = mysqli_num_rows($res);

                                    if($num>0){
                                        while($row = mysqli_fetch_assoc($res)){
                                            echo " 
                                            <tr>
                                            <td>{$row['id']}</td>
                                            <td>{$row["name"]}</td>
                                            <td>{$row['email']}</td>
                                            <td>{$row['dr']}</td>
                                            <td>{$row['serviceSelected']}</td>
                                            <td>{$row['date']}</td>
                                            <td>{$row['time']}</td>
                                            
                                            
                                        </tr>
                                            
                                                ";
                                            
                                        }
                                    }
                                }
                            


                            ?>
                        <!-- <tr>
                            <td></td>
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
                        </tr> -->
                    </tbody>
                </table>
            </div>

            <!-- NEW CUSTOMERS -->
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Approaching Appointments</h2>
                </div>

                <table>
                    
                        <!-- <td width="60px">
                            <div class="imgBx"><img src="" alt="" srcset=""></div>
                        </td> -->

                        <?php
                           $date = date("Y-m-d");

                        //    echo $date ."<br>";
                           

                           $sql =  "SELECT `date`
                                    FROM `appointments` 
                                    ";

                            $res = mysqli_query($conn, $sql);

                            if($res){
                                // i am trying to rethink the design and add recent
                                $num = mysqli_num_rows($res);
                                if($num > 0 && $num <1){
                                    while($row = mysqli_fetch_assoc($res)){
                                        echo $row["date"] ."<br>";
                                    }
                                    // $row = mysqli_fetch_assoc($res);
                                //         $dateAppoint = $row["date"];
                                        

                                //         echo $dateAppoint ."<br>";

                                //         //getting the current day date
                                //         $dayPart = date("d", strtotime($date));
                                //         $dayAppoint = date("d", strtotime($dateAppoint));

                                        
                                        //this is the function that gets the date and counts 7 day diff
                                        // $num = new dateRange($dayPart, $dayAppoint);

                                        // echo $num->calcDateRange($dayPart,$dayAppoint);
                                    
                                // }elseif($num>1){
                                //     echo "The rows are more than one";
                                //     while($row = mysqli_fetch_assoc($res)){
                                //         echo $row["email"];
                                //     } 

                                //we are here to get the value
                                }else{
                                    while($row = mysqli_fetch_assoc($res)){
                                        // echo $row["date"] ."<br>";

                                        echo "<tr>
                                        <td>
                                        <h4>{$row["date"]} <br> <span>Italy</span></h4>
                                    </td>
                                    </tr>";
                                        // $dates = $row["date"+++];
                                        // foreach ($dates as $c){
                                        //     echo $c ."<br>";
                                        // }

                                    }
                                }
                            }
                        ?>

                    

                    <!-- <tr>
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
                    </tr> -->
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