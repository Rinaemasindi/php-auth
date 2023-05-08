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

    public function FunctionName()
    {
      return true;
    }


  }