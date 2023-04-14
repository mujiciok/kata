<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        if (substr_count($s, '(') !== substr_count($s, ')')) {
            return false;
        }
        if (substr_count($s, '[') !== substr_count($s, ']')) {
            return false;
        }
        if (substr_count($s, '{') !== substr_count($s, '}')) {
            return false;
        }

        while ($s !== '') {
            $len = strlen($s);
            $s = str_replace('()', '', $s);
            $s = str_replace('[]', '', $s);
            $s = str_replace('{}', '', $s);

            if ($len === strlen($s)) {
                return false;
            }
        }

        return true;
    }
}