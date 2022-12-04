<?php

function generateHashtag($str) {
    $str = trim($str);
    if ($str === '') {
        return false;
    }

    $words = explode(' ', $str);
    foreach ($words as $key => $word) {
        $words[$key] = ucfirst($word);
    }

    $result = '#' . implode('', $words);
    if (strlen($result) > 140) {
        return false;
    }

    return $result;
}
