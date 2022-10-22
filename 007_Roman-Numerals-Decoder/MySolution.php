<?php

function solution($roman)
{
    $number = 0;
    $values = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];
    $subtractive = ['IV', 'IX', 'XL', 'XC', 'CD', 'CM'];

    for ($i = 0; $i < strlen($roman); $i++) {
        $char = $roman[$i];
        $nextChar = $roman[$i + 1] ?? '';
        $isSubtractive = in_array($char . $nextChar, $subtractive);

        if ($isSubtractive) {
            $number += $values[$nextChar] - $values[$char];
            $i++;
        } else {
            $number += $values[$char];
        }
    }


    return $number;
}
