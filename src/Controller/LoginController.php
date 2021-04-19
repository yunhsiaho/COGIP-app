<?php

class LoginController
{
    public function render()
    {
        $login = new LoginManager();

        require('../view/homepage.php');
    }
}
