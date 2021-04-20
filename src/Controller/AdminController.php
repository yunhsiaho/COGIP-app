<?php
// declare(strict_types=1);
// session_start();

// require_once('./Model/AdminManager.php');

// class AdminController
// {
//     public function render()
//     {
        
//         echo 'hello';
//             $_SESSION['type'] = "";
//             $_SESSION['name'] = "";
//         if(isset($_POST['submit'])){
//             $Username=$_POST['Username'];

//             $Password=$_POST['Password'];
            
//             if(!$Username==""||!$Password==""){
//                 // echo "test"; 
            
//             // header('Location:/var/www/html/View/homepage.php',TRUE);
//             $AdminInfos= new AdminManager();
//             foreach ($AdminInfos->getAdminDB() as $AdminInfo) { 
//                 // var_dump($AdminInfo); 
//                 if($AdminInfo['user_name']==$Username&&$AdminInfo['pwr']==$Password){
//                     echo "You are logged in as ".$AdminInfo['function']."! Please go to homepage for more funcitons";
//                     $_SESSION['type'] = $AdminInfo['function'];
//                     $Password=password_hash($Password, PASSWORD_DEFAULT);
//                     $_SESSION['name'] = $Username." ".$Password;
//                 }
//             }
//             }
//         }else{
//             echo "error!";
//         }
//         require('./View/Admin_page.php');
//     }
// }
