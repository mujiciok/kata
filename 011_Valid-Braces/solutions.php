<?php

function validBraces($braces)
{
    $temp = preg_replace('/(\(\)|\[\]|\{\})/', '', $braces);
    if ($temp === '') {
        return true;
    }
    if ($temp === $braces) {
        return false;
    }

    return validBraces($temp);
}

function bestPractice_validBraces($braces)
{
    do {
        $braces = str_replace(['()', '[]', '{}'], '', $braces, $count);
    } while ($count);

    return empty($braces);
}
