<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     
  
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.table-container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.add-button {
    background-color: #3498db;
    color: #fff;
    padding: 8px 12px;
    text-decoration: none;
    border-radius: 5px;
}

.search-form {
    display: flex;
    margin-top: 10px;
}

input[type="text"] {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button[type="submit"] {
    background-color: #2ecc71;
    color: #fff;
    padding: 8px 12px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.staff-table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
}

.staff-table th, .staff-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.staff-table th {
    background-color: #3498db;
    color: #fff;
}

.staff-table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.edit-button, .view-button, .delete-button {
    background-color: #3498db;
    color: #fff;
    padding: 6px 10px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    margin-right: 5px;
}

.edit-button, .view-button, .delete-button {
            background-color: #008CBA;
            color: white;
            padding: 5px 8px;
            text-decoration: none;
            border-radius: 3px;
            margin-right: 5px;
            cursor: pointer;
        }
.delete-button {
            background-color: #f44336;
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
            
        

        </div>
       <!------ Main page Content goes here-->

       <?php
// Replace these values with your actual database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nyalife";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Search functionality
$search = isset($_GET['search']) ? $_GET['search'] : '';
$searchCondition = !empty($search) ? "WHERE first_name LIKE '%$search%' OR Designation LIKE '%$search%' OR Department LIKE '%$search%' OR Email LIKE '%$search%' OR Phone LIKE '%$search%'" : '';

// Fetch staff records from the database
$sql = "SELECT ID, first_name, Designation, Department, Email, Phone FROM Staff $searchCondition";
$result = $conn->query($sql);

// Close connection
$conn->close();
?>



<div class="table-container">
    <div class="header">
        <a href="add_staff.php" class="add-button">Add New Staff</a>
        <form action="manage_staff.php" method="get" class="search-form">
            <input type="text" name="search" placeholder="Search..." value="<?= htmlspecialchars($search) ?>">
            <button type="submit">Search</button>
        </form>
    </div>

    <table class="staff-table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Department</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['ID']}</td>
                        <td>{$row['first_name']}</td>
                        <td>{$row['Designation']}</td>
                        <td>{$row['Department']}</td>
                        <td>{$row['Email']}</td>
                        <td>{$row['Phone']}</td>
                        <td>
                        <button onclick=\"location.href='update_staff.php?id={$row['ID']}'\" class='edit-button'>Edit</button>
                            <button onclick=\"location.href='view_staff.php?id={$row['ID']}'\" class='view-button'>View</button>
                        <button class='delete-button' onclick='confirmDelete({$row['ID']})'>Delete</button>
        
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No records found.</td></tr>";
        }
        ?>
    </table>
</div>





       <!--- End Main page Content------>
        
            </div>

    
        </div>

        
    </div>
</body>
<script>
function confirmDelete(id) {
    var confirmDelete = confirm("Are you sure you want to delete this staff record?");
    
    if (confirmDelete) {
        window.location.href = 'delete_staff.php?id=' + id;
    }
}
</script>
<!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS -->

<script src="js/main.js"></script>
</html>