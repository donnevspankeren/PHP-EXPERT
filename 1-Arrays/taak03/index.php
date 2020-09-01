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

  foreach ($medewerkers as $key => $value) {
    echo $value["voornaam"] . $value["achternaam"] . "is een " . $value["functie"]. "<br>";
  }
    