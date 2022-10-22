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
