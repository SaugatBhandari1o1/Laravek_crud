<?php
session_start();

if($_SESSION["REQUEST_METHOD"] == "POST") {
    require_once("dbcon.php");

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


}



?>