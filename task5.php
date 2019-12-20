<?php

$city1 = 3;
$city1Radius = 2;

$city2 = 10;
$city2Radius = 3;

for ($i = 1; $i < 11; $i++){
    $place = rand(0,15);
    $speed = $place < $city1 - $city1Radius || (($place > $city1 + $city1Radius) && ($place < $city2 - $city2Radius)) || $place > $city2 + $city2Radius;
    echo sprintf("Машина %s едет по городу на %s км со скоростью %s",$i, $place,$speed?"90":"70");
}