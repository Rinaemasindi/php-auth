<?php
class Signup extends Dbh
{
    public function setUser($email, $username, $password)
    {
        $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
        $data = [
            'username'=>$username,
            'email'=>$email,
            'password'=> $hashedPassword,     
        ];

        $sql = "INSERT INTO users (username, email, password) VALUES(:username,:email,:password)";
        $sth = $this->connection()->prepare($sql);
        if(!$sth->execute($data)){
            header("location: ../index.php?error=dhbExecuteFail");
            exit();
        }
    }

    public function does_user_exist($email, $username)
    {
        $data = [
            'email' => $email,
            'username' => $username
        ];

        $sql = "SELECT id From users WHERE email = :email OR username = :username;";
        $sth = $this->connection()->prepare($sql);
        $sth->execute($data);

        if(!$sth->execute($data)){
            header("location: ../index.php?error=dhbExecuteFail");
            exit();
        }
        
        print_r($sth->rowCount());
        exit();
        if(true){
            return false;
        }else{
            return true;
        }
    }
}
