<?php 
require 'includes/header.php';
include '../Model/Manager.php';
include '../Model/CompaniesManager.php';

?>
<h1>Create a new contact</h1>
<div class="container">
<div class="create-container">
    <form>
    <div class="input-form">
        <label for="contact-firstname">First Name</label><br>
        <input type="text" id="contact-firstname" name="contact-firstname" height="200px" placeholder="First Name"><br>
        <label for="contact-lastname">Last Name</label><br>
        <input type="text" id="contact-lastname" name="contact-lastname" height="200px" placeholder="Last Name"><br>
        <label for="contact-email">Email</label><br>
        <input type="text" id="contact-email" name="contact-email" height="200px" placeholder="Email"><br>
        <label for="contact-comp">Company</label><br>
        <select id="contact-comp" name="contact-comp" height="200px">
        <?php $companies= new CompaniesManager();?>
		<?php foreach ($companies->getCompanies() as $company): ?>
            <option value='<?php echo $company['comp_id'] ?>'><?php echo $company['comp_name'] ?></option>
        <?php endforeach ?>

            
        </select>
    </div>
        <button type="button" class="create-button">Create</button>
    </form>
</div>
<?php require 'includes/footer.php'?>
</div>
