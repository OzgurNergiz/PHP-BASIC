<?php

$voornaam = "Özgür";
$achternaam = "Nergiz";

function mijnNaamIsGroot($voornaam, $achternaam){
    $geheleNaam = $voornaam . " " . $achternaam;
    echo strtoupper("Mijn naam is " . $geheleNaam);
}

mijnNaamIsGroot($voornaam, $achternaam);

?>