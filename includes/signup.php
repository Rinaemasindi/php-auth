<?php   
    if(isset($_POST['submit'])){
        
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_confirm = $_POST['password_confirm'];
        
        include "../classes/Dbh.php";
        include "../classes/Signup.php";
        include "../classes/SignupController.php";
        
        $signup = new SignupController($username, $email, $password, $password_confirm);
        $signup->signup_user();

        header('Location: ../index.php?error=none');

    }else {
        header('Location: signup.php');
        exit();
    }