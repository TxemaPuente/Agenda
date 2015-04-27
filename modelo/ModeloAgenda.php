<?php

require_once '/core/Database.php';

/**
 * 
 */
function getContactos(){
	
	$db = new Database();
	$db->connect();
	$query = 'SELECT * FROM agenda';
	$db->sql($query);
	$result = $db->getResult();
	
	// Cerrar la conexión
	$db->disconnect();
	
	return $result;
}
