<?php
require 'includes/header.php';
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


    Bonjour Jean-Christian ! <br />
    Que souhaiterez-vous faire aujourd'hui ?<br />
    <br />
    <td><button><a href="create_invoice_page.php">+ New Invoice</a></button></td>
    <td><button><a href="create_contact_page.php">+ New Contact</a></button></td>
    <td><button><a href="create_company_page.php">+ New Company</a></button></td>

    <h3>Last Invoices</h3>

    <table>
      <thead>
        <tr>
          <th>Invoice number</th>
          <th>Invoice date</th>
          <th>Company name</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <?php
          $x = 0;

          foreach ($invoices->getInvoices() as $invoice) {
            if ($x >= 5)
              break; ?>

        <tr>
          <td><?php echo $invoice['invoice_num'] ?></td>
          <td><?php echo $invoice['invoice_date'] ?></td>
          <td><?php echo $invoice['comp_name'] ?></td>
          <td><button>delete</button></td>
        </tr>

      <?php
            $x++;
          }
      ?>

      </tr>
      </tbody>
    </table>

    <h3>Last Contacts</h3>

    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>E-mail</th>
          <th>Company</th>
        </tr>
      </thead>

      <tbody>
        <tr>

          <?php
          $x = 0;
          foreach ($contacts->getContacts() as $Contact) {
            if ($x >= 5)
              break; ?>

        <tr>
          <td><?php echo $Contact['person_first_name'] ?></td>
          <td><?php echo $Contact['person_email'] ?></td>
          <td><?php echo $Contact['comp_name'] ?></td>
          <td><button>delete</button></td>
        </tr>

      <?php
            $x++;
          }
      ?>
      </tr>
      </tbody>
    </table>

    <h3>Last Companies</h3>

    <table>
      <thead>
        <tr>
          <th>Company name</th>
          <th>Country</th>
          <th>Type</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <?php
          $x = 0;

          foreach ($companies->getCompanies() as $key => $company) {
            if ($x >= 5)
              break;
          ?>

            <form action="" method="get">
        <tr>

          <td><?php echo $company['comp_name'] ?></td>
          <td><?php echo $company['comp_country'] ?></td>
          <td><?php echo $company['comp_type'] ?></td>
          <td><button>delete</button></td>

        </tr>
        </form>

      <?php
            $x++;
          }
      ?>
      </tr>
      </tbody>

    </table>


  </section>

</body>

</html>