<?php


class InvoicesManager extends Dbconnect {

  public function getInvoices() {

    $sql = "SELECT * FROM `invoices`\n"

    . "JOIN companies\n"

    . "on invoices.comp_id=companies.comp_id\n"

    . "ORDER by invoice_date DESC\n"

    ;
        
    $stmt = $this->connect()->query($sql); 
        
      
    $invoices = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $invoices;
    
  }

}

