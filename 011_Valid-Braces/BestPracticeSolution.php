<?php

function validBraces($braces)
{
    do {
        $braces = str_replace(['()', '[]', '{}'], '', $braces, $count);
    } while ($count);

    return empty($braces);
}
