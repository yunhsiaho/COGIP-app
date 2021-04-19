<?php
require_once('Manager.php');

class RegisterManager extends Dbconnect
{
    public function signUp($userName, $password)
    {
        $db = $this->connect();

        try {
            $response = $db->prepare(
                "INSERT INTO login(username, password)
                  VALUES(:username, :password)"
            );
            $response->execute([
                'username' => $userName,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
