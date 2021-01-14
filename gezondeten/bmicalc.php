<?php include "top.php"?>
<?php

    $Gewicht = $_POST["gewicht"];
    $Lengte =  $_POST["lengte"];

    $BMI = $Gewicht/(($Lengte/100)*($Lengte/100));
    $BMI = round($BMI,2);

    if ($BMI < 18.5) {

        $uitkomst = "Ondergewicht";

        }
        
    elseif ($BMI >= 18.5 && $BMI < 25) {
        
        $uitkomst = "Een Goed gewicht";
       
        
        }
    if ($BMI >= 25 && $BMI < 27) {

        $uitkomst = "Licht overgewicht";
    
        }
            
    elseif ($BMI >= 27 && $BMI < 30) {
            
        $uitkomst = "Matig overgewicht";
        
            
        }
    if ($BMI >= 30 && $BMI < 40) {

        $uitkomst = "Ernstig overgewicht";
        
                
        }
                
    elseif ($BMI >= 40) {
                
        $uitkomst = "Gevaarlijk overgewicht";
        
                
        }
   
        echo "<h1>  Je BMI is $BMI  , je hebt $uitkomst</h1>";
    
    ?>
    
    <?php include "bmi/bmicalcpage.php"?>
    <?php include "bottom.php"?>