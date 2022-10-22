<?php

function rgb($r, $g, $b)
{
    $string = '';

    foreach ([$r, $g, $b] as $color) {
        $color = max($color, 0);
        $color = min($color, 255);

        $string .= str_pad(dechex($color), 2, '0', STR_PAD_LEFT);
    }

    return strtoupper($string);
}

function bestPractice_rgb($r,$g,$b){
    return sprintf("%02X%02X%02X", checkValue($r), checkValue($g), checkValue($b));
}

function checkValue($value){
    return $value > 255 ? 255 : ($value < 0 ? 0 : $value);
}
