<?php 
require 'includes/header.php';
require '../Model/Manager.php';
require '../Model/CompaniesManager.php';
require '../Model/ContactsManager.php';

?>
<h1>Create a new contact</h1>
<div class="container">
<div class="create-container">
    <form method="POST">
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
            <option value='<?php echo $company['comp_id'] ?>'><?php echo $company['comp_id'].$company['comp_name'] ?></option>
        <?php endforeach ?>
        </select>
    </div>
    <button type="submit" name="submit" class="create-button">Create</button>
    </form>
</div>

<?php 

// var_dump($contactFirstname, $contactLastname, $email, $compId);
if(isset($_POST['submit'])){
    $contactFirstname = $_POST['contact-firstname'];
    $contactLastname = $_POST['contact-lastname'];
    $email = $_POST['contact-email'];
    $compId = $_POST['contact-comp'];
    $x = new ContactsManager();
    $x->createContact($contactFirstname, $contactLastname, $email, $compId);
}
?>


<?php require 'includes/footer.php'?>
</div>
