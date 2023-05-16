<?php
  class LoginController extends Login{

    private $email;
    private $password;

    public function __construct($email, $password) {
      $this->email = $email;
      $this->password = $password;
    }

    public function loginUser()
    {
      if($this->is_empty() == false){
        header("location: ../index.php?error=emptyinput");
        exit();
      }

      $this->getUser($this->email,$this->password);
    }
   
    public function is_empty()
    {
      if(empty($this->email) || empty($this->password)){
        return false;
      }else{
        return true;
      }
    }

  }