<?php


class InvoicesManager extends Dbconnect {

  public function getInvoices() {

  $sql = "SELECT * FROM `invoices`\n"

  . "JOIN companies\n"

  . "on invoices.comp_id=companies.comp_id\n"

  . "ORDER by invoice_date DESC\n"

  //. "limit 5"
  ;
    
    $stmt = $this->connect()->query($sql); 
    
  
  $invoices = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $invoices;
  
  }

}

 //  while($row = $stmt->fetch()) {

    //   echo $row['comp_name'] . ' | ';
    //   echo $row['comp_country'] . '<br>';
    //  }

    // foreach($companies as $key => $company){
    //   echo $company['comp_name'];
    //   echo'<br/>';
    //  }