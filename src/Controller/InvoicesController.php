<?php

declare(strict_types=1);

require_once('./Model/InvoicesManager.php');

class InvoicesController
{
    public function render()
    {
        $invoices = new InvoicesManager();

        require('./View/Invoices_page.php');
    }
}
