<?php

function spinWords(string $str): string
{
    $words = explode(' ', $str);

    $words = array_map(function ($word) {
        return strlen($word) < 5 ? $word : strrev($word);
    }, $words);

    return implode(' ', $words);
}
