<?php

function valid_solution(array $m): bool {
    $rows = [];
    $columns = [];
    $squares = [];

    for ($x = 0; $x < 9; $x++) {
        for ($y = 0; $y < 9; $y++) {
            $rows[$x][] = $m[$x][$y];
            $columns[$y][] = $m[$x][$y];

            $bx = floor($x / 3);
            $by = floor($y / 3);
            $squares[$bx.$by][] = $m[$x][$y];
        }
    }

    $blocks = array_merge($rows, $columns, $squares);
    foreach ($blocks as $block) {
        if (!isValidBlock($block)) {
            return false;
        }
    }

    return true;
}

function isValidBlock(array $b): bool {
    sort($b);

    return $b === range(1,9);
}
