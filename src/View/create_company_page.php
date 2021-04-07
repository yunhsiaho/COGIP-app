<?php 
require 'includes/header.php';
include '../Model/Manager.php';

?>
<h1>Create a new company</h1>
<div class="container">
<div class="create-container">
    <form>
    <div class="input-form">
    <label for="comp-name">Company Name</label><br>
        <input type="text" id="comp-name" name="comp-name" height="200px" placeholder="Company Name"><br>
        <label for="comp-country">Company Country</label><br>
        <input type="text" id="comp-country" name="comp-country" height="200px" placeholder="Company Country"><br>
        <label for="comp-vat">VAT Number</label><br>
        <input type="text" id="comp-vat" name="comp-vat" height="200px" placeholder="VAT Number"><br>
        <label for="comp-type">Company Type</label><br>
        <select id="comp-type" name="comp-type" height="200px">
            <option value="client">Client</option>
            <option value="provider">Provider</option>
        </select>
    </div>
        <button type="button" class="create-button">Create</button>
    </form>
</div>
<?php require 'includes/footer.php'?>
</div>

