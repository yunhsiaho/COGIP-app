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
			foreach ($companies_client->getCompanies() as $company_client) { ?>
			<tr>
				<td><?php echo $company_client['comp_name']?></td>
				<td><?php echo $company_client['comp_country']?></td>
				<td><button>more</button></td>
				<td><button>edit</button></td>
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
				<td><button>more</button></td>
				<td><button>edit</button></td>
			</tr>	
			<?php } ?>
	</table>
	<?php require 'includes/footer.php'?>
</div>
