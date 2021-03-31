<?php

declare(strict_types=1);


require_once('Manager.php');

class CompaniesManager extends Manager
{


    //To display all the companies
    public function getCompanyName(){

        // NOTE: last 5 company name
    
        $db = $this->connectDb();
    
        try {
          $companyName = $db->prepare("SELECT *
          FROM companies");
          $companyName->execute();
        } catch (Exception $e) {
          echo $e->getMessage();
          exit;
        }
        return $companyName -> fetch(PDO::FETCH_ASSOC);
      } 

    // //To display company by id
    // public function getCompany(int $companyId)
    // {

    //     $db = $this->connectDb();

    //     $req = $db->prepare('SELECT ... AS ... 
    //         FROM ... 
    //         WHERE id = ?');

    //     $req->bindParam(1, $this->companyId, PDO::PARAM_STR);
    //     $req->execute();
    //     $company = $req->fetch();

    //     return $company;
    // }

}