<?php

declare(strict_types=1);

require_once('./model/CompaniesManager.php');
require_once('./model/InvoicesManager.php');
require_once('./model/ContactsManager.php');


class CompanyController
{
    public function render()
    {
        $companies_provider = new CompaniesManager();

        $view = '../View/Companies_pages.php';

        if (isset($_GET['id'])) {
        }

        require $view;
    }
}
