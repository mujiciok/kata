<?php

function solve_expression(string $input): int
{
    for ($x = 0; $x < 10; $x++) {
        if ($x == 0 && !isZeroAllowed($input)) continue;
        if (strpos($input, "$x") !== false) continue;
        $command = 'return ' . str_replace(['--', '=', '?'], ['+', '==', $x], $input) . ';';
        if (eval($command)) return $x;
    }
    return -1;
}

function isZeroAllowed(string $input): bool
{
    $arr = preg_split('/[+*=-]/', $input);
    foreach (array_filter($arr) as $nr) {
        if (($nr[0] === 0 || $nr[0] === '?' && isset($nr[1]))) return false;
    }
    return true;
}
