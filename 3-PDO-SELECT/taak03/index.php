<?php

$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$firstname = "Mohamed";

$sql = 'SELECT * FROM users WHERE firstname = :ph_firstname';
$statement = $database_connectie->prepare($sql);
$statement->bindParam(":ph_firstname", $firstname);
$statement->execute();
$user = $statement->fetch(PDO::FETCH_ASSOC); //fetch gebruikt omdat maar 1 rij geselecteerd is. ANders fetchAll()
//  var_dump($user);
foreach ($user as $key => $value) {
    echo $key . ":" . $value . "<br>";
}
?>