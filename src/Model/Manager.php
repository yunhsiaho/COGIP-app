<?php
	class Dbconnect{

	protected function connect() {
	$db = new PDO(
	//remote sql:
	"mysql:dbname=sLl9cMVYKs;host=remotemysql.com;port=3306;",
	"sLl9cMVYKs",
	"JmHxHiGJlO",


	[
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	]
	);

	return $db;

	}

}

