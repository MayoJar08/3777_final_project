<?php

DEFINE ('DB_USER', 'miguel'); 
DEFINE ('DB_PASSWORD', 'Eahlmlbme99'); 
DEFINE ('DB_HOST', 'localhost'); 
DEFINE ('DB_NAME', 'my_guitar_shop'); 

$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, 
DB_NAME) OR die ('Could not connect to MySQL: ' . 
mysqli_connect_error() ); 

?>