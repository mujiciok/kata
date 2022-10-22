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
