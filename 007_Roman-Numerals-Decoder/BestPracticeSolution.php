<?php

function solution($roman)
{
    $number = 0;
    $roman_length = strlen($roman);

    $arr = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    for ($i = 0; $i < $roman_length; $i++) {

        if ($arr[$roman{$i}] < $arr[$roman{$i + 1}]) {
            $number -= $arr[$roman{$i}];
        } else {
            $number += $arr[$roman{$i}];
        }
    }

    return $number;
}
