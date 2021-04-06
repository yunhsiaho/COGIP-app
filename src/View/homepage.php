<?php 
require 'includes/header.php';
require '../Model/Manager.php';
require '../Model/CompaniesManager.php';
require '../Model/InvoicesManager.php';

?>

<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->

<div class="container">
	<h1>Welcome to the COGIP</h1>
	
	<h3>Companies</h3>
	<hr/>
	<table>
	<tr>
	<th>Company name</th>
	<th>Country</th>
	<th>Type</th></tr>
	
		<?php
			$companies= new CompaniesManager();
			foreach ($companies->getCompanies() as $company) { ?>
			<tr>
		<td><?php echo $company['comp_name']?></td>
		<td><?php echo $company['comp_country']?></td>
		<td><?php echo $company['comp_type']?></td>
		<td><button>more</button></td>
		<td><button>edit</button></td>
		</tr>	
		
		<?php } ?>
	</table>
	
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
			if ($x>=5)
			break;?>

			<tr>
			<td><?php echo $invoice['invoice_num']?></td>
			<td><?php echo $invoice['invoice_date']?></td>
			<td><?php echo $invoice['comp_name']?></td>
			<td><button>more</button></td>
			<td><button>edit</button></td>
			</tr>
		<?php
			$x++; } 
			?>
		</table>
	<?php require 'includes/footer.php'?>
</div>

