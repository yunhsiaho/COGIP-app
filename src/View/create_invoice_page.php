<?php 
require 'includes/header.php';
include '../Model/Manager.php';
include '../Model/CompaniesManager.php';
include '../Model/ContactsManager.php';
include '../Model/InvoicesManager.php';

?>
<h1>Create a new Invoice</h1>
<div class="container">
<div class="create-container">
    <form>
    <div class="input-form">
        <label for="invoice-number">Invoice Number</label><br>
        <input type="text" id="invoice-number" name="invoice-number" height="200px" placeholder="Invoice Number"><br>
        <label for="invoice-date">Invoice Date (YYYY-MM-DD)</label><br>
        <input type="text" id="invoice-date" name="invoice-date" height="200px" placeholder="Invoice Date"><br>
        <label for="invoice-comp">Company</label><br>
        <select id="invoice-comp" name="invoice-comp" height="200px">
        <?php $companies= new CompaniesManager();?>
		<?php foreach ($companies->getCompanies() as $company): ?>
            <option value='<?php echo $company['comp_id'] ?>'><?php echo $company['comp_name'] ?></option>
        <?php endforeach ?>
        </select>

        <label for="invoice-contact">Contact</label><br>
        <select id="invoice-contact" name="invoice-contact" height="200px">
        <?php $contacts= new ContactsManager();?>
		<?php foreach ($contacts->getContacts() as $contact): ?>
            <option value='<?php echo $contact['person_id'] ?>'><?php echo $contact['person_first_name']." ".$contact['person_last_name'] ?></option>
        <?php endforeach ?>
        </select>
    </div>
    <button type="submit" name="submit" class="create-button">Create</button>
    </form>
</div>
<?php 

    if(isset($_POST['submit'])){
        $invoiceNum = $_POST['invoice-number'];
        $invoiceDate = $_POST['invoice-date'];
        $invoiceVAT = $company['comp_id'];
        $invoiceComp = $_POST['invoice-comp'];
        $invoiceContact = $_POST['invoice-contact'];
        $x = new InvoicesManager();
        $x->createInvoice($invoiceNum, $invoiceDate, $invoiceVAT, $invoiceComp, $invoiceContact);
        }


    // $sql = "INSERT INTO companies(comp_id, comp_name, comp_country, comp_VAT, comp_type)
    // VALUES('21', 'IKEA', 'SWEDEN', '23-343-1919', client); ";
    // mysqli_query($db, $sql);
?>
<?php require 'includes/footer.php'?>
</div>
