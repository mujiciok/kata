<?php

function encryptThis($text): string
{
    $words = explode(' ', $text);

    foreach ($words as &$word) {
        $length = strlen($word);
        $first = ord($word[0]);

        if ($length <= 2) {
            $word = preg_replace('/^(\w)(.*?)$/', "$first$2", $word);
            continue;
        }

        $second = $word[1];
        $last = $word[$length - 1];
        $word = preg_replace('/^(\w)(\w)(.*?)(\w)$/', "$first$last$3$second", $word);
    }

    return implode(' ', $words);
}
