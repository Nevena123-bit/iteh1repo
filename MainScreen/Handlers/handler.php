<?php
require '../Data/FilmoviControl.php';
require '../Data/Film.php';
$result=FilmoviControl::getInstance()->getAllFilmovi();
//-> Ime ->Cena mora da bude isti naziv kao u klasi a u klasi mora da bude isti naziv kolone kao u DB pazi velikai  mala slova
echo $result;