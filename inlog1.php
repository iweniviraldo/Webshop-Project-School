
<?php include 'databaseconnect.php';

  session_start();
  
  $username = "root";
  $password = "";
  $hostname = "localhost";
  
  $dbhandle = mysql_connect($hostname, $username, $password);
  
  $selecteren = mysql_select_db("online shop", $dbhandle) or die("kon niet verbinden met de database");
  
  $myusername = $_POST['username2'];
  $mypassword = $_POST['password2'];
  
  
  
  $query = "SELECT * FROM login WHERE usernaam='$myusername' and userwachtwoord='$mypassword'";
  //probeert de gebruikersnaam en wachtwoord te selecteren in de database(query).
  $result = mysql_query($query);
  // aangeven dat de variable in $query een query is.
  $count = mysql_num_rows($result);
  //tellen hoeveel resultaat het heeft
  mysql_close();
  //mysql verbinding sluiten omdat, er misschien ook andere verbindingen aan staan
  if($count==1){
  $_SESSION['myusername'] = $myusername;
    header("location: Ingelogd.php?naam=$myusername"); //de vraagteken achter ingelogd.php zorgt ervoor dat de variable van de gebruikersnaam naar de pagina ingelogd.php word gestuurd.
	
	}else {
	echo "Verkeerde gebruikersnaam of wachtwoord.<br>"; 
	echo "ga terug naar om het opnieuw te proberen.";
	
	}
	
	
	?>
	
