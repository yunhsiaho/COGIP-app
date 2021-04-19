<?php

declare(strict_types=1);

require_once('./Model/InvoicesManager.php');

class InvoicesController
{
    public function render()
    {
        $companies_provider = new InvoicesManager();

        require('./View/Companies_pages.php');
    }
}
