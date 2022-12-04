<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $number = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            $current = $s[$i];
            $next = $s[$i + 1];

            $value = match ($current) {
                'M' => 1000,
                'D' => 500,
                'C' => 100,
                'L' => 50,
                'X' => 10,
                'V' => 5,
                default => 1,
            };

            if (($current === 'C' && ($next === 'D' || $next === 'M'))
                || ($current === 'X' && ($next === 'L' || $next === 'C')
                    || ($current === 'I' && ($next === 'V' || $next === 'X')))
            ) {
                $number -= $value;
            } else {
                $number += $value;
            }
        }

        return $number;
    }
}
