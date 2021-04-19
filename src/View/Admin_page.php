<?php 
require 'includes/header.php';
include '../Model/LoginManager.php';
?>

<div class="container">
<div class="admin-container">
    <form id='login' action='index.php?page=Admin_page' method='post' accept-charset='UTF-8'>
        <label for="fname">Username</label><br>
        <input type="text" id="Username" name="Username" height="200px" placeholder="Username"><br>
        <label for="lname">Password</label><br>
        <input type="password" id="Password" name="Password" height="2rem" placeholder="Password"><br>
        <button type="submit" name="submit">Log in</button>
    </form>	
</div>
</div>


