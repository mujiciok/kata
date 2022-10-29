<?php

function loop_size(Node $n): int {
    $a = [];
    while (!in_array($n, $a, true)) {
        array_push($a, $n);
        $n = $n->getNext();
    }
    return count($a) - array_search($n, $a, true);
}
