<?php session_start();?>
<?php 
require 'includes/header.php';
include '../Model/Manager.php';
include '../Model/AdminManager.php';
?>
<?php
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
?>
<div class="container">
<div class="admin-container">
    <form action="" method="POST">    
        <label for="fname">Username</label><br>
        <input type="text" id="Username" name="Username" height="200px" placeholder="Username"><br>
        <label for="lname">Password</label><br>
        <input type="password" id="Password" name="Password" height="2rem" placeholder="Password"><br>
        <button type="submit" class="admin-button" name="submit">Log In</button>        
    </form>
</div>
<?php require 'includes/footer.php'?>
</div>
