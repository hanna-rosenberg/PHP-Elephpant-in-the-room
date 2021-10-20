<?php

// indexerad array 

$tårta = [
    'jordgubbar',
    'vaniljkräm',
    'tårtbotten',
];

echo $tårta[1];


// assosiativ array 

$tårta1 = [
    'botten' => 'tårtbotten',
    'fyllning' => 'vaniljkräm',
    'topping' => 'jordgubbar',
];

echo $tårta1['fyllning'];

foreach ($tårta1 as $innehåll => $ingredienser)
    // tårta1 = namnet på allt. key = innehållet, value = ingredieserna. I loopen deklarerar jag värderna i min array. 
    // vill jag få ut innehåll echoar jag ut innehåll, vill jag få ut ingredienser echoar jag ingredienser. jag sätter
    // alltså namn på mina saker för att kunna välja vad jag skall få ut. 

    echo $ingredienser;


$godsaker = [

    [
        'namn' => 'chokladkaka',
        'fyllning' => 'vaniljkräm',
        'botten' => 'brownie',
        'topping' => 'hallon'
    ],

    [
        'namn' => 'jordgubbstårta',
        'fyllning' => 'grädde',
        'botten' => 'sockerkaksbotten',
        'topping' => 'riven choklad'
    ],

    [
        'namn' => 'prinsessbakelse',
        'fyllning' => 'grädde',
        'botten' => 'sockerkaksbotten',
        'topping' => 'marsinpan'
    ],
];

foreach ($godsaker as $godsak) {
    $namn = $godsak['namn'];
    $fyllning = $godsak['fyllning'];
    $botten = $godsak['botten'];
    $topping = $godsak['topping'];
?>
    <ol>
        <li>
            <?php
            echo $namn; ?>
        <li>
            <?php
            echo $fyllning; ?>
        <li>
            <?php
            echo $botten;
            ?>
        <li>
            <?php
            echo $topping;
            ?>
    </ol>
<?php
};
