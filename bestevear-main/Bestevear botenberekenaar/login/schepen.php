<?php
$gewicht = $_GET["gewicht"];
$water = $_GET["zoutZoet"];
$seizoen = $_GET["seizoenen"];
$lading = $_GET["lading"];
$schip = $_GET["schip"];
$LadingopDitmoment = $_GET["LadingOpditmomentMomentID"]; 



$schepen = array("NSANGELA", "LUCKYSTAR", "SABRINA","HERMES","TRIUMPHIV");
$gewichtboot = array(4766,5905,10975,4766,6507);
$laadruimte = array(3804,4178,6278,3806,4039);
$linkboot = array("https://www.myshiptracking.com/vessels/ns-angela-mmsi-214182759-imo-9071076", "https://www.myshiptracking.com/vessels/lucky-star-mmsi-214182775-imo-0", "https://www.myshiptracking.com/vessels/sabrina-mmsi-636013067-imo-0", "https://www.myshiptracking.com/vessels/hermes-mmsi-214182786-imo-0", "https://www.myshiptracking.com/vessels/triumph-iv-mmsi-214182719-imo-0");

$resultaat = "";



function schepen(){
    $resultaat = "";
    global $schip, $schepen,$gewicht,$gewichtboot,$lading,$laadruimte,$welkeschip,$water,$seizoen, $LadingopDitmoment,$resultaat;
     if( in_array($schip, $schepen)){
         $welkeschip = array_search($schip ,$schepen);
                if($LadingopDitmoment + $lading <= $laadruimte[$welkeschip]){
                    $resultaat <= "u vracht is goedgekeurd, Geniet van u reis!";
                }
                    if($gewicht <= $gewichtboot[$welkeschip]){
                        $resultaat = "u vracht is goedgekeurd, Geniet van u reis!";
                    }
                    if($water == "zout"){
                        if($seizoen == 'lente'){
                            $resultaat =  "u vracht is goedgekeurd, Geniet van u reis!";
                        }
                        if($seizoen == 'zomer'){
                            $resultaat =  "u vracht is goedgekeurd, Geniet van u reis!";
                        }
                        if($seizoen == 'herfst'){
                            $resultaat =  "u vracht is goedgekeurd, Geniet van u reis!";
                        }
                        if($seizoen == 'winter'){
                            $resultaat =  "u vracht is goedgekeurd, Geniet van u reis!";
                        }
                        }
                        elseif($water == "zoet"){
                        if($seizoen == 'lente'){
                            $resultaat =  "u vracht is goedgekeurd, Geniet van u reis!";
                        }
                        if($seizoen == 'zomer'){
                            $resultaat =  "u vracht is goedgekeurd, Geniet van u reis!";
                        }
                        if($seizoen == 'herfst'){
                            $resultaat =  "u vracht is goedgekeurd, Geniet van u reis!";
                        }
                        if($seizoen == 'winter'){
                            $resultaat =  "u vracht is goedgekeurd, Geniet van u reis!";
                        }  
                               
                    }
                    if($LadingopDitmoment + $lading > $laadruimte[$welkeschip]){
                        $resultaat = "Verlaat de haven niet! U boot is te zwaar";
                    }
                    if($gewicht > $gewichtboot[$welkeschip]){
                        $resultaat = "Verlaat de haven niet! U boot is te zwaar";
                    }
         }                         
}
schepen();
$data = array('gewicht' => $gewicht,'zoutZoet' => $water, 'LadingOpditmomentMomentID' => $LadingopDitmoment, 'seizoenen' => $seizoen,'lading' => $lading,'schip' => $schip,'resultaat' => $resultaat);
echo json_encode($data);
