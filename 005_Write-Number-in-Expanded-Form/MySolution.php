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
