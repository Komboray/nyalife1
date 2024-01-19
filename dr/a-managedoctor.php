<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     
    <style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

#controls {
    margin: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

select, input {
    margin-right: 10px;
    padding: 8px;
}

button {
    padding: 8px;
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

#staff-data-container {
    margin: 20px;
    overflow-x: auto; /* Enable horizontal scrolling when needed */
}

.staff-table {
    border-collapse: collapse;
    max-width: 100%; /* Make the table responsive */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.staff-table th, .staff-table td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 12px;
}

.staff-table th {
    background-color: #4CAF50;
    color: white;
}

.staff-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.staff-table i {
    cursor: pointer;
    margin: 0 5px;
    font-size: 18px;
}

.staff-table i:hover {
    color: #4CAF50;
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
        <img src="nya-logo.jpg" height="70" width="290">
            <ul>
                <!-- <li>
                    <a href="http://">
                        <span class="material-symbols-outlined">emergency</span>
                        <span class="title">Admin's dashboard</span>
                    </a>
                </li> -->


                <li>
                    <a href="a-index.php">
                        <span class="material-symbols-outlined">dashboard</span>
                        <span class="title">Admin's Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="a-handle-visits.php">
                        <span class="material-symbols-outlined">bookmark</span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="a-handle-users.php">
                        <span class="material-symbols-outlined">glucose</span>
                        <span class="title">Manage Staff</span>
                    </a>
                </li>

                

                <li>
                    <a href="a-handle-meds.php">
                        <span class="material-symbols-outlined">forum</span>
                        <span class="title">Setup</span>
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
       
        <body>

<div id="controls">
    <form method="GET" action="">
        <select name="recordsPerPage" onchange="this.form.submit()">
            <option value="10" <?php echo isset($_GET['recordsPerPage']) && $_GET['recordsPerPage'] == 10 ? 'selected' : ''; ?>>10</option>
            <option value="20" <?php echo isset($_GET['recordsPerPage']) && $_GET['recordsPerPage'] == 20 ? 'selected' : ''; ?>>20</option>
            <option value="30" <?php echo isset($_GET['recordsPerPage']) && $_GET['recordsPerPage'] == 30 ? 'selected' : ''; ?>>30</option>
        </select>
        <input type="text" name="search" placeholder="Search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
    </form>
    <a href="add_staff.php">Add Staff</a>
</div>

<div id="staff-data-container">
    <?php include 'get_staff_data.php'; ?>
</div>

</body>
            </div>

    
        </div>

        
    </div>
</body>
<!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS -->

<script src="js/main.js"></script>
</html>