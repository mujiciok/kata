<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $max = strlen($s);

        if ($max === 1 || substr_count($s, $s[0]) === $max) {
            return $s;
        }

        for ($i = $max; $i > 1; $i--) {
            $maxPos = $max - $i;
            for ($j = 0; $j <= $maxPos; $j++) {
                $sub = substr($s, $j, $i);

                if (str_contains($s, strrev($sub))) {
                    $revSub = strrev($sub);
                    $subJ = strpos($s, $revSub);

                    if ($subJ > $j + $i || $subJ < $j) {
                        continue;
                    }

                    return substr($sub, 0, $subJ - $j) . $revSub;
                }
            }
        }

        return $s[0];
    }
}