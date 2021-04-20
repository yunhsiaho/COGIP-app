<?php
declare(strict_types=1);

require_once('./Model/LoginManager.php');

class LoginController
{
    public function render()
    {
        $login = new RegisterManager();
        
    
        require('./View/Admin_page.php');
    }
}
