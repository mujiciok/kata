<?php

function duplicateCount($text)
{
    $dupCount = 0;
    $text = array_count_values(str_split(strtolower($text)));

    foreach ($text as $val) {
        if ($val > 1) {
            $dupCount = $dupCount + 1;
        }
    }

    return $dupCount;
}
