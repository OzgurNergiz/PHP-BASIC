<?php

$woordje = "Hallo";
$zinnetje = "mooie blauwe planeet!";

function zetTweeWoordenAanElkaar($woordje, $zinnetje){
    $heleZin = $woordje . " " .  $zinnetje;
    return $heleZin;
}

echo zetTweeWoordenAanElkaar($woordje, $zinnetje);
?>