<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
        $s = trim($s);

        if (!$s) {
            return 0;
        }

        $isNegative = false;
        if (!is_numeric($s[0]) && ($s[0] === '+' || $s[0] === '-')) {
            $isNegative = $s[0] === '-';
            $s = substr($s, 1);
        }

        if (!is_numeric($s[0])) {
            return 0;
        }

        $int = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            if (!is_numeric($s[$i])) {
                break;
            }
            $int = $int * 10 + (int)$s[$i];
        }

        $int = $isNegative ? $int * -1 : $int;

        $max = 2147483647;
        if ($int > $max) {
            return $max;
        }
        if ($int < $max * -1 - 1) {
            return $max * -1 - 1;
        }

        return $int;
    }
}