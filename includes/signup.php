<?php   
    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_confirm = $_POST['password_confirm'];

        include_once '../classes/SignupController.php';
        $signup = new SignupController($username, $email, $password, $password_confirms);

    }else {
        header('Location: signup.php');
        exit();
    }