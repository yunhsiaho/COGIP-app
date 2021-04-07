<?php 
require 'includes/header.php';
include '../Model/Manager.php';
include '../Model/CompaniesManager.php';
include '../Model/ContactsManager.php';

?>
<div class="container">
	<h1>Welcome to the COGIP</h1>
	
	<h3>Contacts</h3>
	<hr/>
	<table>
	<tr>
	<th>Contact Firstname</th>
	<th>Contact Lastname</th>
    <th>Email</th>
    <th>Company</th></tr>
	
		<?php
			$Contact= new ContactManager();
			foreach ($Contact->getContacts() as $OneContact) { ?>
			<tr>
		<td><?php echo $OneContact['person_first_name']?></td>
		<td><?php echo $OneContact['person_last_name']?></td>
		<td><?php echo $OneContact['person_email']?></td>
        <td><?php echo $OneContact['comp_name']?></td>
		<form action="" method="post">
		<td><button name="more" type="submit" value=<?php echo $OneContact['person_id']?>>more</button></td>
		</form>		
		</tr>	
			
		<?php } ?>
	</table>
		<?php if(isset($_POST['more'])):	?>
			<?php foreach($Contact->getDetailContacts() as $detail_contacts): ?>
			<?php if($_POST['more']==$detail_contacts['person_id']): ?>
			<h4>Contact : <?php echo $detail_contacts['person_first_name']." ".$detail_contacts['person_last_name']?></h4>
			<h4>Company : <?php echo $detail_contacts['comp_name']?></h4>
			<h4>Email : <?php echo $detail_contacts['person_email']?></h4>
			<hr/>
				<?php endif ?>
				<?php endforeach ?>
				<!-- <?php var_dump($Contact); ?> -->
				<h3>Contact person for these invoices:</h3>
				<?php foreach($Contact->getDetailInvoices() as $detail_invoices): ?>
				<?php if($_POST['more']==$detail_invoices['person_id']): ?>
			<table>
			<tr>
			<th>Invoice Number</th>
			<th>Date</th>
			</tr>
			<td><?php echo $detail_invoices['invoice_num']?></td>
			<td><?php echo $detail_invoices['invoice_date']?></td>
			</table>
			<?php endif ?>
				<?php endforeach ?>
		<?php endif ?>
	<?php require 'includes/footer.php'?>
</div>



