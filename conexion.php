<?php
	$username="root";
	$password="12345";
	$databasename="db_originalShop";

	try {
			$conn = new PDO('mysql:host=localhost;dbname='.$databasename, $username , $password);
		}
		catch (PDOException $ex) {
			echo $ex->getMessage();
			exit;
		}	
?>
