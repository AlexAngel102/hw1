<?php

require 'Laptop.php';
require 'NoteBook.php';
require 'Bridge.php';
require 'Transport.php';
require 'TVRemote.php';
require 'Shop.php';
require 'Buyer.php';

$laptop1 = new Laptop('Lenovo', 'Core-i7', 'GeForce GTX1060');
var_dump($laptop1);
echo "<br>";
$laptop1->turnOn();
var_dump($laptop1);
echo "<br>";
$laptop1->turnOff();
var_dump($laptop1);

$notebook = new NoteBook();
$notebook->brand = 'Shkolyarik';
$notebook->countPages = 96;
$notebook->size = '20x15';
$notebook->color = 'red/grey';
$notebook->material = 'cardboard';

echo $notebook->brand . '<br>';
echo $notebook->countPages . '<br>';
echo $notebook->size . '<br>';
echo $notebook->color . '<br>';
echo $notebook->material . '<br>';

$vehile1 = new Transport(3500, 2500);
$vehile2 = new Transport(4200, 3200);

$bridge = new Bridge();

var_dump($bridge->canTheCarGo($vehile1));

var_dump($bridge->canTheCarGo($vehile2));

echo '<br>';

$TvRemote = new TVRemote("LG", "Wi-Fi", true);
var_dump($TvRemote);
echo '<br>';


$buyer1 = new Buyer(25);
$buyer2 = new Buyer(16);
$shop = new Shop();
$shop->sellAlcohol($buyer1);
echo '<br>';

$shop->sellAlcohol($buyer2);