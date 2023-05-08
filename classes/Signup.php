<?php
class Signup extends Database
{
    protected function does_user_exist($email, $username)
    {
        $sql = "SELECT id From users WHERE email = :email AND username = :username";
        $sth = $this->getConnection()->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
        $sth->execute(['email' => $email, 'colour' => $username]);
        if($sth->fetchAll() > 0){
            return false;
        }else{
            return true;
        }
    }
}
