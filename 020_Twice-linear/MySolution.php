<?php

function dblLinear($n) {
//   var_dump($n);
    $sf = [1];
    $ss = [1];

    $i = 0;
    [$sf, $ss] = addSequence($sf, $ss, $i, $n);

    return min(min($sf), min($ss));
}

function addSequence(&$sf, &$ss, &$i, $n) {
    if ($i === $n) {
        return [$sf, $ss];
    }

    $fm = min($sf);
    $sm = min($ss);

    if ($fm < $sm) {
        unset($sf[array_key_first($sf)]);
        $f = $fm;
    } elseif ($sm < $fm) {
        unset($ss[array_key_first($ss)]);
        $f = $sm;
    } else {
        unset($sf[array_key_first($sf)]);
        unset($ss[array_key_first($ss)]);
        $f = $fm;
    }

    if ($i < ($n / 3 * 2)) {
        $sf[] = first($f);
    }
    if ($i < ($n / 2)) {
        $ss[] = second($f);
    }
    $i++;

    return addSequence($sf, $ss, $i, $n);
}

function first($n) {
    return 2 * $n + 1;
}

function second($n) {
    return 3 * $n + 1;
}
