<!DOCTYPE html>
<html lang="nl">
	   
<link rel="stylesheet" type="text/css" href="ingelogd.css">
<TITLE>Vibes4You  Online mp3shop</TITLE>
</HEAD>
     
<div id="Logo"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="file:///F:/School/Blok2/Online%20Shop/onlineshop.html"><img src="logo.png" alt="logo"></a></div> 

<div id="Inloggen"> 
 <form action="uitlog.php" method="POST">
  <input type='submit' value='uitloggen' name='knop'>
</form>
</div>

     
</br>
	   <header>
     <h2 class="Navigatie"></h2>
<div id="hmenu">
<ul>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <li><a href="bestelling.php">Mijn bestellingen</a></li>
</ul>  
</div> 
	  
	   </header>
	   <BODY>   
<CENTER><div id="body">   <div id="welkom">
<CENTER>
<?php 
//verberg de error: lege variabele($_SESSION['gebruikersnaam']);
error_reporting(0);
ini_set('display_errors', 0);
$myusername = $_GET['naam'];
 echo "<h1>Welkom $myusername</h1>";
?>
</CENTER>
 </div>
 
<div id="liederen"> 
<h1>bestel hieronder uw favoriete liedjes.</h1> <br />
<br />
<?php
    session_start();
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
	 
	//een query maken zodat de informatie uit de database gehaald kan worden
	$queryy = "SELECT Naam, Artiest, ID FROM liederen";
    //querry in een variable zetten.
	$resultt = $conn->query($queryy);
	
    //als de rijen in de kolom(liederen) groter dan 0 zijn dan gooien we de data
	// uit de variabe/database. en halen we de rijen eruit met fetch assoc.
	
	if($resultt->num_rows > 0) {
	while($row = $resultt->fetch_assoc()) {
    echo "Titel: " . $row["Naam"]. " - Artiest: " .
    $row["Artiest"]; 
	$varID =  $row['ID']; 
	echo "&nbsp&nbsp <a href='bestellingsoverzicht.php?param1=$varID'>BESTEL!</a> <br>" ;
	

    }
    }else {
	echo "0 results";
	} 
?>   

 </div></CENTER>
 

<footer>
<div id="footer"></div>
</footer>
</BODY>
</HTML>