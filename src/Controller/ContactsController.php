<?php

declare(strict_types=1);

require_once('../Model/ContactManager.php');

class ContactController
{

    public function render()
    {
        $Contact = new ContactsManager();

        require('../View/Contact_Page.php');
    }
}
