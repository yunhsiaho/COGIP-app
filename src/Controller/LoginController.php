<?php
declare(strict_types=1);

require_once('./Model/LoginManager.php');

class LoginController
{
    public function render()
    {
        $login = new RegisterManager();
        
    if(isset($_POST['submit'])){
        $Username=$_POST['Username'];
        $Password=$_POST['Password'];
        $_SESSION['type'] = "";
        $_SESSION['name'] = "";
        if(!$Username==""||!$Password==""){
            // echo "test"; 
        
        // header('Location:/var/www/html/View/homepage.php',TRUE);
        $AdminInfos= new AdminManager();
        foreach ($AdminInfos->getAdminDB() as $AdminInfo) { 
            // var_dump($AdminInfo); 
            if($AdminInfo['user_name']==$Username&&$AdminInfo['pwr']==$Password){
                echo "You are logged in as ".$AdminInfo['function']."! Please go to homepage for more funcitons";
                $_SESSION['type'] = $AdminInfo['function'];
                $_SESSION['name'] = $Username." ".$Password;
            }
        }
        }
    }else{
        echo "error!";
    }


        require('./View/Admin_page.php');
    }
}
