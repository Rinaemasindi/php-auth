<?php
  class SignupController extends Signup{

    private $username;
    private $email;
    private $password;
    private $password_confirm;

    public function __construct($username, $email, $password, $password_confirm) {
      $this->username = $username;
      $this->email = $email;
      $this->password = $password;
      $this->password_confirm = $password_confirm;
    }

    public function signup_user()
    {

      if($this->is_empty() == false){
        header("location: ../signup.php?error=emptyinput");
        exit();
      }
      if($this->is_username_valid() == false){
        header("location: ../signup.php?error=invalidUsername");
        exit();
      }
      if($this->is_email_valid() == false){
        header("location: ../signup.php?error=invalidEmail");
        exit();
      }
      if($this->does_password_match() == false){
        header("location: ../signup.php?error=passwordmatch");
        exit();
      }
      if($this->check_user() == false){
        header("location: ../signup.php?error=userExist");
        exit();
      }

      $this->setUser($this->email,$this->username,$this->password);
    }
   
    public function is_empty()
    {
      if(empty($this->username) || empty($this->email) || empty($this->password)|| empty($this->password_confirm)){
        return false;
      }else{
        return true;
      }
    }

    public function is_username_valid()
    {
      if(!preg_match("/^[A-Za-z0-9]*$/",$this->username)){
        return false;
      }else{
        return true;
      }
    }

    public function is_email_valid()
    {
      if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
        return false; 
      } else {
        return true;
      }
    }

    public function does_password_match()
    {
      if($this->password !== $this->password_confirm){
        return false;
      }else {
        return true;
      }
    }
    public function check_user()
    {
      if($this->does_user_exist($this->email,$this->username)){
        return true;
      }else {
        return false;
      }
    }
  }