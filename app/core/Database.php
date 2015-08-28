<?php

/**
* Connection to the database
*/
class Database
{
	
	function __construct()
	{
		$access = require_once '../app/config/database.php';
		$db = new PDO('mysql:host='.$access['host'].';dbname='.$access['database'].';charset='.$access['charset'].'', ''.$access['user'].'', ''.$access['password'].'');
		return $db;	
	}
}

?>