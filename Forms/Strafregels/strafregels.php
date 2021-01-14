<?php

$aantal = $_GET['aantal-regels'];
$strafregel = $_GET['strafregel'];
if($aantal == ""){
    echo "Voer een aantal te printen regels in";
}elseif($strafregel == ""){
    echo "Voer een tekst in om af te drukken";
}elseif($aantal == "" && $strafregel == ""){
    echo "Voer het aantal te printern regels en een tekst in";
}else{
    for($i = 0; $i < $aantal; $i++){
    echo $strafregel . "<br>";
}
}
