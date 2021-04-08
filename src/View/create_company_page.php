<?php 
require 'includes/header.php';
require '../Model/Manager.php';
require '../Model/CompaniesManager.php';

?>
<h1>Create a new company</h1>
<div class="container">
<div class="create-container">
    <form  method="POST">
    <div class="input-form">
        <label for="comp-name">Company Name</label><br>
        <input type="text" id="comp-name" name="comp-name" height="200px" placeholder="Company Name"><br>
        <label for="comp-country">Company Country</label><br>
        <input type="text" id="comp-country" name="comp-country" height="200px" placeholder="Company Country"><br>
        <label for="comp-vat">VAT Number (XX-XXX-XXXX)</label><br>
        <input type="text" id="comp-vat" name="comp-vat" height="200px" placeholder="VAT Number"><br>
        <label for="comp-type">Company Type</label><br>
        <select id="comp-type" name="comp-type" height="200px">
            <option value="client">Client</option>
            <option value="provider">Provider</option>
        </select>
    </div>
        <button type="submit" name="submit" class="create-button">Create</button>
    </form>
</div>

<?php 

    if(isset($_POST['submit'])){
        $compName = $_POST['comp-name'];
        $compCountry = $_POST['comp-country'];
        $VAT = $_POST['comp-name'];
        $compType = $_POST['comp-type'];
        $x = new CompaniesManager();
        $x->createCompany($compName, $compCountry, $VAT, $compType);
        }


    // $sql = "INSERT INTO companies(comp_id, comp_name, comp_country, comp_VAT, comp_type)
    // VALUES('21', 'IKEA', 'SWEDEN', '23-343-1919', client); ";
    // mysqli_query($db, $sql);
?>

<?php require 'includes/footer.php'?>
</div>

