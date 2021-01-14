<?php

$papegaai = $_GET["text"];
if(isset($_GET['checkbox'])){
    if($papegaai == ""){

    echo "wat is het stil";

}else{
    echo strrev($papegaai);
}
}else{
    if($papegaai == ""){
        echo "wat is het stil";
    }else{
        echo $papegaai;
    }
}
