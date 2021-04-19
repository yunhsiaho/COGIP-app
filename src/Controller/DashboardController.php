<?php

declare(strict_types=1);

require_once('./Model/CompaniesManager.php');
require_once('./Model/InvoicesManager.php');
require_once('./Model/ContactsManager.php');

class DashboardController
{
    public function render()
    {
        $contacts = new ContactsManager();
        if (isset($_POST['addcontact'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $contacts->createContact(
                    $_POST['person_first_name,'],
                    $_POST['person_last_name'],
                    $_POST['person_email'],
                    $_POST['comp_id'],
                    $_POST['comp_id']
                );
            }
        }
        //delete

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
        //delete

        $invoices = new InvoicesManager();
        if (isset($_POST['addinvoice'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $invoices->createInvoice(
                    $_POST['invoice_num'],
                    $_POST['invoice_date'],
                    $_POST['comp_VAT'],
                    $_POST['comp_id'],
                    $_POST['person_id']
                );
            }
        }
        //delete



    }
}
