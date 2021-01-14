<?php

$lengte = $_POST['length'];
$breedte = $_POST['width'];
$tegel = $_POST['tiles'];
$aantal = null;

if($lengte != "" && $breedte != ""){
    $oppervlakte = $lengte * $breedte;
    if($tegel = "30 x 30"){
        $aantal = $oppervlakte / 900;
    }elseif($tegel = "50 x 50"){
        $aantal = $oppervlakte / 2500;
    }elseif($tegel = "60 x 60"){
        $aantal = $oppervlakte / 3600;
    }else{
        echo "Er is iets mis gegaan..";
    }
    if(isset($_POST['sand'])){
        $inhoud = $lengte * $breedte * 20;
        echo "Oppervlakte: " . $oppervlakte . " m2 <br>";
        echo "Zand: " . $inhoud . " m3 zand <br>";
        echo "Tegels: " . $aantal . " tegels " . $tegel; 
    }else{
        echo "Oppervlakte: " . $oppervlakte . " m2 <br>";
        echo "Tegels: " . $aantal . " tegels " . $tegel; 
    }
    
}