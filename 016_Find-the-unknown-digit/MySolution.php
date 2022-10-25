<?php

function solve_expression(string $expression): int
{
    for ($i = 0; $i <= 9; $i++) {
        if (checkNumberExists($expression, (string)$i)) {
            continue;
        }

        $expr = str_replace('?', $i, $expression);
        [$leftSide, $rightSide] = explode('=', $expr);

        [$n1, $operator, $n2] = getNumbers($leftSide);

        if (!validateNumber($n1) || !validateNumber($n2) || !validateNumber($rightSide)) {
            continue;
        }

        if ($operator === '+' && $n1 + $n2 === (int)$rightSide)
            return $i;
        if ($operator === '-' && $n1 - $n2 === (int)$rightSide)
            return $i;
        if ($operator === '*' && $n1 * $n2 === (int)$rightSide)
            return $i;
    }

    return -1;
}

function checkNumberExists(string $expression, string $number): bool
{
    return str_contains($expression, $number);
}

function getNumbers(string $leftSide): array
{
    preg_match_all('/(-?\d+)([\-+*])(-?\d+)/', $leftSide, $matches, PREG_SET_ORDER);

    $n1 = $matches[0][1];
    $operator = $matches[0][2];
    $n2 = $matches[0][3];

    return [$n1, $operator, $n2];
}

function validateNumber(string $number): bool
{
    if (strlen($number) === 1) {
        return true;
    }

    if ($number[0] === '0') {
        return false;
    }

    if ($number[0] === '-' && $number[1] === '0') {
        return false;
    }

    return true;
}
