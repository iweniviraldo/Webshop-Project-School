<?php

if ( isset( $_POST['knop'] ) ) {
// verwijder alle sessie variable
session_unset();
// vernietig de sessie
session_destroy(); 

header("location: onlineshop.html");
}


?>