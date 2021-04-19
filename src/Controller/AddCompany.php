<?php

require_once('./Model/CompaniesManager.php');

class AddCompany
{
    public function render()
    {
        $companies = new CompaniesManager();
        if (isset($_POST['addcompany'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $companies->createCompany(
                    $_POST['comp_name'],
                    $_POST['comp_country'],
                    $_POST['comp_VAT'],
                    $_POST['comp_type']
                );
            }
        }

        require('./View/create_company_page.php');
    }
}
