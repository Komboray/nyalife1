<?php
include('../database/connect.php');
//this is a class used to insert the booking form script in r-index.php

Class Insert{

    //we will require thEsE below values from the $_POST
    public $patientName;
    public $patientEmail;
    public $drSelected;
    public $selectedService;
    public $date;
    public $time;
    public $emailText;
    
    //this is the constructor used to get the things needed for the update func
    function __construct($patientName, $patientEmail, $drSelected,
                        $selectedService, $date, $time, $emailText){

        $this->patientName = $patientName;
        $this->patientEmail = $patientEmail;
        $this->drSelected = $drSelected;
        $this->selectedService = $selectedService;
        $this->date = $date;
        $this->time = $time;
        $this->emailText = $emailText;
        
    }

    function insertBookingDetails($patientName, $patientEmail, $drSelected, $selectedService, $date, $time, $emailText){
        //we need to get the conn class...$conn
        include("../database/connect.php");

        $sql = "INSERT INTO `appointments`(name, email, dr, serviceSelected, date, time, emailText)
                VALUES ('$patientName','$patientEmail','$drSelected','$selectedService','$date','$time','$emailText')";
        $res = mysqli_query($conn, $sql);

        if($res){
            // echo "The details have been sent!";
            header("Location: ../r-index.php");
            exit();
        }else{
            echo "You bozo, something is wrong!";
        }
    }
}