<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     
  
    <style>
 body {
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
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
       
        <?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Get form data
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $phoneNumber = $_POST['phone'];
    $emailAddress = $_POST['email'];
    $nextOfKin = $_POST['next_of_kin'];
    $nextOfKinPhoneNumber = $_POST['next_of_kin_phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $bloodGroup = $_POST['blood_group'];
    $maritalStatus = $_POST['marital_status'];
    $allergies = $_POST['allergies'];
    $idNumber = $_POST['id_number'];
    $occupation = $_POST['occupation'];
    $medication = $_POST['medication'];
    $additionalInformation = $_POST['additional_information'];
    $password = $_POST['password'];

    // SQL query to insert patient information into the "patients" table
    $sql = "INSERT INTO patients (FirstName, LastName, PhoneNumber, EmailAddress, NextOfKin, NextOfKinPhoneNumber, 
            Gender, DOB, BloodGroup, MaritalStatus, Allergies, IDNumber, Occupation, Medication, 
            AdditionalInformation, Password) 
            VALUES ('$firstName', '$lastName', '$phoneNumber', '$emailAddress', '$nextOfKin', '$nextOfKinPhoneNumber', 
            '$gender', '$dob', '$bloodGroup', '$maritalStatus', '$allergies', '$idNumber', '$occupation', 
            '$medication', '$additionalInformation', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Patient information added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>

<div class="form-container">
    <h2>Add Patient Information</h2>
    <form action="add_patient.php" method="post">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" required>

        <label for="email">Email:</label>
        <input type="email" name="email">

        <label for="next_of_kin">Next of Kin:</label>
        <input type="text" name="next_of_kin" required>

        <label for="next_of_kin_phone">Next of Kin Phone:</label>
        <input type="tel" name="next_of_kin_phone" required>

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob">

        <label for="blood_group">Blood Group:</label>
        <select name="blood_group">
            <option value="Single">O+</option>
            <option value="Married">O-</option>
            <option value="Divorced">A+</option>
            <option value="Widowed">A-</option>
            <option value="Single">B+</option>
            <option value="Married">B-</option>
            <option value="Divorced">AB+</option>
            <option value="Widowed">AB-</option>
        </select>

        <label for="marital_status">Marital Status:</label>
        <select name="marital_status">
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Divorced">Divorced</option>
            <option value="Widowed">Widowed</option>
        </select>

        <label for="allergies">Allergies:</label>
        <textarea name="allergies"></textarea>

        <label for="id_number">ID Number:</label>
        <input type="text" name="id_number">

        <label for="occupation">Occupation:</label>
        <input type="text" name="occupation">

        <label for="medication">Medication:</label>
        <textarea name="medication"></textarea>

        <label for="additional_information">Additional Information:</label>
        <textarea name="additional_information"></textarea>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <input type="submit" value="Add Patient">
    </form>
</div>
            </div>

    
        </div>

        
    </div>
</body>
<!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS -->

<script src="js/main.js"></script>
</html>