<?php
    class Login extends Dbh
    {
        public function getUser($username,$password)
        {
            $sql = "SELECT password from users WHERE username = :username";
            $data = [
                "username"=>$username
            ];
            
            $sth = $this->connection()->prepare($sql);

            if(!$sth->execute($data)){
                header("location: ../index.php?error=dhbExecuteFail");
                exit();
            }

            if($sth->rowCount()==0){
                header("location: ../index.php?error=userNotFound");
                exit();
            }

            $hashedPassword = $sth->fetchAll(PDO::FETCH_ASSOC);
            $checkPassword = password_verify($password,$hashedPassword[0]['password']);
            
            if($checkPassword == false){
                header("location: ../index.php?error=InvalidLogin");
                exit();
            }

            if($checkPassword == true){
                
            }
        }   
    }
    