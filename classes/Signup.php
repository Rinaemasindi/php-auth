<?php
include 'Database.php';
class Signup extends Database
{
    public function setUser($email, $username, $password)
    {
        $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
        $data = [
            'username'=>$username,
            'email'=>$email,
            'password'=> $hashedPassword,     
        ];

        $sql = "INSERT INTO users (username, email, password, registerd) VALUES(:username,:email,:password)";
        $sth = $this->getConnection()->prepare($sql);
        if(!$sth->execute($data)){
            header("location: ../index.php?error=setUserFail");
            exit();
        }
        
    }

    public function does_user_exist($email, $username)
    {
        $data = [
            'email' => $email,
            'username' => $username
        ];

        $sql = "SELECT id From users WHERE email = :email AND username = :username";
        $sth = $this->getConnection()->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
        $sth->execute($data);

        if(!$sth->execute($data)){
            header("location: ../index.php?error=setUserFail");
            exit();
        }

        if($sth->fetchAll() > 0){
            return false;
        }else{
            return true;
        }

    }
}
