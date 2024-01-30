<?php
include("database/connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["medsSubmit"])){

       $name = $_POST["name"];
       $generic = $_POST["generic"];
       $brand = $_POST["brand"];
       $dosage = $_POST["dosage"];
       $strength = $_POST["strength"];
       $routeOfAdmin = $_POST["routeOfAdmin"];
       $prescriptionStatus = $_POST["prescriptionStatus"];
       $indications = $_POST["indications"];
       $contraindications = $_POST["contraindications"];
       $sideEffects = $_POST["sideEffects"];
       $storageConditions = $_POST["storageConditions"];
       $expiryDate = $_POST["expiryDate"];
       $manufInformation = $_POST["manufInformation"];
       $batch = $_POST["batch"];
       $nationalDrugCode = $_POST["nationalDrugCode"];
       $cost = $_POST["cost"];
       $warningPrecautions = $_POST["warningPrecautions"];
       $interactions = $_POST["interactions"];
       
        $sql = "INSERT INTO `medicines` VALUES('$name', '$generic', '$brand', '$dosage', '$strength', '$routeOfAdmin', '$prescriptionStatus',   
                                                '$indications', '$contraindications', '$sideEffects', '$storageConditions', '$expiryDate', '$manufInformation', 
                                                '$batch','$nationalDrugCode', '$cost', '$warningPrecautions', '$interactions')";
        $resp = mysqli_query($conn, $sql);
        if($resp){
            
            header("Location: ../medicine.php");
            mysqli_close($conn);
            exit();
            
        }
    }
}