<?php 


$servernaam = "localhost";
$gebruiker = "root";
$wachtwoord = "";
$database = "online shop";

// Connectie maken
$conn = new mysqli($servernaam, $gebruiker, $wachtwoord, $database);

// Connectie cont
	
if ( $conn->connect_error )
{
   // Foutmelding geven
   die( "Connectie niet gelukt: ".$conn->connect_error );
} 




		$gebruikersnaam = $_POST['gebruikersnaam'];
		$password = $_POST['password'];
		$email = $_POST['mail'];


	
	//alles gaat goed tot aan de query
	$sql = "INSERT INTO login (userwachtwoord, useremail, usernaam) VALUES ('$password', '$email', '$gebruikersnaam')";
	$result = $conn->query($sql); 
 
	
	if ( $result == true )
	{
	echo "u heeft een account aangemaakt";
	echo "ga terug om in te loggen !";
	} else { echo" Het is niet gelukt om een account aan te maken. ";
             echo" Kijk even opnieuw na of uw alle invoervelden heeft gebruikt";
			 }
	

	
	
		
		
		

 










?>