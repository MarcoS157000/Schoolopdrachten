<?php
include "top.php";

$check = isset($_GET["pagina"]);
if($check){
    $pagina = $_GET["pagina"];
    $content = $pagina . ".php";
    include $content;
} else {
    include 'maincontent.php';
}    
?>
        <div id="content_area">
            <?php echo $content; ?>
        </div>

        <div id="sidebar">

        </div>
</php

<?php
include "bottom.php";
?>

