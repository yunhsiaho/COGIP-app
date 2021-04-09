<?php 
require 'includes/header.php';
include '../Model/Manager.php';
include '../Model/CompaniesManager.php';
include '../Model/InvoicesManager.php';

?>
<div class="container">
	<h1>COGIP : Companies Directory</h1>
	
	<h4>Clients</h4>
	<table>
		<tr>
			<th>Company name</th>
			<th>Country</th>
		</tr>
		
		<?php
			$companies_client=new CompaniesManager();
			foreach ($companies_client->getCompanies_clients() as $company_client) { ?>
			<tr>
				<td><?php echo $company_client['comp_name']?></td>
				<td><?php echo $company_client['comp_country']?></td>
				<form action=""method="post">
        <td><button name="more" type="submit" value=<?php echo $company_client['comp_id']?>>more</button></td>
        </form>
			</tr>	
			<?php } ?>
	</table>

	<h4>Suppliers</h4>
	<table>
		<tr>
			<th>Company name</th>
			<th>Country</th>
		</tr>
		
		<?php
			$companies_provider=new CompaniesManager();
			foreach ($companies_provider ->getCompanies_provider() as $company_provider ) { ?>
			<tr>
				<td><?php echo $company_provider ['comp_name']?></td>
				<td><?php echo $company_provider ['comp_country']?></td>
				<form action=""method="post">
        <td><button name="more" type="submit" value=<?php echo $company_provider['comp_id']?>>more</button></td>
        </form>
			</tr>	
			<?php } ?>
	</table>
	<?php $companies=new CompaniesManager(); ?>
	<?php if(isset($_POST['more'])): ?>
    <?php foreach($companies->getCompaniesInfos() as $companies_infos): ?>
    <?php if($_POST['more']==$companies_infos['comp_id']): ?>
    <h4>TVA : <?php echo $companies_infos['comp_VAT'] ?></h4>
    <h4>Type :<?php echo $companies_infos['comp_type'] ?></h4>
    <?php endif ?>
    <?php endforeach ?>
    <h3>Contact persons</h3>
    <?php foreach($companies->getCompaniesContacts() as $companies_contacts): ?>
    <?php if($_POST['more']==$companies_contacts['comp_id']): ?>
        <h4>Name :<?php echo $companies_contacts['person_first_name']." ".$companies_contacts['person_last_name']?></h4>
        <h4>Email :<?php echo $companies_contacts['person_email']?></h4>        
        <?php endif ?>
    <?php endforeach ?>
    <h3>Factures</h3>
    <?php foreach($companies->getCompaniesInvoices() as $companies_invoices): ?>
    <?php if($_POST['more']==$companies_invoices['comp_id']): ?>
    <table>
    <tr>
    <th>Invoice number</th>
    <th>Date</th>
    </tr>
    <tr>
    <td><?php echo $companies_invoices['invoice_num']?></td>
    <td><?php echo $companies_invoices['invoice_date']?></td>
    </tr>
    </table>
    <?php endif ?>
    <?php endforeach ?>
    <?php endif ?>
	<?php require 'includes/footer.php'?>
</div>