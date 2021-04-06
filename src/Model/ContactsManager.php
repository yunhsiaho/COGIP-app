<?php


class ContactsManager extends Dbconnect {

public function getContacts() {

$sql = "SELECT * FROM `contact_persons`\n"

. "JOIN companies\n"

. "on contact_persons.comp_id=companies.comp_id\n"


;

$stmt = $this->connect()->query($sql); 


$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

return $contacts;

}

}
