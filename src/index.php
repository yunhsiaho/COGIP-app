
<?php
include 'connect.php';
include 'CompaniesManager.php';
include 'InvoicesManager.php';
include 'View/homepage.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>



<section>

<h1>Welcome to the COGIP!</h1>



<h3>Companies</h3>
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
            </tr>	
    
    <?php
        $x++; } 
        ?>
    </table>

</section>

</body>
</html>
