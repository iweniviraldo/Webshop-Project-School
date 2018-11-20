<!DOCTYPE html>
<html lang="nl">
       <head>
	   <meta charset="iso-8859-1">
	   <meta name="description" content="vibes4you">
	   <meta name="keywords" content="vibes4you, muziek,
	   online">
	   <meta name="author" content="Iwen Chedi">
	   
<link rel="stylesheet" type="text/css" href="ingelogd.css">
<TITLE>Vibes4You  Online mp3shop</TITLE>
</HEAD>
     
<div id="Logo"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="file:///F:/School/Blok2/Online%20Shop/onlineshop.html"><img src="logo.png" alt="logo"></a></div> 

<div id="Inloggen"> 
 <form action="inlog1.php" method="POST">
  <input type='submit' value='inloggen' name='knop'>
</form>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;<a href="http://localhost/Online%20Shop/registratie.html">Klik hier om te registreren</a> 
</div>

     
</br>
	   <header>
     <h2 class="Navigatie"></h2>
<div id="hmenu">
<ul>
  <li><a href="bestellingsoverzicht.php">bestellingsoverzicht</a></li>
  <li><a href="">Top playlist</a></li>
  <li><a href="">Zoeken</a></li>
  <li><a href="">Social media</a></li>
  <li><a href="">Sitemap</a></li>
</ul>  
</div> 
	  
	   </header>
	   <BODY>   
<CENTER><div id="body">    <!--welkom--> <div id="welkom">
<CENTER>
<!--Zorgt ervoor dat alle informatie van de opgegeven php bestand gebruikt kan worden in deze bestand-->
<?php 

?>
</CENTER>
 </div>
 
<div id="liederen"> 
<h1>bestel hieronder uw favoriete liedje.</h1> <br />
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
	   echo"dont Look Down - Artiest: Usher";
	
	$queryy = "SELECT ID FROM `liederen` WHERE `ID` = 1";
    //querry in een variable zetten.
	$resultt = $conn->query($queryy);
    //als de rijen in de kolom(liederen) groter dan 0 zijn dan gooien we de data
	// uit de variabe/database. en halen we de rijen eruit met fetch assoc.
	if ($resultt->num_rows > 0 )
	{
	 while ( $row = $resultt->fetch_assoc() )
	 {
	  
	 $id = $row['ID'];
	 
	 echo "<a href=bestellingsoverzicht.php?param1=$id><br>bestel</a>";
	 
	 }}
	 
	 
	 
	
  

?>

<footer>
<div id="footer"></div>
</footer>
</BODY>
</HTML>