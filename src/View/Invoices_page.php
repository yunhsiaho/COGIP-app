<?php
require 'includes/header.php';
?>
<div class="container">
	<h1>Welcome to the COGIP</h1>

	<h3>Invoices</h3>
	<hr />
	<table>
		<tr>
			<th>Invoice number</th>
			<th>Invoice date</th>
			<th>Company name</th>
		</tr>

		<?php
		$x = 0;

		foreach ($invoices->getInvoices() as $invoice) {
			if ($x >= 20)
				break; ?>

			<tr>
				<td><?php echo $invoice['invoice_num'] ?></td>
				<td><?php echo $invoice['invoice_date'] ?></td>
				<td><?php echo $invoice['comp_name'] ?></td>
				<form action="" method="post">
				<td><button name="more" type="submit" value=<?php echo $invoice['comp_id']?>>more</button></td>
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
		<?php foreach ($invoices->getDetailsComp() as $detail_Comp): ?> 
		<!-- here $invoices= new InvoicesManager(see line23), and we put variable $invoices into method getDetailsComp() -->
			<?php if($_POST['more']==$detail_Comp['comp_id']):	?>
			<!-- if the clicked button's id equals to one of the id in the DB, it'll show this line of the data below-->
		<tr>
		<td><?php echo $detail_Comp['comp_name']?></td>
		<td><?php echo $detail_Comp['comp_VAT']?></td>
		<td><?php echo $detail_Comp['comp_type']?></td>
		</tr>
		<?php break; endif?>
		<!-- end of the filter if-->
		<?php endforeach  ?>
		<!-- end of the getdetailcomp foreach-->
		</table>
		<table>
		<h3>Contact Person</h3>
		<hr/>
		<tr>
		<th>Contact Name</th>
		<th>Contact Email</th>
		</tr>
		<?php foreach ($invoices->getDetailsContact() as $detail_contact): ?>
			<?php if($_POST['more']==$detail_contact['comp_id']):	?>
		<tr>
		<td><?php echo $detail_contact['person_first_name']." ".$detail_contact['person_last_name']?></td>
		<td><?php echo $detail_contact['person_email'].$detail_contact['comp_name']?></td>
		</tr>
		<?php endif?>
		<?php endforeach  ?>
		</table>
		<?php endif ?>
<?php require 'includes/footer.php' ?>
</div>

<!-- php -->
<?php
// if(isset($_GET['more'])){
// 	$invoice_num = $_GET['invoice_num'];
// 	$result = $
