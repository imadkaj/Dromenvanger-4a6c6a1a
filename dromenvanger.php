<?php
$a = array();
$B =  array();
$i = 1;
echo ("Hoeveel vrienden zal ik vragen om hun droom  \n");
$amount = readline();

if (is_numeric($amount)) {
    echo (var_export($amount) . "\n");
} else {
    echo (var_export($amount) . " is geen getal, vul een getal in. \n");
    exit();
}

for($i = 0; $i < $amount; $i++){
    echo "\n Wat is je naam? ".  PHP_EOL;
    $naam = readline(); 
  
    echo "hoe veel dromen?";
    $c= readline();
    if (is_numeric($c)) {
        echo (var_export($c) . "\n");
    } else {
        echo (var_export($c) . " is geen getal, vul een getal in. \n");
        exit();


    }

    $a[$naam] = array();
    for($j = 1; $j <= $c; $j++){
        echo "\n Wat is je droom? ".  PHP_EOL;
        $droom = readline(); 
        array_push($a[$naam], $droom);
    }
}


foreach ($a as $naam => $dromen) {
    foreach ($dromen as $droom) {
        echo ($naam . ' zijn droom is: ' . $droom ) . PHP_EOL;
    }
}