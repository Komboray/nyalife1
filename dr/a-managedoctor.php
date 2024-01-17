<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     
    
       <style>
         body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }

        h2 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        input[type=text], input[type=email], input[type=date], input[type=password], select, input[type=file] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        #addStaffForm {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 2;
            border-radius: 5px;
        }

        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
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



    <h2>Staff Information</h2>

    <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search by First Name">
    <button onclick="toggleForm()">Add Staff</button>

<!-- Overlay to darken the background -->
<div id="overlay"></div>

    <!-- Add Staff Form (floating page) -->
    <div id="addStaffForm" style="overflow:scroll; height: 600px;" >
        <h3>Add Staff</h3>
        <form id="staffForm" onsubmit="addStaff(event)">

        <label for="role">Role:</label>
            <select id="role" name="role" required>
                <option value="Admin">Admin</option>
                <option value="Doctor">Doctor</option>
                <option value="Accountant">Accountant</option>
                <option value="Pharmacist">Pharmacist</option>
                <option value="Receptionist">Receptionist</option>
                <option value="Nurse">Nurse</option>
                <option value="Radiologist">Radiologist</option>
                <option value="Pathologist">Pathologist</option>
            </select>

            <label for="desination">Designation:</label>
            <select id="designation" name="designation" required>
                <option value="Dr">Dr</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
            </select>

            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone">

            <label for="address">Address:</label>
            <input type="text" id="address" name="address">

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>

            <label for="Department">Department:</label>
            <select id="Department" name="Department" required>
                <option value="OPD">OPD</option>
                <option value="IPD">IPD</option>
                <option value="Medical Department">Medical Department</option>
                <option value="Front Office">Front Office</option>
                <option value="Finance">Finance</option>
                <option value="Pharmacy">Pharmacy</option>
            </select>

            <label for="Specialization">Specialization:</label>
            <select id="specialization" name="specialization" required>
            <option value="Radiology and Imaging">Radiology and Imaging</option>
                <option value="Obstetrics and Gynecology">Obstetrics and Gynecology</option>
                <option value="Nurse">Nurse</option>
                <option value="Reception">Reception</option>
                <option value="Accounts">Accounts</option>
                <option value="Pharmacy">Pharmacy</option>
                
            </select>

            <label for="nationalId">National ID:</label>
            <input type="text" id="nationalId" name="nationalId">

            <label for="profilePhoto">Profile Photo:</label>
            <input type="file" id="profilePhoto" name="profilePhoto">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Add Staff</button>
            <button type="button" onclick="cancelAddStaff()">Cancel</button>
        </form>
    </div>

    <table id="staffTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Department</th>
                <th>Specialization</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Table rows will be filled dynamically using PHP -->
        </tbody>
    </table>

    <script>

function toggleForm() {
            const formDiv = document.getElementById('addStaffForm');
            const overlay = document.getElementById('overlay');
            if (formDiv.style.display === 'none') {
                formDiv.style.display = 'block';
                overlay.style.display = 'block';
            } else {
                formDiv.style.display = 'none';
                overlay.style.display = 'none';
            }
        }

        function cancelAddStaff() {
            document.getElementById('staffForm').reset();
            toggleForm();
        }
        
          function toggleForm() {
            const formDiv = document.getElementById('addStaffForm');
            formDiv.style.display = formDiv.style.display === 'none' ? 'block' : 'none';
        }

        function addStaff(event) {
            event.preventDefault();

            // Fetch form data and send it to the server using AJAX
            const formData = new FormData(document.getElementById('staffForm'));

            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Reload staff data after successful addition
                        loadStaffData();
                        // Clear form fields
                        document.getElementById('staffForm').reset();
                        // Hide the form
                        toggleForm();
                    } else {
                        console.error('Error adding staff');
                    }
                }
            };

            xhr.open('POST', 'addStaff.php', true);
            xhr.send(formData);
        }

        function searchTable() {
            const input = document.getElementById('searchInput');
            const filter = input.value.toUpperCase();
            const table = document.getElementById('staffTable');
            const rows = table.getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) {
                const firstNameColumn = rows[i].getElementsByTagName('td')[1];
                if (firstNameColumn) {
                    const textValue = firstNameColumn.textContent || firstNameColumn.innerText;
                    if (textValue.toUpperCase().indexOf(filter) > -1) {
                        rows[i].style.display = '';
                    } else {
                        rows[i].style.display = 'none';
                    }
                }
            }
        }
    </script>

    <script src="js/loadData.js"></script>
</body>
</html>

            </div>

    
        </div>

        
    </div>
</body>
<!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS -->

<script src="js/main.js"></script>
</html>