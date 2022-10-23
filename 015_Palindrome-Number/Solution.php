<?php

class Solution
{
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        if ($x < 0) {
            return false;
        }

        $s = (string)$x;
        $l = strlen($s);

        while ($l > 2) {
            if ($s[0] !== $s[$l - 1]) {
                return false;
            }
            $s = substr($s, 1, -1);
            $l -= 2;
        };

        return $s[0] === $s[$l - 1];
    }
}
