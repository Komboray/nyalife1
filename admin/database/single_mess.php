<?php
include('connect.php');

if(isset($_POST['submit'])){

    $comment = $_POST['comment'];

    $sql = 'INSERT INTO
    `single_messo`  values ('$comment', '')';
}

?>