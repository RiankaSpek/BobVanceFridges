<?php

include __DIR__ . '/vendor/autoload.php';

use RedBeanPHP\R as R;

//connect to database
R::setup('mysql:host=localhost;dbname=zdeepkoelkast', 'root', '');

R::wipe('newfridge');
$newfridge = [
    [
        'id' => 1,
        'naam' => 'Fridge Henk',
        'image' => 'https://whirlpool-cdn.thron.com/delivery/public/thumbnail/whirlpool/pi-bcc45dbd-42bb-4e66-aa1d-edbf7444359f/jsind9/std/350x350/wq9i-fo1bx-koelkasten-1.webp.webp?fill=zoom&fillcolor=rgba:255,255,255&scalemode=product&format=WEBP',
        'prijs' => 1262.96,
        'beschrijving' => 'Dreams come true with this big boy!',
        'artikelnummer' => '2846263517'
    ],
    [
        'id' => 2,
        'naam' => 'Fridge Piet',
        'image' => 'https://www.keukenkiosk.nl/pub/media/catalog/product/cache/17babffeca04d32925a2e38837a4ef57/b/i/bigchill_koelkast_groot_zijkantkant_cherryred.jpg',
        'prijs' => 962.96,
        'beschrijving' => 'What could be wrong with the lovin color?',
        'artikelnummer' => '9185625385'
    ],
    [
        'id' => 3,
        'naam' => 'Fridge Marga',
        'image' => 'https://cdn.toppy.nl/g/catalog/product/12224/1200f1200/cfx3-75-9600025332-p401_resultaat.webp',
        'prijs' => 62.96,
        'beschrijving' => 'Every alcoholics dream!',
        'artikelnummer' => '82458192654'
    ]
];

foreach ($newfridge as $info) {
    $newfridges = R::dispense('newfridge');
    $newfridges->naam = $info['naam'];
    $newfridges->image = $info['image'];
    $newfridges->prijs = $info['prijs'];
    $newfridges->beschrijving = $info['beschrijving'];
    $newfridges->artikelnummer = $info['artikelnummer'];

    R::store($newfridges);
}

R::wipe('usedfridge');
$usedfridge = [
    [
        'id' => 1,
        'naam' => 'Fridge Henk',
        'image' => 'https://whirlpool-cdn.thron.com/delivery/public/thumbnail/whirlpool/pi-bcc45dbd-42bb-4e66-aa1d-edbf7444359f/jsind9/std/350x350/wq9i-fo1bx-koelkasten-1.webp.webp?fill=zoom&fillcolor=rgba:255,255,255&scalemode=product&format=WEBP',
        'prijs' => 162.96,
        'beschrijving' => 'I suppose this qualifies as a fridge...',
        'staat' => 'Decent',
        'artikelnummer' => '8264619374'
    ],
    [
        'id' => 2,
        'naam' => 'Fridge Piet',
        'image' => 'https://www.keukenkiosk.nl/pub/media/catalog/product/cache/17babffeca04d32925a2e38837a4ef57/b/i/bigchill_koelkast_groot_zijkantkant_cherryred.jpg',
        'prijs' => 62.96,
        'beschrijving' => 'Happy fridge, happy home',
        'staat' => 'All right',
        'artikelnummer' => 'A1B2C3'
    ],
    [
        'id' => 3,
        'naam' => 'Fridge Marga',
        'image' => 'https://cdn.toppy.nl/g/catalog/product/12224/1200f1200/cfx3-75-9600025332-p401_resultaat.webp',
        'prijs' => 2.96,
        'beschrijving' => 'Please take this mess away from me!',
        'staat' => 'Garbage',
        'artikelnummer' => '83647123495'
    ]
];

foreach ($usedfridge as $info) {
    $usedfridges = R::dispense('usedfridge');
    $usedfridges->naam = $info['naam'];
    $usedfridges->image = $info['image'];
    $usedfridges->prijs = $info['prijs'];
    $usedfridges->staat = $info['staat'];
    $usedfridges->beschrijving = $info['beschrijving'];    
    $usedfridges->artikelnummer = $info['artikelnummer'];

    R::store($usedfridges);
}

R::wipe('messages');
$messages = [
    [
        'id' => 1,
        'email' => 'mama@papa.nl',
        'message' => 'Bananas should not be kept in the fridge, right?'
    ],
    [
        'id' => 2,
        'email' => 'moeder@papa.nl',
        'message' => 'I like bunnies'
    ]
];
foreach ($messages as $info) {
    $message = R::dispense('messages');
    $message->email = $info['email'];
    $message->message = $info['message'];

    R::store($message);
}
