<?php
class Robot{
    public $naam;
    public $geluid;
    public $voortstuwing;

    function getSound(){
        return $this->geluid;
    }
}

$wally = new Robot();
$wally->naam="wal-e";
$wally->geluid="beepboop";
$wally->voortstuwing="rollend";
echo "Het geluid van Wally = ".$wally->getSound()."<br>";


$wolly = new Robot();
$wolly->naam="wol-e";
$wolly->geluid="boopbeep";
$wolly->voortstuwing="lopend";
echo "Het geluid van Wolly = ".$wolly->getSound()."<br>";

?>