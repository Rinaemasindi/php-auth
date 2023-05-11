<?php   
    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_confirm = $_POST['password_confirm'];
        
        include_once '../classes/SignupController.php';
        include_once '../classes/Signup.php';

        $signup = new SignupController($username, $email, $password, $password_confirms);
        $signup->signup_user();

        header('Location: ../index.php?error=none');

    }else {
        header('Location: signup.php');
        exit();
    }