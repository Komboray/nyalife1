<?php
include('connect.php');

if(isset($_POST['submit'])){

    $comment = $_POST['comment'];

    $sql = 'INSERT INTO
    `group_messo`  values ('$comment', '')';

    $response = mysqli_query($conn, $sql);

    if($response){
        //we need to show a pop up message to tell user that the message has been sent
    }else{
        echo "Message not sent!";
    }
}

?>