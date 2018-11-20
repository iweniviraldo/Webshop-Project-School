<?php 


$servernaam = "localhost";
$gebruiker = "root";
$wachtwoord = "";
$database = "sushi-restaurant";

// Connectie maken
$conn = new mysqli($servernaam, $gebruiker, $wachtwoord, $database);

// Connectie cont
	
if ( $conn->connect_error )
{
   // Foutmelding geven
   die( "Connectie niet gelukt: ".$conn->connect_error );
} 




		$gebruikersnaam = $_POST['gebruikersnaam'];
		$wachtwoord = $_POST['wachtwoord'];
                $telefoonNummer = $_POST['telefoonNummer'];
		$email = $_POST['emailAdres'];
                $adres = $_POST['adres'];


	
	//alles gaat goed tot aan de query
	$sql = "INSERT INTO klant (Gebruikersnaam,Wachtwoord,E-mail,Adres) VALUES ('$gebruikersnaam','$wachtwoord','$telefoonNummer','$email','$adres')";
	$result = $conn->query($sql); 
 
	
	if ( $result == true )
	{
	echo "u heeft een account aangemaakt";
	echo "ga terug om in te loggen !";
	} else { echo" Het is niet gelukt om een account aan te maken. ";
             echo" Kijk even opnieuw na of uw alle invoervelden heeft ingevoerd";
			 }
?>