<?php
class Scooter{
    public $merk;
    public $kleur;
    public $inhoudTank;

    function checkInhoudTank(){
        if($this->inhoudTank == 0){
            echo "Tank is leeg."."<br>";
        }else{
            echo "Tank is nog niet leeg."."<br>";
        }
    }        
    
}

$piago = new Scooter();
$piago->merk="Piago";
$piago->kleur="Rood";
$piago->inhoudTank=6;
$piago->checkInhoudTank();

$peugeot = new Scooter();
$peugeot->merk="Peugeot";
$peugeot->kleur="Zwart";
$peugeot->inhoudTank=7;
$peugeot->checkInhoudTank();
?>