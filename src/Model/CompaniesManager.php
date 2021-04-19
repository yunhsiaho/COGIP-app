

<?php
 
require_once('Manager.php');

class CompaniesManager extends Dbconnect {

    public function getCompanies() {
  
        $sql = "SELECT * FROM companies ORDER BY comp_id DESC LIMIT 5";
        
        $stmt = $this->connect()->query($sql); 
        
        $companies_client = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $companies_client;
    }

    public function getCompanies_clients() {
  
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

    public function createCompany($compName, $compCountry, $VAT, $compType) {

        $sql = "INSERT INTO companies(comp_name, comp_country, comp_VAT, comp_type)
        VALUES( '$compName', '$compCountry', '$VAT', '$compType'); ";
        
        $stmt = $this->connect()->query($sql); 
        
        $createCompany = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // mysqli_query($createCompany, $sql);
        // header(Location:'View/create_company_page.php');

    }
}