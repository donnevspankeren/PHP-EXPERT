<?php

$speelgoed = [

    [
        'naam' => 'bal',
        'soort' => 'sport',
        'prijs' => '5.00'
    ],
    [
        'naam' => 'knuffelbeer',
        'soort' => 'knuffels',
        'prijs' => '9.50'
    ],
    [
        'naam' => 'Catan',
        'soort' => 'bordspel',
        'prijs' => '39.00'
    ],
];
echo "Naam van het speelgoed is: " . $speelgoed[0]["naam"]." ,Het soort speelgoed is: ". $speelgoed[0]["soort"]." en de prijs is: ". $speelgoed[0]["prijs"] . "<br>";
echo "Naam van het speelgoed is: " . $speelgoed[1]["naam"]." ,Het soort speelgoed is: ". $speelgoed[1]["soort"]." en de prijs is: ". $speelgoed[1]["prijs"] . "<br>";
echo "Naam van het speelgoed is: " . $speelgoed[2]["naam"]." ,Het soort speelgoed is: ". $speelgoed[2]["soort"]." en de prijs is: ". $speelgoed[2]["prijs"] . "<br>";

$games = [
    'sport' => [
        'naam' => 'Fifa',
        'uitgever' => 'EA',
        'prijs' => '60.00'
    ],
    'action' => [
        'naam' => 'Doom',
        'uitgever' => 'Bethesda',
        'prijs' => '60.00'
    ],
    'fps' => [
        'naam' => 'Left for dead 2',
        'uitgever' => 'Valve',
        'prijs' => '40.00'
    ]
];

echo "De naam van de game is: " . $games["sport"]["naam"] . ", De uitgever is: " . $games["sport"]["uitgever"] . " en de prijs van het spel is: " . $games["sport"]["prijs"]."<br>";
echo "De naam van de game is: " . $games["action"]["naam"] . ", De uitgever is: " . $games["action"]["uitgever"] . " en de prijs van het spel is: " . $games["action"]["prijs"]."<br>";
echo "De naam van de game is: " . $games["fps"]["naam"] . ", De uitgever is: " . $games["fps"]["uitgever"] . " en de prijs van het spel is: " . $games["fps"]["prijs"];