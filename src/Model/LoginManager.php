<?php
require 'Manager.php';

class LoginManager extends Dbconnect
{
    public function login()
    {
        $db = $this->connectDb();

        $req = $db->prepare('SELECT *
            FROM Admin
            WHERE Username = :username');

        $req->execute(['username' => $username]);

        $login = $req->fetch();

        return $login;
    }

}




