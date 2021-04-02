<?php 
require 'includes/header.php';
include '../Model/Manager.php';
include '../Model/CompaniesManager.php';
include '../Model/InvoicesManager.php';

?>
<div class="container">
	<h1>COGIP : Companies Directory</h1>
	
	<h4>Companies</h4>
	<table>
	<tr>
	<th>Company name</th>
	<th>Country</th>
	<th>Type</th></tr>
	
		<?php
		$x=0;
		
		$companies= new CompaniesManager();
		foreach ($companies->getCompanies() as $company) { 
			if ($x>=5)
			break;?>
		
		<tr>
			<td><?php echo $company['comp_name']?></td>
			<td><?php echo $company['comp_country']?></td>
			<td><?php echo $company['comp_type']?></td>
			<td><button>more</button></td>
			<td><button>edit</button></td>
		</tr>	
			
		<?php
			$x++; } 
		?>
	</table>
	<?php require 'includes/footer.php'?>
</div>