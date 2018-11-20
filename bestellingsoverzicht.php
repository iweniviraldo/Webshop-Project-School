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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
<CENTER><div id="body">    <!--welkom--> <div id="welkom">
<CENTER>
<!--Zorgt ervoor dat alle informatie van de opgegeven php bestand gebruikt kan worden in deze bestand-->
<?php 

?>
</CENTER>
 </div>
 
<div id="liederen"> 
<h1>bestellingsoverzicht</h1> <br />
<br />
<?php 

     session_start();
	$servernaam = "localhost";
    $gebruiker = "root";
    $wachtwoord = "";
    $database = "online shop";
	
    //variable aanmaken voor de connectie met de database
    $conn = new mysqli($servernaam, $gebruiker, $wachtwoord, $database);
     //connect met de database 
	 if ( $conn->connect_error )
	 {
	 die( "Connectie niet gelukt: ".$conn->connect_error );
	 }
	 	 
    if (isset($_GET['param1']))
     {
	$param1 = $_GET['param1'];
	
	
	$query = ("SELECT Artiest,Naam,ID FROM liederen WHERE ID = '$param1'; ");
	}
	
	$resultaat = $conn->query($query);
     
	 
		if ( $resultaat->num_rows > 0 )
    {
	 while ( $rij = $resultaat->fetch_assoc() )
	 {
	 
	 $naam = $rij['Naam'];
	 $artiest = $rij['Artiest'];
	 $IDD = $rij['ID'];
	 $gebruiker = $_SESSION['myusername'];
	 $toevoegen = "INSERT INTO bestelling (artiest, gebruikernaam, naam) VALUES ('$artiest','$gebruiker', '$naam')";
	 $resultaat2 = $conn->query($toevoegen);
	 
	
	if ( $resultaat2 == true )
    {
     echo "Uw bestelling is geplaatst<br>";
     echo "Ga terug om meerdere liedjes te bestellen";  
    }else echo " het is mislukt";
	 }
	 
	}
	




 
	

?> 


<footer>
<div id="footer"></div>
</footer>
</BODY>
</HTML>