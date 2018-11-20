<?php

	$servernaam = "localhost";
    $gebruiker = "root";
    $wachtwoord = "";
	
	$databasenaam = "online shop";
	
    //variable aanmaken voor de connectie met de database
    $conn = new mysqli($servernaam, $gebruiker, $wachtwoord, $databasenaam);
	     //connect met de database 
	 if ( $conn->connect_error )
	 {
	 die( "Connectie niet gelukt: ".$conn->connect_error );
	 }
?>