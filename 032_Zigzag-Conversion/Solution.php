<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        $len = strlen($s);
        if ($numRows === 1 || $len === $numRows) {
            return $s;
        }

        $zigzag = [];
        $row = 1;
        $col = 1;
        $ascending = true;

        for ($i = 0; $i < $len; $i++) {
            $zigzag[$row][$col] = $s[$i];

            if ($row === $numRows) {
                $ascending = false;
            }
            if ($row === 1) {
                $ascending = true;
            }

            if ($ascending) {
                $row++;
            } else {
                $row--;
                $col++;
            }
        }

        $result = '';
        foreach ($zigzag as $row) {
            $result .= implode('', $row);
        }

        return $result;
    }
}