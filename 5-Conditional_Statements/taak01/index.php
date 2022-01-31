<?php

$test1 = 12;
$test2 = "gewoon tekst";

$test1 == $test2;
$test1 === $test2;
$test1 != $test2;
$test1 > $test2;
$test1 < $test2;
$test1 <> $test2;
$test1 >= $test2;
$test1 <= $test2;

var_dump(
    $test1 == $test2,  
    $test1 === $test2,
    $test1 != $test2,
    $test1 > $test2,
    $test1 < $test2,
    $test1 <> $test2,
    $test1 >= $test2,
    $test1 <= $test2
);

?>