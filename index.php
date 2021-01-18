<?php
include_once __DIR__ . '/classes/City.php';
include_once __DIR__ . '/classes/Strada.php';
include_once __DIR__ . '/classes/MTB.php';
include_once __DIR__ . '/classes/Gravel.php';

$bianchi = new City('Spillo', 'Bianchi');
echo $bianchi->printName();

$canyon = new Strada('Ultimate', 'Canyon', 'Shimano');
echo $canyon->printName();

$bianchi = new MTB('Epic', 'Specialized', 2);
echo $bianchi->printName();

$wilier = new Gravel('Jena', 'Wilier', 'Campagnolo');
echo $wilier->printName();