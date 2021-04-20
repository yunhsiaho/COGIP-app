<?php

class AdminManager extends Dbconnect {

public function getAdminDB() {

$sql = "SELECT * FROM `admin`";

$stmt = $this->connect()->query($sql); 

$admin = $stmt->fetchAll(PDO::FETCH_ASSOC);

return $admin;

}
}

