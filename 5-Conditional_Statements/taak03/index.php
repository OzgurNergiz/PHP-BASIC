<?php

$test1 = 3;
$test2 = 6;

if($test1 == $test2) {
    echo "gelijk";
}
else {
    echo "niet gelijk";
}

echo '<br>';

if($test1 > $test2) {
    echo "groter";
}
else {
    echo "kleiner";
}

echo '<br>';

if($test1 >= $test2) {
    echo "groter of gelijk";
}
else {
    echo "kleiner en niet gelijk";
}

?>