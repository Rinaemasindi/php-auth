<?php 
    if (isset($_POST["submit"])) {
        
        $username = $_POST["username"];
        $email = $_POST["email"];

        include_once "../classes/Dbh.php";
        include_once "../classes/Login.php";
        include_once "../classes/LoginController.php";
        
    }else {
        header("Location: ../index.php");
        exit();
    }