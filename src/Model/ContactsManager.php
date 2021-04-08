<?php


class ContactsManager extends Dbconnect {

public function getContacts() {

$sql = "SELECT * FROM contact_persons 
JOIN companies

ON contact_persons.comp_id=companies.comp_id"

;

$stmt = $this->connect()->query($sql); 



$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

return $contacts;

}
public function getDetailContacts(){
    $sql = "SELECT * FROM contact_persons
    JOIN companies 
    ON contact_persons.comp_id = companies.comp_id";

    $stmt = $this->connect()->query($sql);

    $detail_contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $detail_contacts;
}

public function getDetailInvoices(){
    $sql = "SELECT * FROM invoices
    JOIN contact_persons
    ON  invoices.comp_id = contact_persons.comp_id";

    $stmt = $this->connect()->query($sql);

    $detail_invoices = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $detail_invoices;
}
public function createContact($contactFirstname, $contactLastname, $email, $compId) {

    $sql = "INSERT INTO contact_persons(person_first_name, person_last_name, person_email, comp_id)
    VALUES( '$contactFirstname', '$contactLastname', '$email', '$compId'); ";
    $stmt = $this->connect()->query($sql); 
    $createContact = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // mysqli_query($createCompany, $sql);
    // header(Location:'View/create_company_page.php');

}
}
