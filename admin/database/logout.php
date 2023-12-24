<?php
session_start();


echo $_SESSION["username"] . "<br>";
// echo $_SESSION["password"] . "<br>";

if(isset($_POST["logout"])){
    session_destroy();
    header("Location: index.php");
}

?>