<?php

function TienProcentKorting(){
    $koopPrijs = 75;
    $korting = 10;
    return $aankoopPrijs = $koopPrijs / 100 * (100 - $korting);
}

echo "Het totaalbedrag is " . TienProcentKorting() . " euro.";

?>