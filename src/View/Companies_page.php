<?php
require 'includes/header.php';
?>

<div class="container">
	<h1>COGIP : Companies Directory</h1>
	<h4>Clients</h4>
	<table>
		<tr>
			<th>Company name</th>
			<th>Country</th>
		</tr>

		<?php foreach ($companies->getCompanies() as $company_client) { ?>
			<tr>
				<td><?php echo $company_client['comp_name'] ?></td>
				<td><?php echo $company_client['comp_country'] ?></td>
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
		foreach ($companies->getCompanies_provider() as $company_provider) { ?>
			<tr>
				<td><?php echo $company_provider['comp_name'] ?></td>
				<td><?php echo $company_provider['comp_country'] ?></td>
			</tr>
		<?php } ?>
	</table>
	<?php require 'includes/footer.php' ?>
</div>