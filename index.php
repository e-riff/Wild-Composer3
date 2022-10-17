<?php

require "vendor/autoload.php";

$meuhmeuh = new CowSay\Cow('Hello, Farm!');
$meuhmeuh->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $meuhmeuh;

$Sheep = new CowSay\Sheep('bééééééééééééééééééé');

echo $Sheep;
