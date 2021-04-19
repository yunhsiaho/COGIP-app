<?php

require_once('./Model/InvoicesManager.php');

class AddInvoice
{
    public function render()
    {
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
        require('./View/create_invoice_page.php');
    }
}
