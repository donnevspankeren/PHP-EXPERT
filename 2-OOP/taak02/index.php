<?php

class Auto{
public $merk;
public $kleur;
public $type;
public $uitvoering;
public $brandstof;
}

$nieuweAuto = new Auto();
$nieuweAuto->merk = 'Tesla';
$nieuweAuto->kleur = "rood";
$nieuweAuto->type = "Model 3";
$nieuweAuto->uitvoering = "cabrio";
$nieuweAuto->brandstof = "elektrisch";

echo $nieuweAuto->merk. "<br>";
echo $nieuweAuto->kleur. "<br>";
echo $nieuweAuto->type. "<br>";
echo $nieuweAuto->uitvoering. "<br>";
echo $nieuweAuto->brandstof. "<br>";
$nogEenAndereAuto = new Auto();


?>
