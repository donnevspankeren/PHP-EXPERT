<?php

class Auto{
$merk;
$kleur;
$type;
$uitvoering;
$brandstof;
}

$nieuweAuto = new Auto();
$nieuweAuto->merk = 'Tesla';
$nieuweAuto->kleur = "rood";
$nieuweAuto->type = "Model 3";
$nieuweAuto->uitvoering = "cabrio";
$nieuweAuto->brandstof = "elektrisch";

echo $nieuweAuto->merk;
$nogEenAndereAuto = new Auto();


?>
