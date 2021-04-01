<?php require 'includes/header.php'?>
<?php require_once '../Model/CompaniesManager.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>

	<h1>Welcome to the COGIP! I DON'T KNOOOOOOOOOOOOOOOOOOW</h1>
    <ol>
    <?php 
			$companyName = new CompaniesManager();
			$test = $companyName->getCompanyName();
			var_dump($test);
			foreach($test AS $company){
				echo "<p>".$company["comp_name"]."</p>";
			}
			?></ol> 
	

</section>
<?php require 'includes/footer.php'?>