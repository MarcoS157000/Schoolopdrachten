<?php

$word1 = $_POST['word1'];
$word2 = $_POST['word2'];
$word3 = $_POST['word3'];
$wordArray = array($word1, $word2, $word3);
$perms = array();

if($word1 != "" && $word2 != "" && $word3 != ""){
    pc_permute($wordArray, $perms);
}else{
    echo "Er zijn minimaal drie woorden nodig";
}

function pc_permute($items, $perms) {
    if (empty($items)) { 
        print join(' ', $perms) . "\n</br>";
    }  else {
        for ($i = count($items) - 1; $i >= 0; --$i) {
             $newitems = $items;
             $newperms = $perms;
             list($foo) = array_splice($newitems, $i, 1);
             array_unshift($newperms, $foo);
             pc_permute($newitems, $newperms);
         }
    }
}