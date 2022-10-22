<?php

function encrypt($text, $n)
{
    if ($n <= 0) return $text;

    $result = $text;

    for ($i = 0; $i < $n; $i++) {
        $map = str_split($result, 1);
        $even = array_filter($map, function ($k) {
            return ($k % 2 === 0);
        }, ARRAY_FILTER_USE_KEY);
        $odd = array_filter($map, function ($k) {
            return ($k % 2 !== 0);
        }, ARRAY_FILTER_USE_KEY);

        $result = implode('', $odd) . implode('', $even);
    }

    return $result;
}

function decrypt($text, $n)
{
    if ($n <= 0) return $text;

    $result = $text;

    for ($i = 0; $i < $n; $i++) {
        $map = str_split($result, 1);
        $even = array_slice($map, 0, floor(count($map) / 2));
        $odd = array_slice($map, floor(count($map) / 2));

        $result = '';
        for ($x = 0; $x < count($map); $x++) {
            $result .= ($x % 2 === 0) ? array_shift($odd) : array_shift($even);
        }

    }

    return $result;
}
