<?php 
require 'includes/header.php';
include '../connect.php';
include '../CompaniesManager.php';
include '../InvoicesManager.php';

?>
<div class="admin-container">
<form>
    <label for="fname">Username</label><br>
    <input type="text" id="Username" name="Username" height="200px" placeholder="Username"><br>
    <label for="lname">Password</label><br>
    <input type="password" id="Password" name="Password" height="2rem" placeholder="Password"><br>
    <button type="button">Log In</button>
</form>
</div>
<?php require 'includes/footer.php'?>