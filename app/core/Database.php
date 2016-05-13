<?php

/**
* Connection to the database
*/
class Database
{
	private static $db;

	function __construct()
	{
		try {
			$access = require_once '../app/config/database.php';
			self::$db = new PDO("mysql:host=".$access['host'].";dbname=".$access['database'].";charset=".$access['charset']."", $access['user'], $access['password']);
		}
		catch (PDOException $e) {
		    echo "<pre>Can't connect to Database.<br/><b>Message : </b>".$e->getMessage()."</pre>";
		}
	}

	public function select($request)
	{
		$prep = self::$db->prepare($request);
		$prep->execute();
		return $prep->fetch();
	}
}

?>
