<?php

function connect(){
	static $db;
	if (! isset($db))  {
	try{
		$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8mb4', 'test', 'test');
	} catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
	}

	}
	return $db;

}
