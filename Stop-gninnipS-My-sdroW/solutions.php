<?php

function spinWords(string $str): string
{
    $words = explode(' ', $str);

    $words = array_map(function ($word) {
        return strlen($word) < 5 ? $word : strrev($word);
    }, $words);

    return implode(' ', $words);
}

function bestPractice_spinWords(string $str): string
{
    return preg_replace_callback('/\w{5,}/', function ($matches) {
        return strrev($matches[0]);
    }, $str);
}
