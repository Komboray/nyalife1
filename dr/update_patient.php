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

// Fetch patient information based on the provided ID
$patientID = $_GET['id'];
$sql = "SELECT * FROM patients WHERE PatientID = $patientID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Patient not found.";
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // SQL query to update patient information in the "patients" table
    $updateSql = "UPDATE patients SET 
        FirstName='$firstName', LastName='$lastName', PhoneNumber='$phoneNumber', EmailAddress='$emailAddress', 
        NextOfKin='$nextOfKin', NextOfKinPhoneNumber='$nextOfKinPhoneNumber', Gender='$gender', DOB='$dob', 
        BloodGroup='$bloodGroup', MaritalStatus='$maritalStatus', Allergies='$allergies', IDNumber='$idNumber', 
        Occupation='$occupation', Medication='$medication', AdditionalInformation='$additionalInformation', 
        Password='$password' WHERE PatientID=$patientID";

    if ($conn->query($updateSql) === TRUE) {
        echo "Patient information updated successfully!";
        $result = $conn->query("SELECT * FROM patients WHERE PatientID = $patientID");
        $row = $result->fetch_assoc(); // Refresh the data after the update
    } else {
        echo "Error updating patient information: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>

<div class="form-container">
    <h2>Update Patient Information</h2>
    <form action="update_patient.php?id=<?= $patientID ?>" method="post">
        <!-- Existing data for reference -->
        <input type="hidden" name="existing_first_name" value="<?= htmlspecialchars($row['FirstName']) ?>">
        <input type="hidden" name="existing_last_name" value="<?= htmlspecialchars($row['LastName']) ?>">
        <input type="hidden" name="existing_phone" value="<?= htmlspecialchars($row['PhoneNumber']) ?>">
        <input type="hidden" name="existing_email" value="<?= htmlspecialchars($row['EmailAddress']) ?>">
        <input type="hidden" name="existing_next_of_kin" value="<?= htmlspecialchars($row['NextOfKin']) ?>">
        <input type="hidden" name="existing_next_of_kin_phone" value="<?= htmlspecialchars($row['NextOfKinPhoneNumber']) ?>">
        <input type="hidden" name="existing_gender" value="<?= htmlspecialchars($row['Gender']) ?>">
        <input type="hidden" name="existing_dob" value="<?= htmlspecialchars($row['DOB']) ?>">
        <input type="hidden" name="existing_blood_group" value="<?= htmlspecialchars($row['BloodGroup']) ?>">
        <input type="hidden" name="existing_marital_status" value="<?= htmlspecialchars($row['MaritalStatus']) ?>">
        <input type="hidden" name="existing_allergies" value="<?= htmlspecialchars($row['Allergies']) ?>">
        <input type="hidden" name="existing_id_number" value="<?= htmlspecialchars($row['IDNumber']) ?>">
        <input type="hidden" name="existing_occupation" value="<?= htmlspecialchars($row['Occupation']) ?>">
        <input type="hidden" name="existing_medication" value="<?= htmlspecialchars($row['Medication']) ?>">
        <input type="hidden" name="existing_additional_information" value="<?= htmlspecialchars($row['AdditionalInformation']) ?>">

        <!-- Update form fields -->
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" value="<?= htmlspecialchars($row['FirstName']) ?>" required>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" value="<?= htmlspecialchars($row['LastName']) ?>" required>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" value="<?= htmlspecialchars($row['PhoneNumber']) ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($row['EmailAddress']) ?>">

        <label for="next_of_kin">Next of Kin:</label>
        <input type="text" name="next_of_kin" value="<?= htmlspecialchars($row['NextOfKin']) ?>">

        <label for="next_of_kin_phone">Next of Kin Phone:</label>
        <input type="tel" name="next_of_kin_phone" value="<?= htmlspecialchars($row['NextOfKinPhoneNumber']) ?>">

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="Male" <?= ($row['Gender'] == 'Male') ? 'selected' : '' ?>>Male</option>
            <option value="Female" <?= ($row['Gender'] == 'Female') ? 'selected' : '' ?>>Female</option>
            <option value="Other" <?= ($row['Gender'] == 'Other') ? 'selected' : '' ?>>Other</option>
        </select>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" value="<?= htmlspecialchars($row['DOB']) ?>">

        <label for="blood_group">Blood Group:</label>
        <input type="text" name="blood_group" value="<?= htmlspecialchars($row['BloodGroup']) ?>">

        <label for="marital_status">Marital Status:</label>
        <select name="marital_status">
            <option value="Single" <?= ($row['MaritalStatus'] == 'Single') ? 'selected' : '' ?>>Single</option>
            <option value="Married" <?= ($row['MaritalStatus'] == 'Married') ? 'selected' : '' ?>>Married</option>
            <option value="Divorced" <?= ($row['MaritalStatus'] == 'Divorced') ? 'selected' : '' ?>>Divorced</option>
            <option value="Widowed" <?= ($row['MaritalStatus'] == 'Widowed') ? 'selected' : '' ?>>Widowed</option>
        </select>

        <label for="allergies">Allergies:</label>
        <textarea name="allergies"><?= htmlspecialchars($row['Allergies']) ?></textarea>

        <label for="id_number">ID Number:</label>
        <input type="text" name="id_number" value="<?= htmlspecialchars($row['IDNumber']) ?>">

        <label for="occupation">Occupation:</label>
        <input type="text" name="occupation" value="<?= htmlspecialchars($row['Occupation']) ?>">

        <label for="medication">Medication:</label>
        <textarea name="medication"><?= htmlspecialchars($row['Medication']) ?></textarea>

        <label for="additional_information">Additional Information:</label>
        <textarea name="additional_information"><?= htmlspecialchars($row['AdditionalInformation']) ?></textarea>

        <label for="password">Password:</label>
        <input type="password" name="password" >

        <input type="submit" value="Update Patient">
    </form>
</div>

        
            </div>

    
        </div>

        
    </div>
</body>
<!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS -->

<script src="js/main.js"></script>
</html>