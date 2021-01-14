<?php

$naam = $_POST['name'];
$achternaam = $_POST['surname'];
$adres = $_POST['addressline'];
$stad = $_POST['city'];
$land = $_POST['country'];

if($naam != "" && $achternaam != "" && $adres != "" && $stad != "" && $land != ""){
    echo '<div style="border: 2px solid #000000; width: 15%; padding: 5px;">';
    echo $naam . " " . $achternaam;
    echo '<br>' . $adres;
    echo '<br>' . $stad;
    echo '<br>' . $land;
    echo '</div>';
}else{
    echo "Onvoldoende invoer aanwezig om het label te maken";
}