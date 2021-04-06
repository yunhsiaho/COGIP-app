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

}
