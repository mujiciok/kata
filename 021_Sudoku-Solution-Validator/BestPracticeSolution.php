<?php

function valid_solution(array $m): bool
{
    foreach ($m as $k => $v) {
        $row = $col = $grid = array_fill(0, 9, false);
        foreach ($v as $kk => $vv) {
            // validate row
            if ($vv = 0 || $row[$vv -1] == true) {
                return false;
            } else {
                $row[$vv -1] = true;
            }

            // validate column
            $key = $m[$kk][$k] -1 ;
            if ($col[$key] == true) {
                return false;
            } else {
                $col[$key] = true;
            }

            // validate grid
            $x = 3 * intdiv($k, 3) + intdiv($kk, 3);
            $y = 3 * ($k % 3) + $kk % 3;
            $key = $m[$x][$y] -1;
            if ($grid[$key] == true) {
                return false;
            } else {
                $grid[$key] = true;
            }
        }
    }

    return true;
}
