<?php

function encrypt($text, $n)
{
    if (empty($text) || $n <= 0) {
        return $text;
    }

    $encrypted = $text;
    while ($n-- > 0) {
        $even = '';
        $odd = '';
        for ($j = 0; $j < strlen($text); $j += 2) {
            $even .= $encrypted[$j];
            $odd .= $encrypted[$j + 1];
        }
        $encrypted = $odd . $even;
    }

    return $encrypted;
}

function decrypt($text, $n)
{
    if (empty($text) || $n <= 0) {
        return $text;
    }

    $decrypted = $text;
    $mid = floor(strlen($text) / 2);
    while ($n-- > 0) {
        $text = '';
        $odd = substr($decrypted, 0, $mid);
        $even = substr($decrypted, $mid);

        for ($j = 0; $j <= $mid; $j++) {
            $text .= $even[$j] ?? '';
            $text .= $odd[$j] ?? '';
        }
        $decrypted = $text;
    }

    return $decrypted;
}
