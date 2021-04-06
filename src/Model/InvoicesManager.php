<?php


class InvoicesManager extends Dbconnect {

  public function getInvoices() {

  $sql = "SELECT * FROM invoices

  JOIN companies

  on invoices.comp_id=companies.comp_id

  ORDER by invoice_date DESC"

  ;
    
    $stmt = $this->connect()->query($sql); 
    
  
  $invoices = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $invoices;
  
  }

  public function getDetailsComp(){
    $sql = "SELECT * FROM `invoices`

    JOIN companies
  
    on invoices.comp_id=companies.comp_id"

  ;
    
    $stmt = $this->connect()->query($sql); 
    
  
  $details_comp = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $details_comp;
  }

  public function getDetailsContact(){
    $sql = "SELECT * FROM `contact_persons`

    JOIN companies
  
    on contact_persons.comp_id=companies.comp_id"

  ;
    
    $stmt = $this->connect()->query($sql); 
    
  
  $details_contact = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $details_contact;
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