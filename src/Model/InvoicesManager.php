<?php

require_once('Manager.php');

class InvoicesManager extends Dbconnect
{

  public function getInvoices()
  {

    $sql = "SELECT * FROM invoices
    JOIN companies
    on invoices.comp_id=companies.comp_id
    ORDER by invoice_date DESC";

    $stmt = $this->connect()->query($sql);


    $invoices = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $invoices;
  }

  public function getDetailsComp()
  {
    $sql = "SELECT * FROM `invoices`
    JOIN companies
  
    on invoices.comp_id=companies.comp_id";

    $stmt = $this->connect()->query($sql);


    $details_comp = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $details_comp;
  }

  public function getDetailsContact()
  {
    $sql = "SELECT * FROM `contact_persons`
    JOIN companies
  
    on contact_persons.comp_id=companies.comp_id";

    $stmt = $this->connect()->query($sql);


    $details_contact = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $details_contact;
  }
  public function createInvoice($invoiceNum, $invoiceDate, $invoiceVAT, $invoiceComp, $invoiceContact)
  {

    $sql = "INSERT INTO invoices(invoice_num, invoice_date, comp_VAT, comp_id, person_id)
    VALUES('$invoiceNum','$invoiceDate','$invoiceVAT','$invoiceComp',' $invoiceContact'); ";
    $stmt = $this->connect()->query($sql);
    $createInvoice = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // mysqli_query($createCompany, $sql);
    // header(Location:'View/create_company_page.php');

  }
}
