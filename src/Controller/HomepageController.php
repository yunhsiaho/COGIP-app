<?php
declare(strict_types = 1);

require('Model/ContactsManager.php');
require('Model/InvoicesManager.php');
require_once('Model/CompaniesManager.php');

class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST) 
    {

        //this is just example code, you can remove the line below
        $companies = new CompaniesManager();
        $invoices = new InvoicesManager();
        $contacts = new ContactsManager();

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require('./View/homepage.php');
        
    }
}

