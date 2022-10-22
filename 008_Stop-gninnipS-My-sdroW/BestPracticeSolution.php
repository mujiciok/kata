<?php

function spinWords(string $str): string
{
    return preg_replace_callback('/\w{5,}/', function ($matches) {
        return strrev($matches[0]);
    }, $str);
}
