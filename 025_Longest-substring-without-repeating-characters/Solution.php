<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $sub = '';
        $max = 0;
        $last = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            if (str_contains($sub, $s[$i])) {
                $sub = '';
                $last++;
                $i = $last;
            }
            $sub .= $s[$i];
            $subLength = strlen($sub);
            $max = $subLength > $max ? $subLength : $max;
        }

        return $max;
    }
}
