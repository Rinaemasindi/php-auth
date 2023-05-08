<?php
  class SignupController{

    private $username;
    private $email;
    private $password;
    private $password_confirm;

    public function __construct($username, $email, $password, $password_confirm) {
      $this->username = $username;
      $this->email = $username;
      $this->password = $password;
      $this->password_confirm = $password_confirm;
    }

    public function is_empty()
    {
      if(empty($this->username) || empty($this->email) || empty($this->password)|| empty($this->password_confirm)){
        return false;
      }else{
        return false;
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

    
  }