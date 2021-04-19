<?php 
require 'includes/header.php';
include '../Model/Manager.php';
include '../Model/CompaniesManager.php';
include '../Model/InvoicesManager.php';

?>
<div class="container">
<h1>Welcome to the COGIP</h1>

<h3>Invoices</h3>
	<hr/>
	<table>
		<tr>
		<th>Invoice number</th>
		<th>Invoice date</th>
		<th>Company name</th>
		</tr>
		
		<?php
		$x=0;
		
		$invoices= new InvoicesManager();

		foreach ($invoices->getInvoices() as $invoice) { 
			if ($x>=20)
			break;?>

			<tr>
			<td><?php echo $invoice['invoice_num']?></td>
			<td><?php echo $invoice['invoice_date']?></td>
			<td><?php echo $invoice['comp_name']?></td>
			<form action="" method="post">
			</form>
			</tr>
		<?php
			$x++; } 
			?>
		</table>
		<?php if(isset($_POST['more'])):	?>
		<table>
		<tr>
		<th>Company Name</th>
		<th>TVA</th>
		<th>Company Type</th>
		</tr>
		<?php foreach ($invoices->getdetails_comp() as $detail_Comp): ?>
		<tr>
		<td><?php echo $detail_Comp['comp_name']?></td>
		<td><?php echo $detail_Comp['comp_VAT']?></td>
		<td><?php echo $detail_Comp['comp_type']?></td>
		</tr>
		<?php endforeach  ?>
		</table>
		<table>
		<tr>
		<th>Contact Name</th>
		<th>Contact Email</th>
		</tr>
		<?php foreach ($invoices->getdetails_comp() as $detail_Comp): ?>
		<tr>
		<td><?php echo $detail_Comp['person_first_name']?> <?php echo $detail_Comp['person_last_name']?></td>
		<td><?php echo $detail_Comp['person_email']?></td>
		</tr>
		</table>
		<?php endforeach  ?>
		<?php endif ?>
	<?php require 'includes/footer.php'?>
</div>       

<!-- php -->
<?php
// if(isset($_GET['more'])){
// 	$invoice_num = $_GET['invoice_num'];
// 	$result = $
