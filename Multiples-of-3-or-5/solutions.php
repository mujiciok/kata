<?php

function solution($number)
{
    if ($number < 0) {
        return 0;
    }

    $sum = 0;

    $i = 3;
    while ($i < $number) {
        $sum += $i;
        $i += 3;
    }

    $j = 5;
    while ($j < $number) {
        if ($j % 3 !== 0) {
            $sum += $j;
        }
        $j += 5;
    }

    return $sum;
}

function bestPractice_solution($number)
{
    $sum = 0;
    for ($i = 3; $i < $number; $i++) {
        if ($i % 3 === 0 || $i % 5 === 0) {
            $sum += $i;
        }
    }
    return $sum;
}