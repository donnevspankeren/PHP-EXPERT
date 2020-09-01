<?php
$medewerkers = [
    [
      'voornaam' => 'Willem',
      'achternaam' => ' van Oranje',
      'functie'  => 'koning'
    ],
    [
      'voornaam' => 'Donald',
      'achternaam' => ' Trump',
      'functie'  => 'president'
    ],
    [
      'voornaam' => 'Homer',
      'achternaam' => ' Simpson',
      'functie'  => 'fabrieksarbeider'
    ],
    [
      'voornaam' => 'Johan',
      'achternaam' => ' Cruyff',
      'functie'  => 'voetbalicoon'
    ]
    ,
    [
      'voornaam' => 'Badr',
      'achternaam' => ' Hari',
      'functie'  => 'Kickboxer'
    ]
  ];
for ($i=0; $i < 5 ; $i++) { 
    echo $medewerkers[$i]["voornaam"];
    echo $medewerkers[$i]["achternaam"] . " is een ";
    echo $medewerkers[$i]["functie"]. "<br>";
}