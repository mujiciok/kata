<?php

function dblLinear($n) {
    $h = 1; $cnt = 0; $q2 = array(); $q3 = array();
    while (true) {
        if ($cnt >= $n) {
            return $h;
        }
        array_push($q2, 2 * $h + 1);
        array_push($q3, 3 * $h + 1);
        $h = min($q2[0], $q3[0]);
        if ($h === $q2[0]) {
            $h = array_shift($q2);
        }
        if ($h === $q3[0]) {
            $h = array_shift($q3);
        }
        $cnt++;
    }
}
