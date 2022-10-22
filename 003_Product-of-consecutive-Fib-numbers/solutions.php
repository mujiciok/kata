<?php

function productFib($prod)
{
    $prev = 0;
    $next = 1;

    while ($prev * $next <= $prod) {
        if ($prev * $next === $prod) {
            return [$prev, $next, true];
        }

        $next += $prev;
        $prev = $next - $prev;
    }

    return [$prev, $next, false];
}

function bestPractice_productFib($prod)
{
    $a = 0;
    $b = 1;
    while ($a * $b < $prod) {
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
    return [$a, $b, $a * $b == $prod];
}
