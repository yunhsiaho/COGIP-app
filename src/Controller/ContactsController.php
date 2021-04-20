<?php

declare(strict_types=1);

require_once('./Model/ContactsManager.php');

class ContactsController
{
    public function render()
    {
        $Contact = new ContactsManager();

        require('./View/Contact_page.php');
    }
}
