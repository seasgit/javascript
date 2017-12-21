<?php
	require 'auth.php';

	try{
		$dbh = new PDO(Auth::DSN, Auth::USER, Auth::PWD);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		
	}catch(PDOException $e){
		exit("ERREUR Connexion Serveur ou database... Contactez le webmaster");
	}

?>