<?php
 

 class CompaniesManager extends Dbconnect {

   public function getCompanies() {

     $sql = "SELECT * FROM companies LIMIT 5";
     
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