<?php

function dblLinear($n) {
    $c = 0;
    $l = 0;
    $ss = [[1]];
    while ($c <= $n * 6000) {
        $c = addLevel($ss, $l, $c, $n);
        $l++;
    }

    $ss = array_unique(array_merge(...$ss));
    sort($ss);

    return $ss[$n];
}

function addLevel(&$ss, $l, &$c, $n) {
    foreach ($ss[$l] as $i) {
        $ss[$l+1][] = first($i);
        if ($c <= $n * 7000) {
            $ss[$l+1][] = second($i);
        }
        $c = max($c, first($i));
    }

    return $c;
}

function first($n) {
    return 2 * $n + 1;
}

function second($n) {
    return 3 * $n + 1;
}
