<?php 
require 'includes/header.php';
include '../Model/Manager.php';
include '../Model/CompaniesManager.php';
include '../Model/InvoicesManager.php';

?>
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
	<?php require 'includes/footer.php'?>
</div>
