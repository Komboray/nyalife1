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
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="http://">
                        <span class="material-symbols-outlined">emergency</span>
                        <span class="title">Admin's dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="a-index.php">
                        <span class="material-symbols-outlined">dashboard</span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="a-handle-visits.php">
                        <span class="material-symbols-outlined">bookmark</span>
                        <span class="title">Handle Visit</span>
                    </a>
                </li>

                <li>
                    <a href="a-handle-users.php">
                        <span class="material-symbols-outlined">glucose</span>
                        <span class="title">Handle Users</span>
                    </a>
                </li>

                

                <li>
                    <a href="a-handle-meds.php">
                        <span class="material-symbols-outlined">forum</span>
                        <span class="title">Handle Medicine</span>
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
            <div class="card">
                <div>
                    <div class="numbers">11</div>
                    <div class="cardName">Appointments</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">book_online</span>
                
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">15</div>
                    <div class="cardName">Patient Profiles</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">groups</span>
                
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">15401</div>
                    <div class="cardName">Telemedicine</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">wifi_calling</span>
                
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
                    <h2>Recent Orders</h2>
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

<script src="js/main.js"></script>
</html>