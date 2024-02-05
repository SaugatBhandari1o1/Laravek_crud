<?php
session_start();

if($_SESSION["REQUEST_METHOD"] == "POST") {
    require_once("dbcon.php");

    $email = $_POST["email"];


}



?>