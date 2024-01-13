<?php
include('connect.php');

if(isset($_POST['submit-group'])){

    $sms = $_POST['group-sms'];

    $sql = 'INSERT INTO
    `group_messo`  values ('$sms', '')';

    $response = mysqli_query($conn, $sql);

    if($response){
        //we need to show a pop up message to tell user that the message has been sent
    }else{
        echo "Message not sent!";
    }
}

?>