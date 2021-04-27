<?php
session_start();

// Définition des constantes de connexion à la base de données
define('dbhost', 'localhost');
define('dbuser', 'btssio');
define('dbpass', 'btssio');
define('dbname', 'dbconcess');

// Connexion de la base de données
try {
	$cnx = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
	// Activation des erreurs PDO
	$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// mode fetch par défaut : FETCH_ASSOC / FETCH_OBJ / FETCH_BOTH
	$cnx->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	
}
catch(PDOException $e) {
	die("Échec de la connexion à la base de données : " . $e->getMessage());
}


?>
