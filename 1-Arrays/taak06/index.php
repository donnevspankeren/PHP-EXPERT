<?php


$provincies=[
    [
        'provincie'         => 'Noord-Holland',
        'hoofdstad'         => 'Haarlem',
        'bevolking'         => '2.853.359',
        'inwoners_gemeente' => 'Amsterdam',
    ],
    [
        'provincie'         => 'Groningen',
        'hoofdstad'         => 'Groningen',
        'bevolking'         => '583.990',
        'inwoners_gemeente' => 'Groningen',
    ],
    [
        'provincie'         => 'Limburg',
        'hoofdstad'         => 'Maastricht',
        'bevolking'         => '1.116.137',
        'inwoners_gemeente' => 'Maastricht',
    ]
];



foreach($provincies as $provincie ){
    echo '<h2>' . $provincie['provincie']. '</h2>';
    echo '<ul>';
    echo '<li>hoofdstad: ' . $provincie['hoofdstad']. '</li>';
    echo '<li>bevolking: ' . $provincie['bevolking']. '</li>';
    echo '<li>meeste inwoners: ' . $provincie['inwoners_gemeente']. '</li>';
    echo '</ul>';

}