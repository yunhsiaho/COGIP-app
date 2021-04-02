<?php 
require 'includes/header.php';
include '../connect.php';
include '../CompaniesManager.php';
include '../InvoicesManager.php';
include '../Test-contactManager.php'

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
			foreach ($Contact->ContactManager() as $OneContact) { ?>
			<tr>
		<td><?php echo $OneContact['person_first_name']?></td>
		<td><?php echo $OneContact['person_last_name']?></td>
		<td><?php echo $OneContact['person_email']?></td>
        <td><?php echo $OneContact['comp_name']?></td>
		<td><button>more</button></td>
		<td><button>edit</button></td>

		</tr>	
			
		<?php } ?>
	</table>
</div>



<?php require 'includes/footer.php'?>