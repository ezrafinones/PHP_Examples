<?php
try {
	$db = new PDO("mysql:host=localhost;dbname=test", "root", "ezra");
	// connection successful
}
catch (Exception $error) {

	die("Connection failed: " . $error->getMessage());
}
try {
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->beginTransaction();
	
	$db->exec("insert into CUSTOMERS (ID, NAME) values (4, 'HGFH')" );
	$db->exec("insert into CUSTOMERS (ID, NAME) values (5, 'FDHB')" );
	
	$db->commit();
}

catch (Exception $error) {
	$db->rollback();
	echo "Transaction not completed: " . $error->getMessage();
}
