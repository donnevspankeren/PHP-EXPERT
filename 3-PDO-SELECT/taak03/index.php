<?php

$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = 'SELECT * FROM users WHERE firstname = :firstname';
$statement = $database_connectie->prepare($sql);
$statement->bindParam(":firstname", $firstname);
$user = $statement->fetch();
 
foreach ($user as $value) {
    echo $value['firstname'] . "<br>";
}
?>