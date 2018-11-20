<?php

$servernaam = "localhost";
$gebruiker = "root";
$wachtwoord = "";
$databasenaam = "online shop";
// Connectie maken
$conn = new mysqli($servernaam, $gebruiker, $wachtwoord, $databasenaam);

// Connectie controleren
if ( $conn->connect_error )
{
   // Foutmelding geven
   die( "Connectie niet gelukt: ".$conn->connect_error );
} else{}

		
		$gebruikersnaam = $_POST['username2'];
		$password = $_POST['password2'];
		
		
		
		$sql = "SELECT userwachtwoord FROM login WHERE usernaam = '$gebruikersnaam'";
		
		
		$result = $conn->query($sql);
        print_r($result);
		
		if($result ->num_row > 0 ){
		$rij = $result->fetch_assoc();
		$wachtwoord = $rij['wachtwoord'];
		if ($wachtwoord == $wachtwoord2)
		{
		echo 'u bent ingelogd';
		header('location; Onlineshop.html');
		}
	   
	  
?>