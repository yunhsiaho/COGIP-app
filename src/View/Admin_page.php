<?php 
require 'includes/header.php';
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
<?php require 'includes/footer.php' ?>
</div>
