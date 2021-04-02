<?php 
require 'includes/header.php';
include '../Model/Manager.php';
include '../Model/CompaniesManager.php';
include '../Model/ContactsManager.php';

?>
<div class="container">
	<h1>COGIP : Contact directory</h1>

	<table>
	<tr>
	<th>Contact Firstname</th>
	<th>Contact Lastname</th>
    <th>Email</th>
    <th>Company</th></tr>
	
		<?php
		$x=0;

		$Contact= new ContactManager();
		foreach ($Contact->getContacts() as $OneContact) { 
			if ($x>=20)
			break;?>
			<tr>
				<td><?php echo $OneContact['person_first_name']?></td>
				<td><?php echo $OneContact['person_last_name']?></td>
				<td><?php echo $OneContact['person_email']?></td>
        		<td><?php echo $OneContact['comp_name']?></td>
				<td><button>more</button></td>
				<td><button>edit</button></td>
			</tr>	
			
		<?php
			$x++; } 
		?>
	</table>
	<?php require 'includes/footer.php'?>
</div>