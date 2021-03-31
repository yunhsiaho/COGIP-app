<?php
declare(strict_types=1);


class Manager
{
	protected function connectDb()
	{
		try{
			$db = new PDO("mysql:host=remotemysql.com;dbname=sLl9cMVYKs;port=3306","sLl9cMVYKs","JmHxHiGJlO");
		    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    return $db;
	    } catch(Exception $e){
	        die('Error : '.$e->getMessage());
	    }
	}

}