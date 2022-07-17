<?php 

try {
	$bdd = new PDO("mysql:host=127.0.0.1; dbname=gestiondesnotes", "root", "");
	$bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Connexion établie";

} catch (Exception $e) {
	echo "Erreur : ".$e->getMessage()."<br>";
	die();	
}


?>