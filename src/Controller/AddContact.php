<?php

require_once('../model/ContactsManager.php');

class AddContact
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
        require('../view/create_contact_page.php');
    }
}
