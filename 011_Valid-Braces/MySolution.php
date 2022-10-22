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
