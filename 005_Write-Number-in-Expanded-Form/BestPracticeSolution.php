<?php

function expanded_form(int $n): string {
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
