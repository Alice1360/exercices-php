<?php

function division(int $diviseur, int $divise)
{
    if ($diviseur == 0) {
        return false;
    }
    return $divise / $diviseur;
}

function factorielle(int $number)
{
    if ($number == 0) {
        return 1;
    }
    return $number * factorielle($number-1);
}


var_dump(division(4, 8));
var_dump(division(10, 120));
var_dump(factorielle(6));
var_dump(factorielle(10));
