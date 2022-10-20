<?php

function expanded_form(int $n): string
{
    $power = 0;
    $expanded = [];
    $number = (string)$n;

    for ($i = strlen($number); $i > 0; $i--) {
        $digit = $number[$i - 1];
        if ($digit !== '0') {
            $expanded[] = $digit * 10 ** $power;
        }
        $power++;
    }

    return implode(' + ', array_reverse($expanded));
}

function bestPractice_expanded_form(int $n): string {
    $split = str_split($n);
    $num_digits = count($split);
    $numbers_arr = [];
    foreach ($split as $digit) {
        if ($digit != 0) {
            $numbers_arr[] = $digit . str_repeat(0, $num_digits - 1);
        }
        $num_digits--;
    }
    return implode(' + ', $numbers_arr);
}
