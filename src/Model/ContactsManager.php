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
    $sql = "SELECT * FROM contact_persons
    JOIN invoices
    ON contact_persons.person_id = invoices.person_id";

    $stmt = $this->connect()->query($sql);

    $detail_invoices = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $detail_invoices;
}
}
