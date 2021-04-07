<?php


class CompaniesManager extends Dbconnect {

    public function getCompanies() {
  
        $sql = "SELECT * FROM companies WHERE comp_type='client' LIMIT 5";
        
        $stmt = $this->connect()->query($sql); 
        
        $companies_client = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $companies_client;
    }

    public function getCompanies_provider() {
    
        $sql = "SELECT * FROM companies WHERE comp_type='provider' LIMIT 5";
        
        $stmt = $this->connect()->query($sql);
        
        $companies_provider = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $companies_provider;
    } 
public function getCompaniesInfos() {

    $sql = "SELECT * FROM companies";
    
    $stmt = $this->connect()->query($sql); 
    

$companies = $stmt->fetchAll(PDO::FETCH_ASSOC);

return $companies;

}
public function getCompaniesContacts() {

    $sql = "SELECT * FROM contact_persons
    JOIN companies 
    ON contact_persons.comp_id = companies.comp_id";
    
    $stmt = $this->connect()->query($sql); 
    

$companies = $stmt->fetchAll(PDO::FETCH_ASSOC);

return $companies;

}
public function getCompaniesInvoices() {

    $sql = "SELECT * FROM companies 
    JOIN invoices 
    ON companies.comp_id = invoices.comp_id ";
    
    $stmt = $this->connect()->query($sql); 
    

$companies = $stmt->fetchAll(PDO::FETCH_ASSOC);

return $companies;

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