<?php

function duplicateCount($text)
{
    $text = strtolower($text);
    $duplicates = 0;

    while ($text !== '') {
        $text = str_replace($text[0], '', $text, $count);
        if ($count > 1) {
            $duplicates++;
        }
    }

    return $duplicates;
}

function bestPractice_duplicateCount($text)
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
