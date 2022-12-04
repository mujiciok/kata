<?php

function generateHashtag($str) {
    $str = '#' . str_replace(' ', '', ucwords($str));

    return (strlen($str) > 140 || strlen($str) == 1) ? false : $str;
}
