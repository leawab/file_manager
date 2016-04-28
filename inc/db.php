<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'shop');

try {

	$db_options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // Force l'encodage en utf8
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Force le resultat des requetes en tableau associatif (clés textes) c a d plus de clef numerique (donc direct ["title"])
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING // Force l'affichage des erreurs (par defaut ERRMODE_SILENT)
    );

	$db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS, $db_options);

} catch(Exception $e) {
	die('MySQL Error >> '.$e->getMessage());
}