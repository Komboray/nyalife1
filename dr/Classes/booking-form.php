<?php
require_once('insert.php');



if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["Submit-booking"])){
    //this below was to test if the details are coming to this page, they are so we will remove them
        // echo $_POST["fname"];
        // echo $_POST["email"];
        // echo $_POST["dr"];
        // echo $_POST["services"];
        // echo $_POST["date"];
        // echo $_POST["time-select"];
        // echo $_POST["messages"];

        //we are going to create the logic for adding the details to the database
        $insert = new Insert($_POST["fname"], $_POST["email"], $_POST["dr"], $_POST["services"],
                            $_POST["date"], $_POST["time-select"], $_POST["messages"]);
        
        $insert->insertBookingDetails($_POST["fname"], $_POST["email"], $_POST["dr"], $_POST["services"],
                                    $_POST["date"], $_POST["time-select"], $_POST["messages"]);


    
    
    }
}
